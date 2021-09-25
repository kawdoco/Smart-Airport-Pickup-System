<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>404 - srilankacabs.lk</title>
        <meta name="description" content="">
        <meta name="keyword" content="" >
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.srilankacars.lk//img/fev.png">   
        <!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">       
        <!--<link rel="stylesheet" type="text/css" href="http://www.srilankacars.lk//css/style.css">-->
        <link rel="stylesheet" type="text/css" href="http://www.srilankacars.lk//css/styles.css">

        <link href="css/style1.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="http://www.srilankacars.lk//css/kawdoco.css">
        <link href="http://www.srilankacars.lk//css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="back_carousel.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>	
        <link href="css/style-new.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://www.srilankacars.lk//js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script type='text/javascript' src='http://www.srilankacars.lk//js/jquary.js'></script>
        <script src="http://www.srilankacars.lk//js/kawdoco.min.js"></script>
        <script src="js/lazysizes.min.js" type="text/javascript"></script>
         <script src="http://maps.google.com/maps/api/js?key=AIzaSyDsG_6esomUW668FqHsa8gDwqqrXjAbH2k&sensor=false" type="text/javascript"></script>

        <style>
            .col-centered{
    float: none;
    margin: 0 auto;
}
        </style>
     
      
    </head>

    <body id="body">
        <ul class="cb-slideshow" style="list-style-type: none;">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
            <li><span>Image 07</span></li>
            <li><span>Image 08</span></li>
        </ul>




        <!--<div class="container-edit-fluid" style="background-color: #f57315; height: 10px;position: relative;"></div>-->

        <?php require_once('menu.php'); ?> 







       
       

      

        
        <div id="thankyou">
            <div class="container-edit " style="margin-top: 150px;background-color: #f5f5f5;position: relative;">


            <div class="row"  style="padding: 50px;">
                <h1 class="text-center">404</h1>
                <h3 class="text-center">Page Not Found</h3>
            </div>
            </div>
           <div class="container-edit">
             <div class="row">
                    <div class="col-md-4  col-centered" style="margin-top: -15px;">
                        <img src="img/no.png" class="center-block img-responsive">
                </div>
                </div>
                </div>


        </div>
        </div>
        



  <!--<div class="container-edit-fluid" style=" padding: 0; margin: 0;position: relative;"> <?php // require_once 'carousel.php';   ?></div>-->   

        <div style="margin-top: 200px;">
            <?php require_once('pagefooter.php'); ?>   
        </div>  



        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-575a8af0bb216f99"></script>

 <script type="text/javascript">
//    var locations = [
//         ['Kimbulapitiya', 7.2042, 79.8941, 7],
//         ['Dagonna', 7.2101, 79.9165, 6],
//         ['Wegowwa', 7.1716, 79.9746, 5],
//         ['Minuwangoda', 7.1842, 79.9500, 4],
//         ['Negombo', 7.2008, 79.8737, 3],
//         
//         ['Katunayake', 7.1725, 79.8853, 2],
//      ['Airport', 7.184412, 79.884938, 1]
//
//    ];
//
//   var styles = [
//        {
//            featureType: "landscape",
//            stylers: [
// { color: '#6C7A89' }
//            ]}
////        {
////            featureType: "road",
////            stylers: [
//// { color: '#FDE3A7' }
////            ]},
////        {
////            featureType: "building",
////            elementType: "labels",
////            stylers: [
//// { color: '#ffffff' }
////            ]}
//        
//    ];
//
//    var map = new google.maps.Map(document.getElementById('map'), {
//      zoom: 13,
//      center: new google.maps.LatLng(7.18, 79.88),
//      mapTypeId: google.maps.MapTypeId.ROADMAP,
//      disableDefaultUI: true,
////     styles: styles
//    });
//
//
// 
//    var infowindow = new google.maps.InfoWindow();
//
//    var marker, i;
//
//    for (i = 0; i < locations.length; i++) {  
//      marker = new google.maps.Marker({
//        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
//        map: map,
//        icon: 'img/icgg.png'
//      });
//
//      google.maps.event.addListener(marker, 'click', (function(marker, i) {
//        return function() {
//          infowindow.setContent(locations[i][0]);
//          infowindow.open(map, marker);
//        }
//      })(marker, i));
//    } 

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
