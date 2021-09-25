<?php
require_once 'cnn/cnn.php';
$sql = "SELECT * FROM cabs ";
$result = $conn->query($sql);
?>
<script>

    function cartAction(product_code) {
$('#content_ajax').hide();
        var queryString = "";
        queryString = 'car1=' + $("#car1_" + product_code).val() + '&pickup=' + $("#pickup_" + product_code).val() + '&pickoff=' + $("#pickoff_" + product_code).val() + '&pickoff1=' + $("#pickoff1_" + product_code).val() + '&dateon=' + $("#dateon_" + product_code).val() + '&ontime=' + $("#ontime_" + product_code).val();
$('#loading').show();
        jQuery.ajax({
            url: "car-detailed.php",
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
<?php
$k = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $k++;
        
        
        if($k==1){
            
            
        

        echo '<div class="col-md-12" style="background-color: #fff; border:  #00A8FF 3px solid;  margin: 2px; padding: 0;">
                     
                     <div class="col-sm-3" style="background-color: #FFF; margin: 0; padding: 0; height: auto; border-right:  1px solid #f5f5f5;">
                         
              <img src="photos/thumb_' . $row['img1'] . '" class="img-responsive">
                 

                       
                         
                       
                     </div>
                     
                     <div class="col-sm-3" style="background-color: #FFF;">
                <p class="frmp">' . strtoupper($row['carname']) . '</p>
 <p class="car">24 / 7 Service counter at Bandaranaike International Airport Arrival Concourse</p>
                         


                     </div>
                     <div class="col-sm-4" style="background-color: #FFF; height: auto; border-right:  1px solid #f5f5f5;">
                         <div class="col-sm-6" style="border-right:  1px solid #f5f5f5;">
                             <span class="carfnt">Facility </span><br>
                             <p class="carp">' . strtoupper($row['eng']) . '</p>
                            <p class="carp">' . strtoupper($row['ac']) . '</p>
                              <p class="carp">' . strtoupper($row['insur']) . '</p>
                               <p class="carp">' . strtoupper($row['doors']) . '</p>
                                 <p class="carp">' . strtoupper($row['fuel']) . '</p>

                         </div> 
                           <div class="col-sm-6">
                               <span class="carfnt">Capacity </span><br>
                               <p class="carp">' . strtoupper($row['seats']) . '</p>
                               <p class="carp"> ' . strtoupper($row['hand']) . '</p>
                               <p class="carp">' . strtoupper($row['large']) . '</p>
                               
                         </div> 
                         
                      
                     </div>
                     
<div class="col-sm-2 " style="background-color: #FFF; height:123px;">                        
<span class="hotelprice">' . strtoupper($row['rate']) . '</span>  
    
<form action="" method="POST" name="carfrm" id="carfrm">
<input type="hidden" value="' . htmlentities($_POST['pickup']) . '" id="pickup_' . $row['id'] . '" name="pickup">
<input type="hidden" value="' . htmlentities($_POST['pickoff']) . '" id="pickoff_' . $row['id'] . '" name="pickoff">
<input type="hidden" name="dateon"  value="' . htmlentities($_POST['dateon']) . '" id="dateon_' . $row['id'] . '">
<input type="hidden" name="ontime"  value="' . htmlentities($_POST['ontime']) . '" id="ontime_' . $row['id'] . '">
<input type="hidden" name="car1" value="' . $row['id'] . '" id="car1_' . $row['id'] . '">

<input type="hidden" class="form-control" id="pickoff1_' . $row['id'] . '" value="' . $_POST['pickoff1'] . '" name="pickoff1">
<h4 class="tourh4">Total Price  <br> <span style="color: #515657; font-size: 15px;" > Rs ';


        if (isset($_POST['pickofff1'])) {
            $sql1 = "SELECT " . trim($row['model']) . " FROM price where id= '" . $_POST['pickofff1'] . "'";
        }

        if (isset($_POST['pickoff1'])) {
            $sql1 = "SELECT " . trim($row['model']) . " FROM price where id= '" . $_POST['pickoff1'] . "'";
        }



        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();



        if (isset($row['dispickup']) && ( $row['dispickup'] != '0')) {
            echo "<strike>" . $row1[$row['model']] . "</strike>";
            echo " - " . $row['dispickup'] . "%";
            echo "<br/>Rs " . ($row1[$row['model']] - (($row1[$row['model']]) * ($row['dispickup'] / 100)));
        } else {
            echo $row1[$row['model']];
        }

        echo "</span>";


        if ($row['availability'] == 'yes') {
            ?>
            <input type="button" id="add_<?php echo $row['id']; ?>" value="BOOK NOW" class="btn btn-default btn-md btn-group-justified bb" onClick = "cartAction('<?php echo $row['id']; ?>')" />

            <div style=" background-color: #00A8FF; color: white;   "> Today's Deal </div>
            
            <div style="  color: red; font-size: 11px; "> Last 24 hours <?php echo rand(1,3); ?> were Booked </div>
            
            <?php
            // echo '<button class="btn btn-default btn-md btn-group-justified bb" style="margin-top: 20px;" type="submit" value="submit" id="add_'.$row['id'].' onClick = "cartAction("'.$row['id'].')" name="submit">BOOK NOW</button>';       
        } else {
            echo '<div class="alert alert-warning btn-md " role="alert" style="margin-top: 20px;">Not Available</div>';
        }

        echo '</form> </div> </div>';
     

    
}
else
{
    
    
    
    
    
     if (isset($row['dispickup']) && ( $row['dispickup'] != '0')) {
    
    echo '<div class="col-md-12" style="background-color: #FFF;  border:  red 3px solid; margin: 0; padding: 0;">';
     }
     
     else
         
     {
       echo '<div class="col-md-12" style="background-color: #FFF;border-bottom:  10px solid #f5f5f5; margin: 0; padding: 0;">';  
     }
     
     
                


echo '
<div class="col-sm-3" style="background-color: #FFF; margin: 0; padding: 0; height: auto; border-right:  1px solid #f5f5f5;">
                         
              <img src="photos/thumb_' . $row['img1'] . '" class="img-responsive">
                 

                       
                         
                       
                     </div>
                     
                     <div class="col-sm-3" style="background-color: #FFF;">
                <p class="frmp">' . strtoupper($row['carname']) . '</p>
 <p class="car">24 / 7 Service counter at Bandaranaike International Airport Arrival Concourse</p>
                         


                     </div>
                     <div class="col-sm-4" style="background-color: #FFF; height: auto; border-right:  1px solid #f5f5f5;">
                         <div class="col-sm-6" style="border-right:  1px solid #f5f5f5;">
                             <span class="carfnt">Facility </span><br>
                             <p class="carp">' . strtoupper($row['eng']) . '</p>
                            <p class="carp">' . strtoupper($row['ac']) . '</p>
                              <p class="carp">' . strtoupper($row['insur']) . '</p>
                               <p class="carp">' . strtoupper($row['doors']) . '</p>
                                 <p class="carp">' . strtoupper($row['fuel']) . '</p>

                         </div> 
                           <div class="col-sm-6">
                               <span class="carfnt">Capacity </span><br>
                               <p class="carp">' . strtoupper($row['seats']) . '</p>
                               <p class="carp"> ' . strtoupper($row['hand']) . '</p>
                               <p class="carp">' . strtoupper($row['large']) . '</p>
                               
                         </div> 
                         
                      
                     </div>
                     
<div class="col-sm-2 " style="background-color: #FFF; height:123px;">                        
<span class="hotelprice">' . strtoupper($row['rate']) . '</span>  
    
<form action="" method="POST" name="carfrm" id="carfrm">
<input type="hidden" value="' . htmlentities($_POST['pickup']) . '" id="pickup_' . $row['id'] . '" name="pickup">
<input type="hidden" value="' . htmlentities($_POST['pickoff']) . '" id="pickoff_' . $row['id'] . '" name="pickoff">
<input type="hidden" name="dateon"  value="' . htmlentities($_POST['dateon']) . '" id="dateon_' . $row['id'] . '">
<input type="hidden" name="ontime"  value="' . htmlentities($_POST['ontime']) . '" id="ontime_' . $row['id'] . '">
<input type="hidden" name="car1" value="' . $row['id'] . '" id="car1_' . $row['id'] . '">

<input type="hidden" class="form-control" id="pickoff1_' . $row['id'] . '" value="' . $_POST['pickoff1'] . '" name="pickoff1">
<h4 class="tourh4">Total Price  <br> <span style="color: #515657; font-size: 15px;" > Rs ';


        if (isset($_POST['pickofff1'])) {
            $sql1 = "SELECT " . trim($row['model']) . " FROM price where id= '" . $_POST['pickofff1'] . "'";
        }

        if (isset($_POST['pickoff1'])) {
            $sql1 = "SELECT " . trim($row['model']) . " FROM price where id= '" . $_POST['pickoff1'] . "'";
        }



        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();



        if (isset($row['dispickup']) && ( $row['dispickup'] != '0')) {
            echo "<strike>" . $row1[$row['model']] . "</strike>";
            echo " - " . $row['dispickup'] . "%";
            echo "<br/>Rs " . ($row1[$row['model']] - (($row1[$row['model']]) * ($row['dispickup'] / 100)));
        } else {
            echo $row1[$row['model']];
        }

        echo "</span>";


        if ($row['availability'] == 'yes') {
            ?>
            <input type="button" id="add_<?php echo $row['id']; ?>" value="BOOK NOW" class="btn btn-default btn-md btn-group-justified bb" onClick = "cartAction('<?php echo $row['id']; ?>')" />

            
           <?php  if (isset($row['dispickup']) && ( $row['dispickup'] != '0')) {  ?>
            <div style=" background-color: red; color: white;   ">  Price Reduced <br>
               Comfortable</div>
            
            <?php } ?>
             
            <?php
            // echo '<button class="btn btn-default btn-md btn-group-justified bb" style="margin-top: 20px;" type="submit" value="submit" id="add_'.$row['id'].' onClick = "cartAction("'.$row['id'].')" name="submit">BOOK NOW</button>';       
        } else {
            echo '<div class="alert alert-warning btn-md " role="alert" style="margin-top: 20px;">Not Available</div>';
        }

        echo '</form> </div> </div>';
    }
    
    
    
    }
    
    
    
    
    
    
    



    mysqli_free_result($result);
}



$conn->close();
?>
<script>
    $(document).ready(function () {
        $('body').append('<div id="toTop" class="btn btn-info"><span class="fa fa-arrow-up" style="font-size:40px;color:#fff;"></span></div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function () {
            $("html, body").animate({scrollTop: 0}, 600);
            return false;
        });
    });

    if (top.location != location) {
        top.location.href = document.location.href;
    }
    $(function () {
        window.prettyPrint && prettyPrint();
        $('#dp1').datepicker({
            format: 'mm-dd-yyyy'
        });



        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
            onRender: function (date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#ontime')[0].focus();
            $('#dpd1').hide();
        }).data('datepicker');


    });


    $(document).ready(function () {
        $(document).on('focus', ':input', function () {
            $(this).attr('autocomplete', 'off');
        });
    });

    function autocomplet() {
        var min_length = 0; // min caracters to display the autocomplete
        var keyword = $('#pickofff').val();
        // $('#country_list_id').val() = null;

        $.ajaxSetup({cache: false});



        if (keyword.length >= min_length) {

            //var random = Math.floor( Math.random() * 90 ) + 10;
            $('#country_list_id').empty();

            $.ajax({
                url: 'refresh_command.php',
                type: 'POST',
                cache: false,
                async: false,

                data: {keyword: keyword},
                success: function (data) {

                    // $('#country_list_id').data().autocomplete.term = null;
                    //$('#country_list_id').val() =  null;
                    $('#country_list_id').show();
                    $('#country_list_id').html(data);


                }
            });


        } else {

            $('#country_list_id').empty();
            $('#country_list_id').hide();


        }
    }

