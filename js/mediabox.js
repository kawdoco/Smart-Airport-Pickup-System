/*! mediabox v0.0.3 | (c) 2016 Pedro Rogerio | https://github.com/pinceladasdaweb/mediabox */
(function (root, factory) {
    "use strict";
    if (typeof define === 'function' && define.amd) {
        define([], factory);
    } else if (typeof exports === 'object') {
        module.exports = factory();
    } else {
        root.MediaBox = factory();
    }
}(this, function () {
    "use strict";

    var MediaBox = function (element) {
        if (!this || !(this instanceof MediaBox)) {
            return new MediaBox(element);
        }

        this.selector = document.querySelectorAll(element);
        this.root     = document.querySelector('body');
        this.run();
    };

    MediaBox.prototype = {
        run: function () {
            Array.prototype.forEach.call(this.selector, function (el) {
                el.addEventListener('click', function (e) {
                    e.preventDefault();

                    var link = this.parseUrl(el.getAttribute('href'));
                    this.render(link);
                    this.events();
                }.bind(this), false);
            }.bind(this));
        },
        debounce: function(func, wait, immediate) {
            var timeout;
    return function() {
        var context = this,
            args = arguments;
        var later = function() {
            timeout = null;
            if ( !immediate ) {
                func.apply(context, args);
            }
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait || 200);
        if ( callNow ) {
            func.apply(context, args);
        }
    };
        },
        template: function (s, d) {
            var p;

            for (p in d) {
                if (d.hasOwnProperty(p)) {
                    s = s.replace(new RegExp('{' + p + '}', 'g'), d[p]);
                }
            }
            return s;
        },
        parseUrl: function (url) {
            var service = {},
                matches;

            if (matches = url.match(/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*).*/)) {
                service.provider = "youtube";
                service.id       = matches[2];
            } else if (matches = url.match(/https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/)) {
                service.provider = "vimeo";
                service.id       = matches[3];
            } else {
                service.provider = "Unknown";
                service.id       = '';
            }

            return service;
        },
        render: function (service) {
            var embedLink,
                lightbox;

            if (service.provider === 'youtube') {
                embedLink = 'https://www.youtube.com/embed/' + service.id;
            } else if (service.provider === 'vimeo') {
                embedLink = 'https://player.vimeo.com/video/' + service.id;
            } else {
                throw new Error("Invalid video URL");
            }

            lightbox = this.template(
                '<div class="mediabox-wrap" role="dialog" aria-hidden="false"><div class="mediabox-content" role="document" tabindex="0"><span class="mediabox-close" aria-label="close"></span><iframe src="{embed}?autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>', {
                    embed: embedLink
                });

            this.root.insertAdjacentHTML('beforeend', lightbox);
        },
        events: function () {
            var wrapper = document.querySelector('.mediabox-wrap');

            wrapper.addEventListener('click', function (e) {
                if (e.target && e.target.nodeName === 'SPAN' && e.target.className === 'mediabox-close') {
                    this.close(wrapper);
                }
            }.bind(this), false);
        },
        close: function (el) {
            var timer = null;

            if (timer) {
                clearTimeout(timer);
            }

            el.classList.add('mediabox-hide');

            timer = setTimeout(function() {
                this.root.removeChild(el);
            }.bind(this), 500);
        }
    };

    return MediaBox;
}));