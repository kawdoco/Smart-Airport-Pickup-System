<?php
session_start();
require_once 'cnn/cnn.php';

$sql = "SELECT * FROM cabs where id = '" . $_POST['car1'] . "'";
$result = $conn->query($sql);


$row = $result->fetch_assoc();

$sql2 = "SELECT * FROM cabs WHERE id != '" . $_POST['car1'] . "'";
$result2 = $conn->query($sql2);
?>

<script>
    $(document).ready(function () {
        $('#toggle').click(function () {
            //check if checkbox is checked
            if ($(this).is(':checked')) {

                $('#submit').removeAttr('disabled'); //enable input

            } else {
                $('#submit').attr('disabled', true); //disable input
            }
        });
    });


</script> 
<script>
    $("#driverfrm1").on('submit', function (e) {

        $('#content_ajax').hide();
        $('#book_engine').hide();
        e.preventDefault();


        var numdays = $("#numdays12").val();
        var picklocation = $("#picklocation12").val();
        var pickdate = $("#pickdate").val();
        var picktime = $("#picktime12").val();
        var returndate = $("#returndate").val();
        var returntime = $("#returntime12").val();

        var carname = $("#carname").val();
        var refno = $("#refno").val();
        var total = $("#total").val();
        var car1 = $("#car1").val();
//alert(numdays+" "+picklocation+" "+ pickdate+" "+ picktime+" "+returndate+ " "+returntime +" carneme "+carname +" refno "+refno+" total "+total+" car1 "+car1);




$('#loading').show();
        $.ajax({
            url: "withdriver-carbooking.php", // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: 'numdays=' + numdays + '&picklocation=' + picklocation + '&pickdate=' + pickdate + '&picktime=' + picktime + '&returndate=' + returndate + '&returntime=' + returntime + '&carname=' + carname + '&refno=' + refno + '&total=' + total + '&car1=' + car1,
            dataType: "html",
            success: function (data)   // A function to be called if request succeeds
            {
$('#loading').hide();

                $('#book_engine').hide();
                $('#content_ajax').show();
                $('#content_ajax').html(data);
                 $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130},'slow');
                          
            }
        });


    });
</script>