// set_item : this function will be executed when we select an item
    function set_item(item) {
        // change input value
        $(this).val('');
        $('#pickofff').val(item);
        // hide proposition list

        $('#country_list_id').hide();
        $('#dpd3')[0].focus();
    }
    function set_item1(item) {
        $(this).val('');
        // change input value
        $('#pickofff1').val(item);
        // hide proposition list

        //$('#country_list_id').hide();
        // $('#dpd3')[0].focus();
    }
/////////////////////////////////////////////////////////////////////////////////////////

    function autodrop() {
        var min_length = 0; // min caracters to display the autocomplete
        var keyword = $('#dropoff').val();
        // $('#country_list_id').val() = null;

        $.ajaxSetup({cache: false});



        if (keyword.length >= min_length) {

            //var random = Math.floor( Math.random() * 90 ) + 10;
            $('#country_list_id').empty();

            $.ajax({
                url: 'refresh_command1.php',
                type: 'POST',
                cache: false,
                async: false,

                data: {keyword: keyword},
                success: function (data) {

                    // $('#country_list_id').data().autocomplete.term = null;
                    //$('#country_list_id').val() =  null;
                    $('#country_list_id1').show();
                    $('#country_list_id1').html(data);


                }
            });


        } else {

            $('#country_list_id1').empty();
            $('#country_list_id1').hide();


        }
    }

