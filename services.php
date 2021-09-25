<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Services - Ayubowan Cabs</title>
        <meta name="description" content="">
        <meta name="keyword" content="" >
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.srilankacars.lk/img/fev.png">   
        <!-- This website developed by ruchini @ Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
        <link rel="stylesheet" type="text/css" href="http://www.srilankacars.lk/css/styles.css">
    
        <link href="http://www.srilankacars.lk/css/style1.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="http://www.srilankacars.lk/css/kawdoco.css">
       
        <link href="http://www.srilankacars.lk/css/style-new.css" rel="stylesheet" type="text/css"/>
     
        <script src="http://www.srilankacars.lk/js/jquery.min.js" type="text/javascript"></script>
       
        
        <script src="http://www.srilankacars.lk/js/kawdoco.min.js"></script>
      
       <script src="http://maps.google.com/maps/api/js?key=AIzaSyDsG_6esomUW668FqHsa8gDwqqrXjAbH2k&sensor=false" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $("a").on('click', function(event) {
 if (this.hash !== "") {
      event.preventDefault();
 var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
       
        window.location.hash = hash;
      });
    }
  });
});</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '114095635927633'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=114095635927633&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
        <style>
            .col-centered{
    float: none;
    margin: 0 auto;

        </style>

      
    </head>

    <body style="background:url('img/2.jpg');background-attachment: fixed;background-size: cover;">
     


        <?php require_once('menu.php'); ?>
       <div class="container-edit-fluid" style="margin-top: 150px;">
            <div class="curve"><a href="#services"><img src="img/down.png" alt="Down" class="center-block"></a></div>
        </div>
        <div class="container-edit-fluid" style="background-color: #e5e5e5;" id="services">

          <div class="container-edit"  style="padding: 80px;">
                
                <div class="row">
                    <h1 class="text-center" style="font-size: 80px;color:#f58220;font-weight: 900;letter-spacing: -1px; "><span style="font-weight: 100;letter-spacing: -1px;">Why</span> Us</h1>
                    <p class="text-center" style="font-size: 30px;">
                      Airport Pickup </p>
                   <p class="text-center" style="font-size: 18px;">
                        Our own fleet of vehicles dedicated for Airport pickup service swiftly responds on confirmation to drop you off at your required location in Sri Lanka. Should you require traveling on your personalized tour around the country, our chauffeur guides would be most obliged to help you plan out your tour, and our call center representatives will provide you with a quotation depending on where your destinations will be, and the number of days you will be in Sri Lanka.
                    </p>
                   <p class="text-center" style="font-size: 30px;">
                     Airport Drop </p>
                   <p class="text-center" style="font-size: 18px;">
                        Vehicles are stationed at your convenience at selected locations in order to pick you up from the hotel/accommodation you need to be picked up from and bring you on time to the airport.
                    </p>
                </div>
                
            </div>
            
            </div>
         <div class="container-edit">
             <div class="row">
                    <div class="col-md-4  col-centered" style="margin-top: -15px;">
                        <img src="img/no.png" class="center-block img-responsive">
                </div>
                </div>
                </div>
     <div class="container-edit">
             <div class="row">
                    <div class="col-md-3  col-centered" style="margin-top: 150px;">
                        <img src="img/hourss.png" class="center-block img-responsive">
                </div>
                </div>
                </div>
        

        <div style="margin-top: 150px;">
            <?php require_once('pagefooter.php'); ?>   
        </div>  



        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-575a8af0bb216f99"></script>

 
  <script type="text/javascript">


function addDynamicMarker(location) {
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        draggable: false,
        icon: 'img/icgg.png',
        animation: google.maps.Animation.DROP
    });
    setTimeout(function () {
        marker.setMap(null);
        delete marker;
    }, 2000);
    return marker;
}

var map = null;
function initialize() {
    var mapOptions = {
        zoom: 4,
        center: new google.maps.LatLng(7.18, 79.88)
       
    };

    map = new google.maps.Map(document.getElementById('map'),
    mapOptions);

    // Add 500 markers to the map at random locations
    var airport = new google.maps.LatLng(7.184412, 79.884938);
    var Kimbulapitiya = new google.maps.LatLng(7.2042, 79.8941);

    var bounds = new google.maps.LatLngBounds(airport, Kimbulapitiya);
    map.fitBounds(bounds);

    var lngSpan = Kimbulapitiya.lng() - airport.lng();
    var latSpan = Kimbulapitiya.lat() - airport.lat();


    setInterval(function () {
        var position = new google.maps.LatLng(
        airport.lat() + latSpan * Math.random(),
        airport.lng() + lngSpan * Math.random());
        var marker = addDynamicMarker(position);
        /*
        var marker = new google.maps.Marker({
            position: position,
            map: map
        });
        */

        marker.setTitle((i + 1).toString());
        attachSecretMessage(marker, i);
    }, 2000);
}

// The five markers show a secret message when clicked
// but that message is not within the marker's instance data
function attachSecretMessage(marker, num) {
    
     var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(marker.get('map'), marker);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

function addDynamicMarker1(location) {
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        draggable: false,
        icon: 'img/icgg.png',
        animation: google.maps.Animation.DROP
    });
    setTimeout(function () {
        marker.setMap(null);
        delete marker;
    }, 2000);
    return marker;
}

var map = null;
function initialize1() {
    var mapOptions = {
        zoom: 4,
        center: new google.maps.LatLng(7.18, 79.88)
       
    };

    map = new google.maps.Map(document.getElementById('map'),
    mapOptions);

    // Add 500 markers to the map at random locations
    var Katunayake = new google.maps.LatLng(7.1725, 79.8853);
    var dagonna = new google.maps.LatLng(7.2101, 79.9165);

    var bounds = new google.maps.LatLngBounds(Katunayake, dagonna);
    map.fitBounds(bounds);

    var lngSpan = dagonna.lng() - Katunayake.lng();
    var latSpan = dagonna.lat() - Katunayake.lat();


    setInterval(function () {
        var position = new google.maps.LatLng(
        Katunayake.lat() + latSpan * Math.random(),
        Katunayake.lng() + lngSpan * Math.random());
        var marker = addDynamicMarker1(position);
        /*
        var marker = new google.maps.Marker({
            position: position,
            map: map
        });
        */

        marker.setTitle((i + 1).toString());
        attachSecretMessage1(marker, i);
    }, 2500);
}

// The five markers show a secret message when clicked
// but that message is not within the marker's instance data
function attachSecretMessage1(marker, num) {
    
     var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(marker.get('map'), marker);
    });
}

google.maps.event.addDomListener(window, 'load', initialize1);
  </script>

    </body>
</html>
