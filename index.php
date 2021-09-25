<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Airport Pickup - Airport Drop </title>   
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name=viewport content="width=device-width,initial-scale=1">       
        <link href="http://www.susara.lk/expert/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    
        <link rel="stylesheet" type="text/css" href="http://www.susara.lk/expert/css/styles.css">    
        <link href="http://www.susara.lk/expert/css/style1.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="http://www.susara.lk/expert/css/kawdoco.css">
        <link href="http://www.susara.lk/expert/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="http://www.susara.lk/expert/css/back_carou.css" rel="stylesheet" type="text/css"/>
        <link href="http://www.susara.lk/expert/css/style-new.css" rel="stylesheet" type="text/css"/>     
        <script src="http://www.susara.lk/expert/js/jquery.min.js" type="text/javascript"></script>       
        <script src="http://www.susara.lk/expert/js/bootstrap-datepicker.js" type="text/javascript"></script>       
        <script src="http://www.susara.lk/expert/js/kawdoco.min.js"></script>          
        <style>
            .col-centered{
    float: none;
    margin: 0 auto;
}
        </style>
        <script>
            $(document).ready(function () {
                window.scrollTo(0,0);
                
//                  $("a").on('click', function(event) {
                  $('a[href*="#ajax_cont"]').on('click', function(event) {
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

                $('#ajax_cont').hide();
                $('#loading').hide();
                $('#thankyou').hide();


                /// airportpickup page form submit
                $("#form2").on('submit', function (e) {
                    $('#ajax_cont').hide();
                    $('#content_ajax').html("");
                    e.preventDefault();

                    var pickup = $("#pickup10").val();
                    var pickoff = $("#pickoff").val();
                    var pickoff1 = $("#pickoff1").val();
                    var dateon = $("#dpd3").val();
                    var ontime = $("#time").val();
                    var x = document.forms["form2"]["pickoff"].value;


                    if (x == null || x == "") {

                    } else {
 $('#loading').show();
                        $.ajax({
                            url: "car.php", // Url to which the request is send
                            type: "POST", // Type of request to be send, called as method
                            data: 'pickup=' + pickup + '&pickoff=' + pickoff + '&pickoff1=' + pickoff1 + '&dateon=' + dateon + '&ontime=' + ontime,
                            dataType: "html",
                            success: function (data)   // A function to be called if request succeeds
                            {
 $('#loading').hide();
                                $("#pickoff").val("");
                                $("#dpd3").val("");
                                $("#time").val("");
                                $('#ajax_cont').show();
                                $('#content_ajax').html(data);
                                $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130},'slow');
                                
    }
                        });


                    }





                });

                /// airportdrop page form submit

                $("#form3").on('submit', function (e) {

                    $('#ajax_cont').hide();
                    $('#content_ajax').html("");
                    e.preventDefault();

                    var dropoff = $("#dropoff").val();
                    var drop = $("#drop5").val();
                    var dpdrop = $("#dpdrop").val();
                    var dropoff1 = $("#dropoff1").val();
                    var ontime = $("#timed").val();
                    var x1 = document.forms["form3"]["dropoff"].value;


                    if (x1 == null || x1 == "") {

                    } else {
 $('#loading').show();
                        $.ajax({
                            url: "dropcars.php", // Url to which the request is send
                            type: "POST", // Type of request to be send, called as method
                            data: 'dropoff=' + dropoff + '&drop=' + drop + '&dpdrop=' + dpdrop + '&dropoff1=' + dropoff1 + '&ontime=' + ontime,
                            dataType: "html",
                            success: function (data)   // A function to be called if request succeeds
                            {
$('#loading').hide();
                                $("#dropoff").val("");
                                $("#dpdrop").val("");
                                $("#time").val("");
                                $('#ajax_cont').show();
                                $('#content_ajax').html(data);
                                $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130},'slow');
                             
                            }
                        });


                    }





                });

                // withdriver page form submit
                $("#form4").on('submit', function (e) {

                    $('#ajax_cont').hide();
                    $('#content_ajax').html("");
                    e.preventDefault();
                    var numdays = $("#numdays").val();
                    var picklocation = $("#picklocation").val();
                    var pickdate = $("#dpd11").val();
                    var picktime = $("#picktime").val();
                    var returndate = $("#dpd12").val();
                    var returntime = $("#returntime").val();
                    var pil = document.forms["form4"]["picklocation"].value;
                    var pid = document.forms["form4"]["pickdate"].value;
                    var pit = document.forms["form4"]["picktime"].value;
                    var rd = document.forms["form4"]["returndate"].value;
                    var rt = document.forms["form4"]["returntime"].value;

//alert(numdays+" "+picklocation+" "+ pickdate+" "+ picktime+" "+returndate+ " "+returntime);
if(numdays<=0){
    
}else{
                    if (pil == null || pil == "") {

                    } else if (pid == null || pid == "") {

                    } else if (pit == null || pit == "") {

                    } else if (rd == null || rd == "") {

                    } else if (rt == null || rt == "") {

                    } else {
 $('#loading').show();
                        $.ajax({
                            url: "carwithdriver.php", // Url to which the request is send
                            type: "POST", // Type of request to be send, called as method
                            data: 'numdays=' + numdays + '&picklocation=' + picklocation + '&pickdate=' + pickdate + '&picktime=' + picktime + '&returndate=' + returndate + '&returntime=' + returntime,
                            dataType: "html",
                            success: function (data)   // A function to be called if request succeeds
                            {
$('#loading').hide();
                                $("#numdays").val("");
                                $("#picklocation").val("");
                                $("#dpd11").val("");
                                $("#picktime").val("");
                                $("#dpd12").val("");
                                $("#returntime").val("");
                                $('#ajax_cont').show();
                                $('#content_ajax').html(data);
                                $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130},'slow');
                             
                            }
                        });


                    }}





                });

