<?php
require_once 'cnn/cnn.php';

$sql = "SELECT * FROM cabs ";
$result = $conn->query($sql);

?>

               <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
            $("area[rel^='prettyPhoto']").prettyPhoto();
				
            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
            $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
	$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
		custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
		changepicturecallback: function(){ initialize(); }
	});

	$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
	custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>\n\
         <div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div>\n\
            <div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
		changepicturecallback: function(){ _bsap.exec(); }
	});
});
	</script>
        
        <script>

    function cartAction3(product_code) {
$('#content_ajax').hide();
        var queryString = "";
        queryString = 'car1=' + $("#car1_" + product_code).val() + '&numdays=' + $("#numdays_" + product_code).val() + '&picklocation=' + $("#picklocation_" + product_code).val() + '&pickdate=' + $("#pickdate_" + product_code).val() + '&picktime=' + $("#picktime_" + product_code).val() + '&returndate=' + $("#returndate_" + product_code).val() + '&returntime=' + $("#returntime_" + product_code).val();
//alert(queryString);
$('#loading').show();
        jQuery.ajax({
            url: "withdrver-cardetailed.php",
            data: queryString,
            type: "POST",
            dataType: "html",
            success: function (data) {
                $('#loading').hide();
                $('#content_ajax').show();
                $('#content_ajax').html(data);
                 $('html,body').animate({scrollTop: $("#content_ajax").offset().top - 130},'slow');
                          
            }

        });

    }
</script>
        
                 <!--........RENT CAR OPEN............-->
           <?php
                    $k= 0; 
  if ($result->num_rows > 0) {    
    while($row = $result->fetch_assoc()) {
        
        $k++
  ?>       
                 
                 <div class="col-sm-12" style="background-color: #FFF;border-bottom:  10px solid #f5f5f5; margin: 0; padding-left: 0; padding-right: 0;">
                     
                     <div class="col-sm-3 img-responsive" style="background-color: #FFF; margin-top: 20px; padding: 0; height: auto; border-right:  1px solid #f5f5f5;">
                         
                         <img src='http://www.ayubowantours.lk/photos/thumb_<?php echo $row['img1'];  ?>'  class=" img-responsive"  > 
                         
                         
                       
                     </div>
                     
                     <div class="col-sm-3" style="background-color: #FFF; height: auto; padding-left: 30px;">
                         <p class="frmp"><?php echo strtoupper($row['carname']);  ?>  
                         </p>
<!--                         <p class="frmp">REF NO : <?php //echo strtoupper($row['refno']);  ?></p>    -->
                         
                           
                        
<!--                             <P class="car"><?php //echo ucfirst($row['discription']);  ?> </p>-->
<!--                             <p class="car">24 / 7 Service counter at Bandaranaike International Airport Arrival Concourse</p>
                         -->
                        
                         
                       

                     </div>
                     <div class="col-sm-4" style="background-color: #FFF; height: auto; margin-left: -20px; border-right:  1px solid #f5f5f5;">
                         <div class="col-sm-6" style="border-right:  1px solid #f5f5f5;">
                             <span class="carfnt">Facility </span><br>
                             <p class="carp"> <?php echo strtoupper($row['eng']);  ?></p>
                            <p class="carp"> <?php echo strtoupper($row['ac']);  ?></p>
                              <p class="carp"> <?php echo strtoupper($row['insur']);  ?></p>
                               <p class="carp"> <?php echo strtoupper($row['doors']);  ?></p>
                                 <p class="carp"> <?php echo strtoupper($row['fuel']);  ?></p>
<!--                             <p class="carp"> <?php //echo strtoupper($row['shift']);  ?></p>
                             <p class="carp"> <?php// echo strtoupper($row['bookable']);  ?></p>-->
                         </div> 
                         <div class="col-sm-6" style="margin-right: -20px;">
                               <span class="carfnt">Capacity </span><br>
                               <p class="carp">  <?php echo strtoupper($row['seats']);  ?></p>
                               <p class="carp">   <?php echo strtoupper($row['hand']);  ?></p>
                               <p class="carp">  <?php echo strtoupper($row['large']);  ?></p>
                              
                               <span class="carfnt">Conditions </span><br>
                              
                                 <p class="carp">  FREE MILLAGE: <?php echo $row['freekm'];  ?> X <?php echo $_POST['numdays'] ?> = <?php echo ($row['freekm'] * $_POST['numdays']);  ?>KM</p>
                                 
                                  <p class="carp">    <?php echo strtoupper($row['extramillage']);  ?></p>
                         </div> 
                         
                      
                     </div>
                     
                     <div class="col-sm-2 " style="background-color: #FFF; height:123px;">
                        
                         <form action="" method="POST" name="withcarfrm">
                    <input type="hidden" value="<?php echo htmlentities($_POST['picklocation']) ?>" id="picklocation_<?php echo $row['id'] ; ?>" name="picklocation"> 
                    <input type="hidden" value="<?php echo htmlentities($_POST['pickdate']) ?>" id="pickdate_<?php echo $row['id'] ; ?>" name="pickdate">   
                    <input type="hidden" value="<?php echo htmlentities($_POST['picktime']) ?>" id="picktime_<?php echo $row['id'] ; ?>" name="picktime">   
                    <input type="hidden" value="<?php echo htmlentities($_POST['returndate']) ?>" id="returndate_<?php echo $row['id'] ; ?>" name="returndate">   
                   <input type="hidden" value="<?php echo htmlentities($_POST['returntime']) ?>" id="returntime_<?php echo $row['id'] ; ?>" name="returntime"> 
                            <input type="hidden" name="car1" value='<?php echo $row['id'] ; ?>' id="car1_<?php echo $row['id'] ; ?>">    
   
                           <h4 class="tourh4"> <span style="color: #515657; font-size: 15px;" > USD 
                               
                               <?php 
                               
                               if(isset($_POST['numdays'])) {
                                   
                                   $nodays = $_POST['numdays']; 
                                   
                               }
                                  else
                                      
                                  {
                                    $nodays = $_POST['numdays1'];    
                                  }
                                   
                                  
                                   
                                   
 if(isset($row['diswithdriver']) && ( $row['diswithdriver'] != '0'))
 {
    
     echo "<strike>".$row['perkm']."</strike>";
     echo " - ".$row['diswithdriver']."%";
     
     
    $discount = ($row['perkm'] * $row['diswithdriver'])/ 100;
  
    $tot= $row['perkm']-$discount ;
     
     echo "<br/>USD ".$tot* $nodays;
 }
 else
 {
     
     $tot = $row['perkm'];
       echo $row['perkm']* $nodays  ;
 }
                                   
                                   
                                   ?></span></h4>
                         <p> USD <span style="color: #515657; font-size: 15px;" >
 <?php echo $tot;?> X
 <?php echo $nodays; ?>
                             </span></p>
      <input type="hidden" value="<?php echo $nodays; ?>" id="numdays_<?php echo $row['id'] ; ?>" name="numdays"> 
                                          
                             
<!--<button class="btn btn-default btn-md btn-group-justified bb" style="margin-top: 20px;  max-width: 100px;" type="submit" value="submit" id="submit"  name="submit" >BOOK NOW</button>                
  -->
  <?php 
  
  if($row['availability']=='yes'){
//echo '<button class="btn btn-default btn-md btn-group-justified bb" style="margin-top: 20px;" type="submit" value="submit" id="submit"  name="submit" >BOOK NOW</button>         ';       
echo '<input type="button" id="add_'.$row['id'].'" value="BOOK NOW" class="btn btn-default btn-md btn-group-justified bb" onClick = "cartAction3('.$row['id'].')" /> ';       
  }
  else
  {
   echo '<div class="alert alert-warning btn-md " role="alert" style="margin-top: 20px;">Not Available</div>';   
  }

?> 
        
 </p>    </form>
                     </div> 
                 </div>
                 
                   <!--............RENT CAR CLOSE..............-->
                   
                  <?php 
                   }

         
        
        
              mysqli_free_result($result);

    }
    