// set_item : this function will be executed when we select an item
    function set_item2(item) {
        // change input value
        $(this).val('');
        $('#dropoff').val(item);
        // hide proposition list

        $('#country_list_id1').hide();
        $('#dpdrop')[0].focus();
    }
    function set_item12(item) {
        $(this).val('');
        // change input value
        $('#dropoff1').val(item);
        // hide proposition list

        //$('#country_list_id').hide();
        // $('#dpd3')[0].focus();
    }

//////////////////////////////////////////////////////////////////////////////////////

    if (top.location != location) {
        top.location.href = document.location.href;
    }
    $(function () {
        window.prettyPrint && prettyPrint();
        //$('#dp1').datepicker({
        //	format: 'mm-dd-yyyy'
        //});
        //$('#dp2').datepicker();
        //$('#dp3').datepicker();





        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
            onRender: function (date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }

        }).on('changeDate', function (ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#dpd2')[0].focus();
        }).data('datepicker');


        var checkout = $('#dpd2').datepicker({
            onRender: function (date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            checkout.hide();
        }).data('datepicker');


        var pickuptime = $('#dpd3').datepicker({
            onRender: function (date) {
                return date.valueOf() <= now.valueOf() ? 'disabled' : '';

            }
        }).on('changeDate', function (ev) {
            $('#country_list_id').hide();
            pickuptime.hide();
        }).data('datepicker');


        var droptime = $('#dpdrop').datepicker({

            onRender: function (date) {
                return date.valueOf() <= now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            $('#country_list_id2').hide();
            droptime.hide();
        }).data('datepicker');


    });



</script>  