<div class="col-md-12">

    <div class="col-sm-12" style="margin: 0; padding: 0;">

        <img src="http://www.ayubowantours.lk/photos/<?php echo $row['img1']; ?> " width="830" class="img-responsive"/>  

    </div>
        <br>
 <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">CAR DETAILED</a></li>
            <li><a data-toggle="tab" href="#menu1">UPGRADE YOUR CAR</a></li>

            <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
        </ul>

        <div class="tab-content">

            <div id="home" class="tab-pane fade in active">
                <form action="" method="POST" name="driverfrm1" id="driverfrm1">


                                <div class="col-sm-4"  style="border-right: #f5f5f5 10px solid; padding-top: 20px;  height: auto;">
                                    <span class="carfnt">Facility </span><br>
                                    <p class="carp"> <?php echo strtoupper($row['eng']); ?></p>
                                    <p class="carp"> <?php echo strtoupper($row['ac']); ?></p>
                                    <p class="carp"> <?php echo strtoupper($row['insur']); ?></p>
                                    <p class="carp"> <?php echo strtoupper($row['doors']); ?></p>
                                    <p class="carp"> <?php echo strtoupper($row['fuel']); ?></p>
                                    <!--                  
                                                                 <p class="carp">// <?php // echo strtoupper($row['shift']);   ?></p>
                                                                 <p class="carp"> <?php //echo strtoupper($row['bookable']);   ?></p><br>-->
                                    <span class="carfnt">Capacity </span><br>

                                    <p class="carp">  <?php echo strtoupper($row['seats']); ?></p>
                                    <p class="carp">   <?php echo strtoupper($row['hand']); ?></p>
                                    <p class="carp">  <?php echo strtoupper($row['large']); ?></p>
                                    <span class="carfnt">Conditions </span><br>

                                    <p class="carp">  FREE MILLAGE: <?php echo $row['freekm']; ?> X <?php echo $_POST['numdays'] ?> = <?php echo ($row['freekm'] * $_POST['numdays']); ?>KM</p>

                                    <p class="carp">    <?php echo strtoupper($row['extramillage']); ?></p>

                                </div>

                                <div class="col-sm-8"  style=" height: auto; padding-top: 20px;">
                                    <div class="row">
                                        <div class="col-sm-6" style="border-right: 1px solid #f5f5f5; border-bottom: 1px solid #f5f5f5; height: 50px;">

                                            <p style="font-size: 15px;"> Pick-Up Location Details </p>

                                        </div> 
                                        <div class="col-sm-6" style=" border-bottom: 1px solid #f5f5f5; height: 50px;">

                                            <p style="font-size: 15px;">  Return Location Details </p>

                                        </div> 

                                    </div>

                                    <div class="row" style="margin-top: 10px;">

                                        <div class="col-sm-6" style="border-right: 1px solid #f5f5f5; height: auto;">

                                            <div class="row" >
                                                <div class="col-sm-2">
                                                    <i class="fa fa-map-marker" aria-hidden="true" style="color:#f3891d; margin-left: 0px; font-size:15px;"></i>

                                                </div> 
                                                <div class="col-sm-10">
                                                    <p style="color:#01b7f2;">Location<br>

                                                        <span style="font-size: 12px; color:#515657;">

                                                            <?php echo htmlentities($_POST['picklocation']) ?>
                                                        </span></p>
                                                </div> 
                                            </div>        

                                            <div class="row" >
                                                <div class="col-sm-2">
                                                    <i class="fa fa-calendar" aria-hidden="true" style="color:#f3891d; font-size:13px;"></i>

                                                </div> 
                                                <div class="col-sm-10">
                                                    <p style="color:#01b7f2;"> Pick Up Date<br>

                                                        <span style="font-size: 12px; color:#515657;">

                                                            <?php echo htmlentities($_POST['pickdate']) ?>
                                                        </span></p>
                                                </div> 
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <i class="fa fa-clock-o" aria-hidden="true" style="color:#f3891d; font-size:15px;"></i>

                                                </div> 
                                                <div class="col-sm-10">
                                                    <p style="color:#01b7f2;"> Pick Up Time<br>

                                                        <span style="font-size: 12px; color:#515657;">

                                                            <?php echo htmlentities($_POST['picktime']) ?>
                                                        </span></p>
                                                </div> 
                                            </div>          

                                        </div>



                                        <div class="col-sm-6" >



                                            <!--                              <div class="row" >
                                                                     <div class="col-sm-2">
                                                                         <i class="fa fa-map-marker" aria-hidden="true" style="color:#f3891d; font-size:15px;"></i>
                                            
                                                                     </div> 
                                                                     <div class="col-sm-10">
                                                                         <p style="color:#01b7f2;"> Location<br>
                                              
                                                                             <span style="font-size: 12px; color:#515657;">
                                                                                 
                                            <?php // echo htmlentities($_POST['pickoff'])  ?>
                                                                             </span></p>
                                                                     </div> 
                                                             </div>-->

                                            <div class="row" >
                                                <div class="col-sm-2">
                                                    <i class="fa fa-calendar" aria-hidden="true" style="color:#f3891d; font-size:13px;"></i>

                                                </div> 
                                                <div class="col-sm-10">
                                                    <p style="color:#01b7f2;"> Return Date<br>

                                                        <span style="font-size: 12px; color:#515657;">

                                                            <?php echo htmlentities($_POST['returndate']) ?>
                                                        </span></p>
                                                </div> 
                                            </div> 

                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <i class="fa fa-clock-o" aria-hidden="true" style="color:#f3891d; font-size:15px;"></i>

                                                </div> 
                                                <div class="col-sm-10">
                                                    <p style="color:#01b7f2;"> Pick Up Time<br>

                                                        <span style="font-size: 12px; color:#515657;">

                                                            <?php echo htmlentities($_POST['returntime']) ?>
                                                        </span></p>
                                                </div> 
                                            </div>  

                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <i class="fa fa-clock-o" aria-hidden="true" style="color:#f3891d; font-size:15px;"></i>

                                                </div> 
                                                <div class="col-sm-10">
                                                    <p style="color:#01b7f2;"> Number of Days<br>

                                                        <span style="font-size: 12px; color:#515657;">

                                                            <?php echo htmlentities($_POST['numdays']) ?>
                                                        </span></p>
                                                </div> 
                                            </div>             
                                            <div class="row" style="margin-top: 30px; margin-left: 20px;" > 
                                                <button class="btn btn-default btn-md btn-group-justified bb" type="submit" value="submit" id="submit"  name="submit" >BOOK NOW</button>                
                                            </div>
                                        </div>
                                    </div>  
                                </div>


                        <div class="col-sm-12" style="margin-top: 10px;">
                            <p class="tourh5"> Car with driver information</p>
                            <p class="tourdaypara"> 
                            <ul>
                                <li>Air-conditioned fully insured (Local) Vehicles with English speaking Chauffeur with Gasoline</li>
                                <li> Mileage will be calculated from Airport to Airport basis. It will be calculated considering last point as Airport. You can drop at any destination and  pay the chauffeur, who will continue to airport.</li>
                                <li>Driving hours will be between 0800 hrs. to 1930 hrs. (You can discuss with the chauffeur & adjust the timings accordingly if the vehicle is needed after 1930 hrs. and next day starting time. But for the arrival & departure vehicle can be utilized according to the flight schedule.</li>
                                <li>Vehicle Mileage indicate meter will zero ( 0 ) when tour starts from Airport. Every day morning before your tour begin chuffer will show the meter and will write down log sheet provide by us. End of every day driver will provide log sheet for your reference and you should check with the meter and put the signature of yours. This will avoid any misunderstanding regarding the kilometers used during your trip.</li>

                                <li>   Parking charges, Paging and Highway charges are not included in the rate</li>
                                <li>   Well experienced qualified driver service will be provided</li>
                                <li>   All vehicles are fully insured with a passenger cover.</li>
                                <li>  Time of transfer to the destination depend on the road condition and traffic on the route</li>
                                <li>  Tentative bookings and quotations are valid only for 24 hours and all bookings will be confirmed only after receiving payment</li>
                                <li>  Cancelation and refunds are approved on management decision</li>
                                <li>  In case of breakdown substitute vehicle with same condition will be provided.</li>
                                <li>  For overnight stays, accommodation charge of US$ 10 per night applicable if driver quarters not available</li>
                                <li>   For safari jeeps will have to be hired & charges to be paid directly, entrance fees, photo and video permits at locations and other personal expenses have to pay from client.</li>
                                <li>   Before arrival clients should send us flight details as we can arrange your pickup from airport.    </li>   

                            </ul>

                            </p>

                        </div> 

                    <input type="hidden" value="<?php echo htmlentities($_POST['picklocation']) ?>" id="picklocation12" name="picklocation"> 
                    <input type="hidden" value="<?php echo htmlentities($_POST['pickdate']) ?>" id="pickdate" name="pickdate">   
                    <input type="hidden" value="<?php echo htmlentities($_POST['picktime']) ?>" id="picktime12" name="picktime">   
                    <input type="hidden" value="<?php echo htmlentities($_POST['returndate']) ?>" id="returndate" name="returndate">   
                    <input type="hidden" value="<?php echo htmlentities($_POST['returntime']) ?>" id="returntime12" name="returntime"> 
                    <input type="hidden" value="<?php echo htmlentities($_POST['numdays']) ?>" id="numdays12" name="numdays"> 
                    <input type="hidden" name="car1" value='<?php echo $row['id']; ?>' id="car1">
                    <input type="hidden" value="<?php echo strtoupper($row['carname']); ?> " id="carname" name="carname">
                    <input type="hidden" value="<?php echo $row['refno']; ?> " id="refno" name="refno">   
                    <input type="hidden" value="<?php
                                                            //echo ($row['perkm'] * $_POST['numdays'] );  


                                                            if (isset($row['diswithdriver']) && ( $row['diswithdriver'] != '0')) {
                                                                //  echo "<strike>".$row['perkm']* $_POST['numdays']."</strike>";
                                                                //   echo " x ".$row['diswithdriver']."%";
                                                                $tot = (($row['perkm']) - (($row['perkm']) * ($row['diswithdriver'] / 100)));

                                                                echo $tot * $_POST['numdays'];
                                                            } else {

                                                                $tot = $row['perkm'];
                                                                echo $row['perkm'] * $_POST['numdays'];
                                                            }
                                                            ?> " id="total" name="total">

                </form> 

            </div>



            <div id="menu1" class="tab-pane fade">

                <!--RENT CAR OPEN-->
<?php
$k = 0;
if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {

        $k++
        ?>         


                        
                                <div class="col-sm-3 img-responsive" style="background-color: #FFF; margin: 0; margin-top: 10px !important; padding: 0; height: auto; border-right:  1px solid #f5f5f5;">
                                    <img src="http://www.ayubowantours.lk/photos/<?php echo $row2['img1']; ?> " class="img-responsive"/>



                                </div>

                                <div class="col-sm-3" style="background-color: #FFF; height: auto; margin-top: 10px;">
                                    <p class="frmp"><?php echo strtoupper($row2['carname']); ?>  
                                    </p>
           <!--                         <p class="frmp">REF NO : <?php // echo strtoupper($row2['refno']);   ?></p>    
                                    -->

                                    <div class="col-sm-6">
           <!--                             <P class="car"><?php //echo ucfirst($row2['discription']);   ?> </p>
                                        -->

                                    </div>



                                </div>
                                <div class="col-sm-4" style="background-color: #FFF; height: auto; border-right:  1px solid #f5f5f5; margin-top: 10px;">
                                    <div class="col-sm-6" style="border-right:  1px solid #f5f5f5;">
                                        <span class="carfnt">Equipment </span><br>
                                        <p class="carp"> <?php echo strtoupper($row2['eng']); ?></p>
                                        <p class="carp"> <?php echo strtoupper($row2['ac']); ?></p>
                                        <p class="carp"> <?php echo strtoupper($row2['insur']); ?></p>
                                        <p class="carp"> <?php echo strtoupper($row2['doors']); ?></p>
                                        <p class="carp"> <?php echo strtoupper($row2['fuel']); ?></p>
                                    </div> 
                                    <div class="col-sm-6">
                                        <span class="carfnt">Capacity </span><br>
                                        <p class="carp">  <?php echo strtoupper($row2['seats']); ?></p>
                                        <p class="carp">   <?php echo strtoupper($row2['hand']); ?></p>
                                        <p class="carp">  <?php echo strtoupper($row2['large']); ?></p>

                                        <span class="carfnt">Conditions </span><br>

                                        <p class="carp">  FREE MILLAGE: <?php echo $row2['freekm']; ?> X <?php echo $_POST['numdays'] ?> = <?php echo ($row2['freekm'] * $_POST['numdays']); ?>KM</p>

                                        <p class="carp">    <?php echo strtoupper($row2['extramillage']); ?></p>


                                    </div> 


                                </div>

                                <div class="col-sm-2 " style="background-color: #FFF; height:123px; margin-top: 10px;">

                                    <span class="hotelprice"><?php echo strtoupper($row['rate']); ?></span>

                                    <form action="" method="POST" name="withcarfrm">
                                        <input type="hidden" value="<?php echo htmlentities($_POST['picklocation']) ?>" id="picklocation_<?php echo $row2['id']; ?>" name="picklocation"> 
                                        <input type="hidden" value="<?php echo htmlentities($_POST['pickdate']) ?>" id="pickdate_<?php echo $row2['id']; ?>" name="pickdate">   
                                        <input type="hidden" value="<?php echo htmlentities($_POST['picktime']) ?>" id="picktime_<?php echo $row2['id']; ?>" name="picktime">   
                                        <input type="hidden" value="<?php echo htmlentities($_POST['returndate']) ?>" id="returndate_<?php echo $row2['id']; ?>" name="returndate">   
                                        <input type="hidden" value="<?php echo htmlentities($_POST['returntime']) ?>" id="returntime_<?php echo $row2['id']; ?>" name="returntime"> 
                                        <input type="hidden" value="<?php echo htmlentities($_POST['numdays']) ?>" id="numdays_<?php echo $row2['id']; ?>" name="numdays"> 
                                        <input type="hidden" name="car1" value='<?php echo $row2['id']; ?>' id="car1_<?php echo $row2['id']; ?>">    

                                        <h4 class="tourh4"> <span style="color: #515657; font-size: 15px;" > USD 
        <?php
        //echo ($row2['perkm'] * $_POST['numdays']);

        if (isset($row2['diswithdriver']) && ( $row2['diswithdriver'] != '0')) {

            echo "<strike>" . $row2['perkm'] . "</strike>";
            echo " x " . $row2['diswithdriver'] . "%";


            $discount = ($row2['perkm'] * $row2['diswithdriver']) / 100;

            $tot = $row2['perkm'] - $discount;

            echo "<br/>USD " . $tot * $_POST['numdays'];
        } else {

            $tot = $row2['perkm'];
            echo $row2['perkm'] * $_POST['numdays'];
        }
        ?></span></h4>

                                        <p> USD <span style="color: #515657; font-size: 15px;" > 
                                                <?php echo $tot ?> X <?php echo $_POST['numdays'] ?></span>
                                        </p>
                                        <!--<button class="btn btn-default btn-md btn-group-justified bb" style="margin-top: 20px;  max-width: 100px;" type="submit" value="submit" id="submit"  name="submit" >BOOK NOW</button>-->                
                                        <input type="button" id="add_<?php echo $row2['id'] ?>" value="BOOK NOW" class="btn btn-default btn-md btn-group-justified bb" onClick = "cartAction3('<?php echo $row2['id'] ?>')" />     

                                        </p>    </form>      

                                </div>
                        

                        <!--RENT CAR CLOSE-->
                                                <?php
                                            }




                                            mysqli_free_result($result2);
                                        }



                                        $conn->close();
                                        ?> 

            </div>

            <!-- <div id="menu2" class="tab-pane fade">
               <h3>Menu 2</h3>
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
             </div>
             <div id="menu3" class="tab-pane fade">
               <h3>Menu 3</h3>
               <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
             </div>-->

        </div>

    </div>         

    <div class="col-sm-3" >              

        <div class="row" style=" background-color: #FFF;  margin-left: 0; padding: 20px;">
            <h4 class="tourh4">Booking Details</h4>
            <div class="row">
                <div class="col-sm-4">
                    <img src="http://www.ayubowantours.lk/photos/<?php echo $row['img1']; ?> " width="100" class="img-responsive"/></div>
                <div class="col-sm-8">

               <!--  <p>  <?php //echo $row['id'];   ?> 
                    <p>  <?php //echo strtoupper($row['model']);   ?> -->
                    <p>  <?php echo strtoupper($row['carname']); ?> <br>

                        <span style="text-align: left; font-size: 12px;">
                            Ref No:  <?php echo strtoupper($row['refno']); ?> </span></p>
