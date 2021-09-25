<?php
session_start();
require_once 'cnn/cnn.php';

$sql = "SELECT * FROM cabs where id = '" . $_POST['car1'] . "'";
$result = $conn->query($sql);

//$row =  mysql_fetch_assoc($result);
$row = $result->fetch_assoc();

$sql1 = "SELECT " . strtolower(trim($row['model'])) . " FROM price where id= '" . $_POST['pickoff1'] . "'";
//$sql1="SELECT id,alto FROM price where id = '".$_POST['pickoff1']."'";

$result1 = $conn->query($sql1);
//$row =  mysql_fetch_assoc($result);
$row1 = $result1->fetch_assoc();

$sql2 = "SELECT * FROM cabs WHERE id != '" . $_POST['car1'] . "'";
$result2 = $conn->query($sql2);
?>
<script>
    $("#form_to_apply").on('submit', function (e) {

        $('#content_ajax').hide();
        $('#book_engine').hide();
        e.preventDefault();

        var pickup = $("#pickup1122").val();
        var pickoff = $("#pickoff12").val();
        var pickoff1 = $("#pickoff1").val();
        var dateon = $("#dateon").val();
        var carname = $("#carname").val();
        var refno = $("#refno").val();
        var ontime = $("#ontime").val();
        var car1 = $("#car1").val();




$('#loading').show();

        $.ajax({
            url: "airport-pickup.php", // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: 'pickup=' + pickup + '&pickoff=' + pickoff + '&pickoff1=' + pickoff1 + '&dateon=' + dateon + '&ontime=' + ontime + '&car1=' + car1 + '&carname=' + carname + '&refno=' + refno,
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

    <div class="col-sm-12" style="margin: 0; padding: 5px;">

        <!--   <div class="row" style="margin: 0; padding: 0; background-color: #FFF;">
           <ol class="breadcrumb grade" style="margin-top: 10px; margin-left: 10px; margin-right: 10px;">
<li><a href="http://www.kawdo.com/roshika/travel1/">Home</a></li>
<li class="active">Plan Your Tour</li>
         </ol>

           
 </div> -->


        <img src="http://www.ayubowantours.lk/photos/<?php echo $row['img1']; ?> " width="830" class="img-responsive"/>  

    </div>
    <div class="col-md-12">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">CAR DETAILED</a></li>
            <li><a data-toggle="tab" href="#menu1">UPGRADE YOUR CAR</a></li>

            <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
        </ul>

        <div class="tab-content">

            <div id="home" class="tab-pane fade in active">
                <form action="" method="POST" name="form_to_apply" id="form_to_apply">

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
                                </div>

                                <div class="col-sm-8"  style=" height: auto; padding-top: 20px;">
                                    <div class="row">
                                        <div class="col-sm-6" style="border-right: 1px solid #f5f5f5; border-bottom: 1px solid #f5f5f5; height: 50px;">

                                            <p style="font-size: 15px;"> Pick-Up Location Details </p>

                                        </div> 
                                        <div class="col-sm-6" style=" border-bottom: 1px solid #f5f5f5; height: 50px;">

                                            <p style="font-size: 15px;">  Pick-Off Location Details </p>

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

                                                            <?php echo htmlentities($_POST['pickup']) ?>
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

                                                            <?php echo htmlentities($_POST['dateon']) ?>
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

                                                            <?php echo htmlentities($_POST['ontime']) ?>
                                                        </span></p>
                                                </div> 
                                            </div>          

                                        </div>



                                        <div class="col-sm-6" >



                                            <div class="row" >
                                                <div class="col-sm-2">
                                                    <i class="fa fa-map-marker" aria-hidden="true" style="color:#f3891d; font-size:15px;"></i>

                                                </div> 
                                                <div class="col-sm-10">
                                                    <p style="color:#01b7f2;"> Location<br>

                                                        <span style="font-size: 12px; color:#515657;">

                                                            <?php echo htmlentities($_POST['pickoff']) ?>
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
                            <p class="tourh5"> Airport Pickup Terms and Conditions </p>
                            <p class="tourdaypara">
                            <ul>
                                <li> Mileage will be calculated from Airport to Airport basis.</li>
                                <li>  Fuel and driver charges are included in the rates.</li>
                                <li>  Parking charges, Paging and Highway charges are not included in the rate</li>
                                <li> Well experienced qualified driver service will be provided</li>
                                <li> All vehicles are fully insured with a passenger cover.</li>
                                <li> Time of transfer to the destination depend on the road condition and traffic on the route</li>
                                <li> Tentative bookings and quotations are valid only for 24 hours and all bookings will be confirmed after receiving payment</li>
                                <li> Cancelation and refunds are approved on management decision</li>
                                <li> In case of breakdown substitute vehicle with same condition will be provided.</li>
                                <li> For overnight stays, accommodation charge of US$ 10 per night applicable if driver quarters not available</li>
                            </ul>          

                            </p>

                        </div>     

                    <input type="hidden" value="<?php echo htmlentities($_POST['pickup']) ?>" id="pickup1122" name="pickup">
                    <input type="hidden" value="<?php echo htmlentities($_POST['pickoff']) ?>" id="pickoff12" name="pickoff">
                    <input type="hidden" name="dateon"  value='<?php echo htmlentities($_POST['dateon']) ?>' id="dateon">
                    <input type="hidden" name="ontime"  value='<?php echo htmlentities($_POST['ontime']) ?>' id="ontime">
                    <input type="hidden" value="<?php echo strtoupper($row['carname']); ?> " id="carname" name="carname">
                    <input type="hidden" value="<?php echo strtoupper($row['refno']); ?> " id="refno" name="refno">


                    <input type="hidden" name="car1" value='<?php echo $row['id']; ?>' id="car1">  

                    <input type="hidden" class="form-control" id="pickoff1" value='<?php echo $_POST['pickoff1']; ?>' name="pickoff1">
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
           <!--                         <p class="frmp">REF NO : <?php echo strtoupper($row2['refno']); ?></p>    
                                    -->

                                    <div class="col-sm-6">
           <!--                             <P class="car"><?php echo ucfirst($row2['discription']); ?> </p>
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

                                    </div> 


                                </div>

                                <div class="col-sm-2 " style="background-color: #FFF; height:123px; margin-top: 10px;">

                                    <span class="hotelprice"><?php echo strtoupper($row['rate']); ?></span>

             <form action="" method="POST" name="carfrm">
                                        <input type="hidden" value="<?php echo htmlentities($_POST['pickup']) ?>" id="pickup_<?php echo $row2['id'];?>" name="pickup">
                                        <input type="hidden" value="<?php echo htmlentities($_POST['pickoff']) ?>" id="pickoff_<?php echo $row2['id'];?>" name="pickoff">
                                        <input type="hidden" name="dateon"  value='<?php echo htmlentities($_POST['dateon']) ?>' id="dateon_<?php echo $row2['id'];?>">
                                        <input type="hidden" name="ontime"  value='<?php echo htmlentities($_POST['ontime']) ?>' id="ontime_<?php echo $row2['id'];?>">

                                        <input type="hidden" class="form-control" id="pickoff1_<?php echo $row2['id'];?>" value='<?php echo $_POST['pickoff1']; ?>' name="pickoff1">
                                        <h4 class="tourh4">Total Price  <br> <span style="color: #515657; font-size: 15px;" > Rs <?php
                                                $sql3 = "SELECT " . trim($row2['model']) . " FROM price where id= '" . $_POST['pickoff1'] . "'";

                                                $result3 = $conn->query($sql3);
                                                $row3 = $result3->fetch_assoc();

                                                //echo $row3[$row2['model']] ;


                                                if (isset($row2['dispickup']) && ( $row2['dispickup'] != '0')) {
                                                    echo "<strike>" . $row3[$row2['model']] . "</strike>";
                                                    echo " - " . $row2['dispickup'] . "%";
                                                    echo "<br/>Rs " . ($row3[$row2['model']] - (($row3[$row2['model']]) * ($row2['dispickup'] / 100)));
                                                } else {
                                                    echo $row3[$row2['model']];
                                                }
                                                ?>
                                            </span></h4>
                                        <input type="hidden" name="car1" value='<?php echo $row2['id']; ?>' id="car1_<?php echo $row2['id'];?>">

                                        <input type="button" id="add_<?php echo $row['id']; ?>" value="BOOK NOW" class="btn btn-default btn-md btn-group-justified bb" onClick = "cartAction('<?php echo $row2['id']; ?>')" style="margin-top: 20px; max-width: 100px;"/>

                                        <!--<button class=""  type="submit" value="submit" id="submit"  name="submit" >BOOK NOW</button>-->                


                                    </form>
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
                    <p style="color:#01b7f2;"> Pick Off<br>




                        <span style="font-size: 12px; color:#515657;">
<!--                                        <?php //echo $_POST['pickoff1'];  ?><br>-->
<?php echo htmlentities($_POST['pickoff']) ?>

                        </span></p>


                </div> 
            </div>

            <div class="row" style="border-bottom:  #efefef solid 1px; margin-top: 15px;">
                <div class="col-sm-2">
                    <i class="fa fa-clock-o" aria-hidden="true" style="color:#f3891d; font-size: 25px;"></i>


                </div> 
                <div class="col-sm-10">

                    <p style="color:#01b7f2;">Time<br>
                        <span style="font-size: 12px; color:#515657;">  <?php echo htmlentities($_POST['ontime']) ?></span></p>

                </div> 
            </div>
            <div class="row" style="border-bottom:  #efefef solid 1px; margin-top: 15px;">
                <div class="col-sm-12">   <h4 class="tourh4">Total Price :  <span style="color: #515657; font-size: 15px;" > 
<?php
if (isset($row['dispickup']) && ( $row['dispickup'] != '0')) {
    echo "<strike>" . $row1[$row['model']] . "</strike>";
    echo " - " . $row['dispickup'] . "%";
    echo "<br/>Rs " . ($row1[$row['model']] - (($row1[$row['model']]) * ($row['dispickup'] / 100)));
} else {
    echo $row1[$row['model']];
}
?> 

                            LKR</span></h4>

                    <p style=" font-size: 12px;">Conditions<br/>
                        Above rates will be point to point and extra millage charge will add if the end point or route change. Extra millage charge will be Rs <?php echo $row['extra']; ?></p>

                </div>  </div> 

        </div>






        <div class="row" style=" background-color: #FFF; margin-left: 0; margin-top: 10px; padding: 20px;">
            <p class="tourh5">Need Ayubowan Tours Help?</p>
            <p class="tourdaypara"> Our service  team available 24/7 to serve you. We would happy to help you on any transport relative matter.

            </p>
            <p>  <i class="fa fa-phone-square" aria-hidden="true"></i>
                <span>+94 31 222 59 00<br>
                    <a href="#">info@ayubowantours.com</a>
                </span>
            </p>

        </div>
        <br>


    </div>




</div>





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

