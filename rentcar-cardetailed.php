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
    
    
    
       $('#old_price').hide(); 
       $("#disc").hide();
    function couponFunction() {
     
        var price=0;
        var discount=0;
var coupon_no=$('#coupon_no').val();

if(coupon_no ==='promo1'){
    $("#coupon_err").html(""); 
    discount=5;
    
}else if(coupon_no ==='promo2'){
     $("#coupon_err").html("");
    discount=10;
}else if(coupon_no ==='promo3'){
     $("#coupon_err").html("");
    discount=15;
}else{
    
   $("#coupon_err").html("Invalid No");
     $('#old_price').hide(); 
     $("#disc").hide();
   $("#finl_tot").text($("#model").val()).css('color','black');
   $("#model_new").val($("#model").val());
}

 if(discount !== 0){
     $('#old_price').show();
      $("#disc").show();
     $("#finl_tot").text("");
     $("#disc").text("You won "+discount+"% discount");
     price=$("#model").val()-($("#model").val() * (discount/100));
     
     $("#model_new").val(price);
     $("#finl_tot").text(price).css('color','red');
//     
 }


}



    $("#bookingfrm1").on('submit', function (e) {

        $('#content_ajax').hide();
        $('#book_engine').hide();
        e.preventDefault();


        var numofdays = $("#numofdays112").val();
        var picklocation1 = $("#picklocation112").val();
        var pickdate1 = $("#pickdate1").val();
        var picktime1 = $("#picktime112").val();
        var returndate1 = $("#returndate1").val();
        var returntime1 = $("#returntime112").val();

        var carname = $("#carname").val();
        var refno = $("#refno").val();
        var total = $("#total121").val();
        var car1 = $("#car1").val();
        
           var model_new = $("#model_new").val();

//alert(numofdays+" "+picklocation1+" "+picktime1+" "+returntime1);
//alert(numofdays+" "+picklocation1+" "" "+ picktime1+" "+ " "+returntime1);


$('#loading').show();
        $.ajax({
            url: "rentcar-carbooking.php", // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: 'numofdays=' + numofdays + '&picklocation1=' + picklocation1 + '&pickdate1=' + pickdate1 + '&picktime1=' + picktime1 + '&returndate1=' + returndate1 + '&returntime1=' + returntime1 + '&carname=' + carname + '&refno=' + refno + '&total=' + model_new + '&car1=' + car1,
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

    <div class="col-sm-9" style="margin: 0; padding: 0;">

        <!--   <div class="row" style="margin: 0; padding: 0; background-color: #FFF;">
           <ol class="breadcrumb grade" style="margin-top: 10px; margin-left: 10px; margin-right: 10px;">
<li><a href="http://www.kawdo.com/roshika/travel1/">Home</a></li>
<li class="active">Plan Your Tour</li>
         </ol>

           
 </div> -->


        <img src="http://www.ayubowantours.lk/photos/<?php echo $row['img1']; ?> " width="830" class="img-responsive"/>  


        <br>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">CAR DETAILED</a></li>
            <li><a data-toggle="tab" href="#menu1">UPGRADE YOUR CAR</a></li>

            <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
        </ul>

        <div class="tab-content">

            <div id="home" class="tab-pane fade in active">
                <form action="" method="POST" name="bookingfrm1" id="bookingfrm1">


                    <div class="row" style="margin: 0; padding: 0;  background-color: #fff; height: auto;">

                        <div class="col-sm-12" >

                            <div class="col-sm-12"  style="border: #f5f5f5 20px solid; margin-top: 15px; height: auto;">

                                <div class="col-sm-4"  style="border-right: #f5f5f5 10px solid; padding-top: 20px;  height: auto;">
                                    <span class="carfnt">Facility </span><br>
                   <!--                             <p class="carp"> <?php //echo strtoupper($row['eng']);   ?></p>-->
                                    <p class="carp"> <?php echo strtoupper($row['ac']); ?></p>
                                    <p class="carp"> <?php echo strtoupper($row['insur']); ?></p>
                                    <p class="carp"> <?php echo strtoupper($row['doors']); ?></p>
                                    <p class="carp"> FUEL - FULL TO FULL</p>
                                    <span class="carfnt">Capacity </span><br>

                                    <p class="carp">  <?php echo strtoupper($row['seats']); ?></p>
                                    <p class="carp">   <?php echo strtoupper($row['hand']); ?></p>
                                    <p class="carp">  <?php echo strtoupper($row['large']); ?></p>
                                    <span class="carfnt">Conditions </span><br>

                                    <p class="carp">  FREE MILLAGE: <?php echo $row['freekm']; ?> X <?php echo $_POST['numofdays'] ?> = <?php echo ($row['freekm'] * $_POST['numofdays']); ?>KM</p>

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

                                                            <?php echo htmlentities($_POST['picklocation1']) ?>
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

                                                            <?php echo htmlentities($_POST['pickdate1']) ?>
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

                                                            <?php echo htmlentities($_POST['picktime1']) ?>
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

                                                            <?php echo htmlentities($_POST['returndate1']) ?>
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

                                                            <?php echo htmlentities($_POST['returntime1']) ?>
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

                                                            <?php echo htmlentities($_POST['numofdays']) ?>
                                                        </span></p>
                                                </div> 
                                            </div> 
                                            <div class="row">
                                                <p style="color:red;"> Enter Coupon No<br>
                                                    <input type="text" class="form-control2" id="coupon_no" name="coupon_no" onkeyup="couponFunction()">
                                                </p>
                                                <div style="font-size: 14px;color: red" id="coupon_err"></div>
                                            </div>
                                            
                                            <div class="row" style="margin-top: 30px; margin-left: 20px;" > 
                                                <button class="btn btn-default btn-md btn-group-justified bb" type="submit" value="submit" id="submit"  name="submit" >BOOK NOW</button>                
                                            </div>
                                        </div>
                                    </div>  
                                </div>



                            </div>  



                        </div> 
                        <div class="col-sm-12" style="margin-top: 10px;">
                            <p class="tourh5"> Car Rental Information </p>
                            <p class="tourdaypara">Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada.
                                Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis.
                                Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh 
                                rutrum dignissim ut non risus. In tincidunt urna quis sem luctus,
                                sed accumsan magna pellentesque. Donec et iaculis tellus. 
                                Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus,
                                dignissim maurornare, consequat lacus. Integer dui neque,
                                scelerisque nec sollicitudin sit amet, sodales a erat.
                                Duis vitae condimentum ligula. Integer eu mi nisl. 
                                Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.</p>

                        </div>      </div> 

                    <input type="hidden" value="<?php echo htmlentities($_POST['picklocation1']) ?>" id="picklocation112" name="picklocation1"> 
                    <input type="hidden" value="<?php echo htmlentities($_POST['pickdate1']) ?>" id="pickdate1" name="pickdate1">   
                    <input type="hidden" value="<?php echo htmlentities($_POST['picktime1']) ?>" id="picktime112" name="picktime1">   
                    <input type="hidden" value="<?php echo htmlentities($_POST['returndate1']) ?>" id="returndate1" name="returndate1">   
                    <input type="hidden" value="<?php echo htmlentities($_POST['returntime1']) ?>" id="returntime112" name="returntime1"> 
                    <input type="hidden" value="<?php echo htmlentities($_POST['numofdays']) ?>" id="numofdays112" name="numofdays"> 
                    <input type="hidden" name="car1" value='<?php echo $row['id']; ?>' id="car1">
                    <input type="hidden" value="<?php echo strtoupper($row['carname']); ?> " id="carname" name="carname">
                    <input type="hidden" value="<?php echo $row['refno']; ?> " id="refno" name="refno">

                    <input type="hidden" value="<?php
                                                            //    echo ($row['perkm'] * $_POST['numofdays'] );


                                                            if (isset($row['disrentcar']) && ( $row['disrentcar'] != '0')) {
                                                                //  echo "<strike>".$row['perkm']* $_POST['numofdays']."</strike>";
                                                                // echo " x ".$row2['disrentcar']."%";
                                                                $tot = (($row['perkm']) - (($row['perkm'] ) * ($row['disrentcar'] / 100)));

                                                                echo $tot * $_POST['numofdays'];
                                                            } else {

                                                                $tot = $row['perkm'];
                                                                echo $row['perkm'] * $_POST['numofdays'];
                                                            }
                                                            ?> " id="total121" name="total">

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


                        <div class="row" style="background-color: #FFF;border-bottom:  10px solid #f5f5f5; margin: 0; padding: 0;">
                            <div class="col-sm-12">
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
           <!--                            <p class="carp"> <?php // echo strtoupper($row2['eng']);   ?></p>-->
                                        <p class="carp"> <?php echo strtoupper($row2['ac']); ?></p>
                                        <p class="carp"> <?php echo strtoupper($row2['insur']); ?></p>
                                        <p class="carp"> <?php echo strtoupper($row2['doors']); ?></p>
                                        <p class="carp">FUEL - FULL TO FULL</p>
                                    </div> 
                                    <div class="col-sm-6">
                                        <span class="carfnt">Capacity </span><br>
                                        <p class="carp">  <?php echo strtoupper($row2['seats']); ?></p>
                                        <p class="carp">   <?php echo strtoupper($row2['hand']); ?></p>
                                        <p class="carp">  <?php echo strtoupper($row2['large']); ?></p>

                                        <span class="carfnt">Conditions </span><br>

                                        <p class="carp">  FREE MILLAGE: <?php echo $row2['freekm']; ?> X <?php echo $_POST['numofdays'] ?> = <?php echo ($row2['freekm'] * $_POST['numofdays']); ?>KM</p>

                                        <p class="carp">    <?php echo strtoupper($row2['extramillage']); ?></p>


                                    </div> 


                                </div>

                                <div class="col-sm-2 " style="background-color: #FFF; height:123px; margin-top: 10px;">

                                    <span class="hotelprice"><?php echo strtoupper($row['rate']); ?></span>

                                    <form action="" method="POST" name="rentcarfrm1">
                                        <input type="hidden" value="<?php echo htmlentities($_POST['picklocation1']) ?>" id="picklocation1_<?php echo $row2['id']; ?>" name="picklocation1"> 
                                        <input type="hidden" value="<?php echo htmlentities($_POST['pickdate1']) ?>" id="pickdate1_<?php echo $row2['id']; ?>" name="pickdate1">   
                                        <input type="hidden" value="<?php echo htmlentities($_POST['picktime1']) ?>" id="picktime1_<?php echo $row2['id']; ?>" name="picktime1">   
                                        <input type="hidden" value="<?php echo htmlentities($_POST['returndate1']) ?>" id="returndate1_<?php echo $row2['id']; ?>" name="returndate1">   
                                        <input type="hidden" value="<?php echo htmlentities($_POST['returntime1']) ?>" id="returntime1_<?php echo $row2['id']; ?>" name="returntime1"> 
                                        <input type="hidden" value="<?php echo htmlentities($_POST['numofdays']) ?>" id="numofdays_<?php echo $row2['id']; ?>" name="numofdays"> 
                                        <input type="hidden" name="car1" value='<?php echo $row2['id']; ?>' id="car1_<?php echo $row2['id']; ?>">    

                                        <h4 class="tourh4"><span style="color: #515657; font-size: 15px;" >USD   
        <?php
        //  echo ($row2['perkm'] * $_POST['numofdays']);


        if (isset($row2['disrentcar']) && ( $row2['disrentcar'] != '0')) {
            echo "<strike>" . $row2['perkm'] * $_POST['numofdays'] . "</strike>";
            echo " - " . $row2['disrentcar'] . "%";
            $tot = (($row2['perkm']) - (($row2['perkm']) * ($row2['disrentcar'] / 100)));

            echo "<br/>USD " . $tot * $_POST['numofdays'];
        } else {

            $tot = $row2['perkm'];
            echo $row2['perkm'] * $_POST['numofdays'];
        }
        ?></span></h4>

                                        <p> USD <span style="color: #515657; font-size: 15px;" > 
                                                <?php echo $tot ?> X <?php echo $_POST['numofdays'] ?></span>
                                        </p>
                                        <!--<button class="btn btn-default btn-md btn-group-justified bb" style="margin-top: 20px;  max-width: 100px;" type="submit" value="submit" id="submit"  name="submit" >BOOK NOW</button>-->                
                                        <input type="button" id="add_<?php echo $row2['id']?>" value="BOOK NOW" class="btn btn-default btn-md btn-group-justified bb" onClick = "cartAction4('<?php echo $row2['id']?>')" />

                                        </p>    </form>      

                                </div>
                            </div>
                        </div>

                        <!--RENT CAR CLOSE-->
                                     

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
<?php echo htmlentities($_POST['returndate1']) ?>

                        </span></p>


                </div> 
            </div>

            <div class="row" style="border-bottom:  #efefef solid 1px; margin-top: 15px;">
                <div class="col-sm-2">
                    <i class="fa fa-clock-o" aria-hidden="true" style="color:#f3891d; font-size: 25px;"></i>


                </div> 
                <div class="col-sm-10">

                    <p style="color:#01b7f2;">Time<br>
                        <span style="font-size: 12px; color:#515657;">  <?php echo htmlentities($_POST['returntime1']) ?></span></p>

                </div> 
            </div>
            <div class="row" style="border-bottom:  #efefef solid 1px; margin-top: 15px;">
                 <span id="disc" style="color: red; font-size: 15px;"></span><br>
                <div class="col-sm-12">   <h4 class="tourh4">Total Price : 
                        <span style="color: #515657; font-size: 15px;" >USD
<?php
//echo ($row['perkm'] * $_POST['numofdays']);

$tot=0;

if (isset($row['disrentcar']) && ( $row['disrentcar'] != '0')) {
    echo "<strike>" . $row['perkm'] * $_POST['numofdays'] . "</strike>";
    echo " - " . $row['disrentcar'] . "%";
    $tot = (($row['perkm']) - (($row['perkm']) * ($row['disrentcar'] / 100)));

    echo "<br/>USD " . $tot . " X " . $_POST['numofdays'];
    echo " = " . $tot * $_POST['numofdays'];
} else {

    $tot = $row['perkm'];
    echo $row['perkm'] * $_POST['numofdays'];
}
?>
                        
      <span id="old_price"><strike><?php echo $tot;?></strike></span>
                            
     <span id="finl_tot"><?php echo $tot;?> </span></h4>
                    
                    
 <input type="hidden" name="model" value='<?php
if (isset($row['disrentcar']) && ( $row['disrentcar'] != '0')) {
   // echo "<strike>" . $row['perkm'] * $_POST['numofdays'] . "</strike>";
   // echo " - " . $row['disrentcar'] . "%";
    $tot = (($row['perkm']) - (($row['perkm']) * ($row['disrentcar'] / 100)));

  //  echo "<br/>USD " . $tot . " X " . $_POST['numofdays'];
    echo  $tot * $_POST['numofdays'];
} else {

    $tot = $row['perkm'];
    echo $row['perkm'] * $_POST['numofdays'];
}


?>' id="model">

<input type="hidden" id="model_new" name="model_new" >     
                </div>  </div> 

        </div>






        <div class="row" style=" background-color: #FFF; margin-left: 0; margin-top: 10px; padding: 20px;">
            <p class="tourh5">Need Ayubowan Tours Help?</p>
            <p class="tourdaypara">We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
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
           <?php
                                            }




                                            mysqli_free_result($result2);
                                        }



                                        $conn->close();
                                        ?> 