<!--                         <p > 
            <button class="btn btn-default btn-md btn-group-justified bb" style="max-width: 70px;" action="action" type="button"  value="Back" onclick="history.go(-1);" >Back</button>                
</p>-->
                </div>
            </div>

            <div class="row" style="border-bottom:  #efefef solid 1px;">
                <div class="col-sm-2">
                    <i class="fa fa-calendar" aria-hidden="true" style="color:#f3891d; font-size:25px;"></i>

                </div> 
                <div class="col-sm-10">
                    <p style="color:#01b7f2;"> Return Date<br>  

                        <span style="font-size: 12px; color:#515657;">
<!--                                        <?php //echo $_POST['pickoff1'];  ?><br>-->
<?php echo htmlentities($_POST['returndate']) ?>

                        </span></p>


                </div> 
            </div>

            <div class="row" style="border-bottom:  #efefef solid 1px; margin-top: 15px;">
                <div class="col-sm-2">
                    <i class="fa fa-clock-o" aria-hidden="true" style="color:#f3891d; font-size: 25px;"></i>


                </div> 
                <div class="col-sm-10">

                    <p style="color:#01b7f2;">Time<br>
                        <span style="font-size: 12px; color:#515657;">  <?php echo htmlentities($_POST['returntime']) ?></span></p>

                </div> 
            </div>
            <div class="row" style="border-bottom:  #efefef solid 1px; margin-top: 15px;">
                <div class="col-sm-12">   <h4 class="tourh4">Total Price : 
                        <span style="color: #515657; font-size: 15px;" >USD