// rentcar page form submit

                $("#form5").on('submit', function (e) {

                    $('#ajax_cont').hide();
                    $('#content_ajax').html("");
                    e.preventDefault();

                    var numofdays = $("#numofdays").val();
                    var picklocation1 = $("#picklocation1").val();
                    var pickdate1 = $("#dpd15").val();
                    var picktime1 = $("#picktime1").val();
                    var returndate1 = $("#dpd16").val();
                    var returntime1 = $("#returntime1").val();

                    var pil1 = document.forms["form5"]["picklocation1"].value;
                    var pid1 = document.forms["form5"]["pickdate1"].value;
                    var pit1 = document.forms["form5"]["picktime1"].value;
                    var rd1 = document.forms["form5"]["returndate1"].value;
                    var rt1 = document.forms["form5"]["returntime1"].value;

if(numofdays<=0){
    
}else{
                    if (pil1 == null || pil1 == "") {

                    } else if (pid1 == null || pid1 == "") {

                    } else if (pit1 == null || pit1 == "") {

                    } else if (rd1 == null || rd1 == "") {

                    } else if (rt1 == null || rt1 == "") {

                    } else {
 $('#loading').show();
                        $.ajax({
                            url: "rentcar-view.php", // Url to which the request is send
                            type: "POST", // Type of request to be send, called as method
                            data: 'numofdays=' + numofdays + '&picklocation1=' + picklocation1 + '&pickdate1=' + pickdate1 + '&picktime1=' + picktime1 + '&returndate1=' + returndate1 + '&returntime1=' + returntime1,
                            dataType: "html",
                            success: function (data)   // A function to be called if request succeeds
                            {
$('#loading').hide();
                                $("#numofdays").val("");
                                $("#picklocation1").val("");
                                $("#dpd15").val("");
                                $("#picktime1").val("");
                                $("#dpd16").val("");
                                $("#returntime1").val("");
                                $('#ajax_cont').show();
                                $('#content_ajax').html(data);
                                $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130},'slow');
                            }
                        });


                    }}





                });







            });
        </script>
        <script lang="javascript">

            $(document).ready(function () {
                $(document).on('focus', ':input', function () {
                    $(this).attr('autocomplete', 'off');
                });
            });

        </script>
        
        <!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->

    </head>

    <body id="body">
        <ul class="cb-slideshow" style="list-style-type: none;">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
        
        </ul>




        <!--<div class="container-edit-fluid" style="background-color: #f57315; height: 10px;position: relative;"></div>-->
