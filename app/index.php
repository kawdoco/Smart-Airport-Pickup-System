<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Airport Pickup - Airport Drop - Ayubowan Cabs</title>
        <meta name="description" content="We are a popular and a leading company with a history of more than 10 years and a highly skilled team of travel experts that caters to all sorts of Travelers worldwide. Tel:  +94 31 222 59 00 ">
        <meta name="keyword" content="Sri Lanka tour agets, Sri Lanka flight booking, Sri Lanka airport pickup service" >
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name=viewport content="width=device-width,initial-scale=1">


        <link href="http://www.srilankacars.lk/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" type="text/css" href="http://www.srilankacars.lk/css/styles.css">

        <link href="css/style1.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="http://www.srilankacars.lk/css/kawdoco.css">
        <link href="http://www.srilankacars.lk/css/datepicker3.css" rel="stylesheet" type="text/css"/>


        <link href="css/style-new1.css" rel="stylesheet" type="text/css"/>

        <script src="http://www.srilankacars.lk/js/jquery.min.js" type="text/javascript"></script>

        <script src="http://www.srilankacars.lk/js/bootstrap-datepicker.js" type="text/javascript"></script>

        <script src="http://www.srilankacars.lk/js/kawdoco.min.js"></script>


        <!--verticle menu-->
        <script src="js/script.js" type="text/javascript"></script>



        <!--verticle menu-->

        <!--map-->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyDsG_6esomUW668FqHsa8gDwqqrXjAbH2k&sensor=false" type="text/javascript"></script>

        <!--map-->


        <style type="text/css">
            .col-centered{
                float: none;
                margin: 0 auto;
            }
            /*html, body {margin: 0; height: 100%; overflow: hidden}*/
            /*map*/
            body{
                background: rgba(0,0,0,0.5);
            }          
            #map { 
                height: 100%; 
                width: 100%; 
                position: absolute;

                top: 0; 
                left: 0; 
                z-index: 0;

            }


            .inner {
                position: absolute;
            }
            /*map*/
            .bs-example{
                margin: 20px;
            }
            .modal-content iframe{
                margin: 0 auto;
                display: block;
            }
        </style>
        <style>
            #toTop{
                position: fixed;
                bottom: 10px;
                right: 10px;
                cursor: pointer;
                display: none;
            }
        </style>
        <style>
            #country_list_id  , #country_list_id1
            {
                position: absolute; cursor: default;z-index:30000000000 !important;
                background-color: #fff;
                padding: 5px;
                list-style: none;




            }
            #country_list_id  li
            {

                padding: 3px;     


            }

            #country_list_id1  li
            {

                padding: 3px;     


            }

            .datepicker {
                z-index: 999999999;
            }

         


        </style>
        <script>
            $(document).ready(function () {

                $('#ajax_cont').hide();
                $('#loading').hide();
                $('#thankyou').hide();


                /// airportpickup page form submit
                $("#form2").on('submit', function (e) {

                    $('#thankyou').hide();
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
                      
                        $('#cssmenu li').removeClass('active');
//                           $('#cssmenu a').parents('li, ul').removeClass('active');
      
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
                                $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130}, 'slow');

                            }
                        });


                    }





                });
                /// airportdrop page form submit

                $("#form3").on('submit', function (e) {
                    $('#thankyou').hide();
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
                                $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130}, 'slow');

                            }
                        });


                    }





                });

                // withdriver page form submit
                $("#form4").on('submit', function (e) {
                    $('#thankyou').hide();
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
                    if (numdays <= 0) {

                    } else {
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
                                    $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130}, 'slow');

                                }
                            });


                        }
                    }





                });

  // rentcar page form submit

                $("#form5").on('submit', function (e) {
                    $('#thankyou').hide();
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

                    if (numofdays <= 0) {

                    } else {
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
                                    $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130}, 'slow');
                                }
                            });


                        }
                    }





                });



            });
        </script>
    </head>

    <body>


        <div class="container-edit-fluid">
            <!--<div class="row" id="map"></div>-->

            <div class="row inner" style="background: rgba(0,0,0,0.5);height: 100%;width: 100%;"></div>
            <div class="row center-block"> <?php require_once('menu.php'); ?> </div>
            <div class="row " style="margin-top: 100px;"  id="book_engine">

                <div class="col-md-12 book1" style="margin-left: auto; margin-right: auto;">
                    <?php require_once 'book.php'; ?> 
                </div> 
            </div>
            <div class="col-md-12 " style="margin-top: 20px;position: relative;" id="loading">
                <div class="row" style="padding: 50px;">
                    <img src="img/ajax-loader2.gif" class="center-block">
                </div>
            </div>
            <div id="ajax_cont" class="col-md-12" style="margin-top: 150px;position: relative;background-color: #fff;">


                <div  id="content_ajax">


                </div>



            </div>
            <div id="thankyou">
                <div class="col-md-12 " style="margin-top: 100px;background-color: #f5f5f5;position: relative;">


                    <div class="row"  style="padding: 50px;">
                        <h1 class="text-center">Thank You</h1>
                        <h3 class="text-center">We Will Contact You Soon..</h3>
                    </div>
                </div>
                <div class="container-edit">
                    <div class="row">
                        <div class="col-md-4  col-centered" style="margin-top: -20px;">
                            <img src="img/no.png" class="center-block img-responsive">
                        </div>
                    </div>
                </div>


            </div>

        </div>









        <script src="http://www.srilankacars.lk/app/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script type="text/javascript">

            function addDynamicMarker(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    draggable: false,
                    icon: 'img/iccg.png',
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
                    zoom: 1,
                    disableDefaultUI: true,
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

                    icon: 'img/iccg.png',
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
                    zoom: 1,
                    disableDefaultUI: true,
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
