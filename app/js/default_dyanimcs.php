

function initDoughnutChart(){
	"use strict";

	$j('.percentage').each(function() {
		var $barColor = '#009CFF';
		var $trackColor = '#f4f4f4';
		var $size = 166;

		$j(this).appear(function() {
			$j(this).easyPieChart({
				barColor: $barColor,
				trackColor: $trackColor,
				scaleColor: false,
				lineCap: 'butt',
				lineWidth: 25,
				animate: 1500,
				size: $size
			});
		},{accX: 0, accY: -150});
	});
}



var line_height = 90;
var logo_height; // it's value is calculated in window load function

function headerSize(scroll){
	"use strict";
		if((line_height - scroll) > line_height){
			$j('header .header_inner nav.main_menu > ul > li > a').stop().animate({'line-height': line_height+'px'},200);
			$j('header .header_inner .header_right_widget').stop().animate({'line-height': line_height+'px'},200);
			$j('header .header_inner .drop_down .second').stop().animate({'top': line_height+'px'},100);
			$j('header .header_inner .drop_down2 .second').stop().animate({'top': line_height+'px'},100);
			$j('header .header_inner .header_right_widget #lang_sel ul ul').stop().animate({'top': line_height+'px'},100);
			$j('header .header_inner .header_right_widget #lang_sel_click ul ul').stop().animate({'top': line_height+'px'},100);
		}else if((line_height - scroll) < line_height){
			$j('header').addClass('move_menu');
			$j('header .header_inner nav.main_menu > ul > li > a').stop().animate({'line-height': '65px'},200);
			$j('header .header_inner .header_right_widget').stop().animate({'line-height': '65px'},200);
			$j('header .header_inner .drop_down .second').stop().animate({'top': '65px'},100);
			$j('header .header_inner .drop_down2 .second').stop().animate({'top': '65px'},100);
			$j('header .header_inner .header_right_widget #lang_sel ul ul').stop().animate({'top': '65px'},100);
			$j('header .header_inner .header_right_widget #lang_sel_click ul ul').stop().animate({'top': '65px'},100);
		}else if(scroll === 0){
			$j('header .header_inner nav.main_menu > ul > li > a').stop().animate({'line-height': line_height+'px'},100);
			$j('header .header_inner .header_right_widget').stop().animate({'line-height': line_height+'px'},100);
			$j('header .header_inner .drop_down .second').stop().animate({'top': line_height+'px'},200);
			$j('header .header_inner .drop_down2 .second').stop().animate({'top': line_height+'px'},200);
			$j('header .header_inner .header_right_widget #lang_sel ul ul').stop().animate({'top': line_height+'px'},200);
			$j('header .header_inner .header_right_widget #lang_sel_click ul ul').stop().animate({'top': line_height+'px'},200);
			$j('header').removeClass('move_menu');
		}

		if(scroll === 0 && line_height - logo_height >= 10){
			$j('.logo a').height(logo_height);
		}else if(scroll === 0 && line_height - logo_height < 10){
			$j('.logo a').height(line_height - 10);
		}else if( scroll != 0 && logo_height >= 55){
			$j('.logo a').height(55);
		}else if( scroll != 0 && logo_height < 55){
			$j('.logo a').height(logo_height);
		}
}

function setLogoHeightOnLoad(){
	"use strict";

	if(line_height - logo_height >= 10){
		$j('.logo a').height(logo_height);
	}else if(line_height - logo_height < 10){
		$j('.logo a').height(line_height - 10);
	}
	$j('.logo a img').css('height','100%');


}function getQueryVariable(variable) {	var query = window.location.search.substring(1);	var vars = query.split("&");	for (var i = 0; i < vars.length; i++) {		var pair = vars[i].split("=");		if (pair[0] == variable) {			return pair[1];		}	}}

function ajaxSubmitCommentForm(){
	"use strict";

	var options = {
		success: function(){
			$j("#commentform textarea").val("");
			$j("#commentform .success p").text("Comment has been sent!");
		}
	};

	$j('#commentform').submit(function() {
		$j(this).find('input[type="submit"]').next('.success').remove();
		$j(this).find('input[type="submit"]').after('<div class="success"><p></p></div>');
		$j(this).ajaxSubmit(options);
		return false;
	});
}


var geocoder;
var map;

function initialize() {
	"use strict";

	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-34.397, 150.644);
	var myOptions = {
		zoom: 15,
		    scrollwheel: false,
				center: latlng,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		scaleControl: false,
			scaleControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		streetViewControl: false,
			streetViewControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		panControl: false,
		panControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		mapTypeControl: false,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'pink_parks'],
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}

function codeAddress(data) {
	"use strict";

	var contentString = '<div id="content">'+
	'<div id="siteNotice">'+
	'</div>'+
	'<div id="bodyContent">'+
	'<p>'+data+'</p>'+
	'</div>'+
	'</div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	geocoder.geocode( { 'address': data}, function(results, status) {
		if (status === google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location,
								icon:  'http://altourentertainment.com/wp-content/uploads/2013/11/altour_map_marker1.png',
								title: data['store_title']
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
			//infowindow.open(map,marker);
		}
	});
}

var $j = jQuery.noConflict();

$j(document).ready(function() {
	"use strict";

	showContactMap();
});

function showContactMap() {
	"use strict";

	if($j("#map_canvas").length > 0){
		initialize();		if(getQueryVariable("city") == 'la'){			codeAddress('12100 W. Olympic Blvd. #300, Los Angeles, CA 90064');		}		else if(getQueryVariable("city") == 'nyc'){			codeAddress('1270 Avenue of the Americas, New York, NY 10020');		}		else{			codeAddress('Eastcheap Court, 11 Philpot Lane, London, EC3M 8BA');		}	

	}
}

var no_ajax_pages = [];
var root = 'http://www.altour.com/';
var parallax_speed = 1;


		no_ajax_pages.push('index.php');
		no_ajax_pages.push('');