$conn->close();
  ?>
            
                   
           
                
               
      
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
    });
});  
 </script>  
    

         
<script>
    $(document).ready(function () {
    
 $('#dp1').datepicker({
format: 'dd-mm-yyyy'
});


    var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

 var checkin = $('#dpd11').datepicker({       
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }          
          
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
              
                      
 
            //var newDate = new Date(ev.date)
       // newDate.setDate(newDate.getDate() + 1);
            //checkout.setValue(newDate);
          }
          checkin.hide();
 
        }).data('datepicker');
       
        
        var checkout = $('#dpd12').datepicker({
          onRender: function(date) {
            return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
          dateDifference();
        
        }).data('datepicker');
        



});

function dateDifference() {
// var end = $("#dpd12").datepicker().val()
//var start = $("#dpd11").datepicker().val()
         
 //alert("fdsfsd"); 
 
  $( "#dpd11" ).datepicker({ dateFormat: 'dd/mm/yyyy' });
  $( "#dpd12" ).datepicker({ dateFormat: 'dd/mm/yyyy' });
 
 
 var start1 = $('#dpd11').datepicker().val().split("/"); 
 var start = new Date(start1[1]+"/"+start1[0]+"/"+start1[2]);
   
   
    var end1 = $('#dpd12').datepicker().val().split("/"); 
        var end = new Date(end1[1]+"/"+end1[0]+"/"+end1[2]);
        
   // var days   = (end - start)/1000/60/60/24;
 

    var diff = new Date(end - start);
    var days = (diff/1000/60/60/24)+1 ;
            
    //  alert(days); 
//     
  $('#numdays1').html(days);
  $('#numdays1').val(days);
}


</script> 
	