<style>
    .curve { text-align:center;}
            .curve img {margin-top:-75px; max-width:110px; position: relative; opacity: 0.78}

</style>






<div class="container-edit-fluid  " style="margin-top: 100px;" id="book_engine">
            <div class="container-edit " style="margin-left: auto; margin-right: auto; background-color: #f75448 ; opacity: 0.6;  " >
                
                <h2 class="lato" style=" text-align: center; color: white; "> Expert Airport Pickup System</h2>
                
                <img src="image/Srilanka_logo.png" alt="" class="img-responsive center-block"/>
            </div> <div class="curve" style="margin-top: 53px;"><a href="#footer"><img src="image/icon.png" alt="Down"></a></div>
            
            <br/>
            <div style="text-align: center; color: white;"> developed by Susara Thenuwara </div>
        </div>

        


        <div class="container-edit-fluid bookcage" style="margin-top: 200px;" id="book_engine">
            <div class="container-edit book1 box-outer" style="margin-left: auto; margin-right: auto; " >
                <div class="row features-area-box">
                    <?php require_once 'book.php'; ?>   
                </div> 
            </div> 
        </div>
       

        <div class="container-edit " style="margin-top: 20px;position: relative;" id="loading">
            <div class="row" style="padding: 50px;">
                <img src="http://www.susara.lk/expert/img/ajax-loader2.gif" class="center-block">
            </div>

        </div>

        <div id="ajax_cont" class="container-edit " style="margin-top: 150px;background-color: #f5f5f5;position: relative;">


            <div class="row" id="content_ajax" style="padding: 50px;">

            </div>



        </div>
        <div id="thankyou">
            <div class="container-edit " style="margin-top: 150px;background-color: #f5f5f5;position: relative;">


            <div class="row"  style="padding: 50px;">
                <h1 class="text-center">Thank You</h1>
                <h3 class="text-center">We Will Contact You Soon..</h3>
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
        
<!--        <div class="container-edit-fluid"  style="margin-top: 150px;position: relative;" id="about_div">
            <div class="container-edit"  style="padding: 30px;background-color: #e5e5e5;">
                <div class="row" style="margin-top: -80px;">
                    <div class="col-md-3  col-centered">
                    <img src="img/taxi6.png" class="center-block img-responsive">
                </div>
                </div>
                <div class="row">
                    <h1 class="text-center">Ayubowan Cabs</h1>
                    <p class="text-center" id="main-page">A premiere hub for all your transport needs, wherever you need to be picked up from, and wherever you plan to go within Sri Lanka “We take you there”. </p>
                    <p class="text-center" id="main-page">
                        A large fleet of luxury vehicles working around the clock 24X7, 365 days a year, ranging from mini-cars to large coaches are currently in operation around the country providing utmost convenience to clients, whether they require a guided tour, or simply just the transportation service.
                    </p>
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
                    <div class="col-md-3  col-centered" style="margin-top: 20px;">
                        <img src="img/hourss.png" class="center-block img-responsive">
                </div>
                </div>
                </div>
        </div>-->


  <!--<div class="container-edit-fluid" style=" padding: 0; margin: 0;position: relative;"> <?php // require_once 'carousel.php';   ?></div>-->   

        <div style="margin-top: 200px;">
            <?php //require_once('pagefooter.php'); ?>   
        </div>  



        <!-- Go to www.addthis.com/dashboard to customize your tools -->
         

 
<!--  <script type="text/javascript">
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
  </script>-->

    </body>
</html>