<?php
//echo ($row['perkm'] * $_POST['numdays']);  


if (isset($row['diswithdriver']) && ( $row['diswithdriver'] != '0')) {
    echo "<strike>" . $row['perkm'] * $_POST['numdays'] . "</strike>";
    echo " x " . $row['diswithdriver'] . "%";
    $tot = (($row['perkm']) - (($row['perkm']) * ($row['diswithdriver'] / 100)));

    echo "<br/> USD " . $tot . " X " . $_POST['numdays'];

    echo " = " . $tot * $_POST['numdays'];
} else {

    $tot = $row['perkm'];
    echo $row['perkm'] * $_POST['numdays'];
}
?></span></h4>

                </div>  </div> 

        </div>






        <div class="row" style=" background-color: #FFF; margin-left: 0; margin-top: 10px; padding: 20px;">
            <p class="tourh5">Need Ayubowan Tours Help?</p>
            <p class="tourdaypara">We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
            <p>  <i class="fa fa-phone-square" aria-hidden="true"></i>
                <span>+94 31 222 59 00<br>
                    <a href="#"> info@ayubowantours.com</a>
                </span>
            </p>

        </div>
        <br>


    </div>




</div>

<script>
    $(document).ready(function(){
    $('body').append('<div id="toTop" class="btn btn-info"><span class="fa fa-arrow-up" style="font-size:40px;color:#fff;"></span></div>');
            $(window).scroll(function () {
    if ($(this).scrollTop() != 0) {
    $('#toTop').fadeIn();
    } else {
    $('#toTop').fadeOut();
    }
    });
            $('#toTop').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
            });</script> 


<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
            var frmvalidator = new Validator("contact_form");
//remove the following two lines if you like error message box popups
            frmvalidator.EnableOnPageErrorDisplaySingleBox();
            frmvalidator.EnableMsgsTogether();
            frmvalidator.addValidation("name", "req", "Please provide your name");
            frmvalidator.addValidation("email", "req", "Please provide your email");
            frmvalidator.addValidation("telephone", "req", "Please provide your Telephone");
            frmvalidator.addValidation("email", "email", "Please enter a valid email address");</script>

<script language='JavaScript' type='text/javascript'>
            function refreshCaptcha()
                    {
                    var img = document.images['captchaimg'];
                            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
                            }
</script>

<script src="http://www.srilankacars.lk/js/lightbox.js" type="text/javascript"></script>
<script src='http://www.srilankacars.lk/js/css3-animate-it.js'></script> 
