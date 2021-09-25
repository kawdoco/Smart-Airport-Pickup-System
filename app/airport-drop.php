<?php
session_start();
 require_once 'cnn/cnn.php';

$sql = "SELECT * FROM cabs where id = '".$_POST['car1']."'";
$result = $conn->query($sql);

//$row =  mysql_fetch_assoc($result);
 $row = $result->fetch_assoc() ;  
 
$sql1="SELECT ".strtolower(trim($row['model']))." FROM price where id= '".$_POST['dropoff1']."'";
//$sql1="SELECT id,alto FROM price where id = '".$_POST['pickoff1']."'";

$result1 = $conn->query($sql1);
//$row =  mysql_fetch_assoc($result);
 $row1 = $result1->fetch_assoc() ;   
 


 

?>

 <script>
   $(document).ready(function(){
       
$('#toggle').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#submit').removeAttr('disabled'); //enable input
        
    } else {
        $('#submit').attr('disabled', true); //disable input
    }
});

        $("#drop_form_tomail").on('submit', function (e) {

            e.preventDefault();
//
            var title = $("#title").val();
            var fname = $("#fname").val();
            var familyname = $("#familyname").val();
            var address = $("#address").val();
            var country = $("#country").val();
            var email = $("#email").val();
            var tele = $("#tele").val();
            var fax = $("#fax").val();
            var mobile = $("#mobile").val();
            var adult = $("#adult").val();
            var child = $("#child").val();
            var infant = $("#infant").val();
            var flightno = $("#flightno").val();
            var flighttime = $("#flighttime").val();
            var baggage = $("#baggage").val();
            var inquire = $("#inquire").val();
            var carname = $("#carname").val();
            var drop = $("#drop32").val();
            var refno = $("#refno").val();
            var dropoff = $("#dropoff32").val();
            var dpdrop = $("#dpdrop32").val();
            var ontime = $("#ontime").val();
            var model = $("#model").val();
            var car1 = $("#car1").val();
            var pickup = $("#pickup").val();
            var pickoff1 = $("#pickoff1").val();
            var code = $("#6_letters_code").val();
//alert(drop+" "+dropoff);
          
            $.ajax({
                url: "mail_airport_drop.php", // Url to which the request is send
                type: "POST", // Type of request to be send, called as method
                data: 'title=' + title + '&fname=' + fname + '&familyname=' + familyname + '&address=' + address + '&country=' + country + '&email=' + email + '&tele=' + tele + '&fax=' + fax + '&mobile=' + mobile + '&adult=' + adult + '&child=' + child + '&infant=' + infant + '&flightno=' + flightno + '&flighttime=' + flighttime +'&baggage=' + baggage + '&inquire=' + inquire + '&carname=' + carname + '&refno=' + refno + '&dropoff=' + dropoff + '&dpdrop=' + dpdrop + '&ontime=' + ontime + '&model=' + model + '&car1=' + car1 + '&pickup=' + pickup + '&pickoff1=' + pickoff1 + '&6_letters_code=' + code + '&drop=' + drop,
                dataType: "html",
                success: function (data)   // A function to be called if request succeeds
                {
                    if (data == "ok") {
                        $("#form_submit2").hide();
                        $('#book_engine').hide();
                        $('#ajax_cont').hide();
                        $('#about_div').hide();
                        $('#thankyou').show();
                        $(".err_captcha2").html("");
                        $('html,body').animate({scrollTop: $("#thankyou").offset().top - 130},'slow');
                             
                    } else {
                        $(".err_captcha2").html(data);
                    }





                }
            });
//
//
//                 





        });

}); 


 </script> 
<div id="form_submit2">
    <form action="" method="POST" name="pickupfrm" id="drop_form_tomail">
    
     <input type="hidden" value="<?php echo strtoupper($row['carname']);  ?> " id="carname" name="carname">
    <input type="hidden" value="<?php echo strtoupper($row['refno']);  ?> " id="refno" name="refno">
   
 <input type="hidden" value="<?php echo htmlentities($_POST['pickup']) ?>" id="pickup" name="pickup">
<input type="hidden" value="<?php echo htmlentities($_POST['dpdrop']) ?>" id="pickoff" name="pickoff">
<input type="hidden" value="<?php echo htmlentities($_POST['dropoff']) ?>" id="dropoff32" name="dropoff">
<input type="hidden" value="<?php echo htmlentities($_POST['drop']) ?>" id="drop32" name="drop32">
<input type="hidden" value="<?php echo htmlentities($_POST['dpdrop']) ?>" id="dpdrop32" name="dpdrop">
<input type="hidden" value="<?php echo htmlentities($_POST['dateon']) ?>" id="dateon" name="dateon">
<input type="hidden" value="<?php echo htmlentities($_POST['ontime']) ?>" id="ontime" name="ontime">

<input type="hidden" name="car1" value='<?php echo $row['id'] ; ?>' id="car1">  
         
 <input type="hidden" name="model" value='<?php
 
  if(isset($row['disdrop']) && ( $row['disdrop'] != '0'))
 {
   //  echo "<strike>".$row1[$row['model']]."</strike>";
    // echo " x ".$row['disdrop']."%";
     echo ($row1[$row['model']] - (($row1[$row['model']])*($row['disdrop']/100)));
 }
 else
 {
      echo $row1[$row['model']] ;
 }
 
 ?>' id="model">  

             
    
            
            
            <div class="col-sm-12" style="margin: 0; padding: 0;">
              <a class="testimonial-location"></a>     
                <div class="row" style="margin: 0; padding: 0; background-color: #FFF;">

                 <div >
            <h2 style="text-transform: none; margin-left: 20px;" >
            Air Port Drop
            </h2>
                    
                  
                <hr style=" border-color: #d0ebf6; ">
                                </div>
                   
                    
                  <div class="row" style="margin: 10px;">
                        <h4 style="margin-left: 10px;">  Your Personal Information<br></h4><br>
                       
                        </div>


                        <div class="row">
                             <div class="col-sm-12">
                           <div class="form-group" >

                                <select class="form-control2" name="title"  id="title" value='<?php echo htmlentities($title) ?>'>
                                    <option selected value="Title">Title</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Dr.">Dr.</option>

                                </select>

                               
                            
                        </div>
                        </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-group" >
                                    <input type="text" class="form-control2" id="fname" placeholder="First Name" value='<?php echo htmlentities($fname) ?>' name="fname" required="">
                                </div>
                            </div>
                            <br> 
                             <div class="col-md-12">
                                <div class="form-group" >
                                    <input type="text" class="form-control2" id="familyname" placeholder=" Family Name " value='<?php echo htmlentities($familyname) ?>' name="familyname">
                                </div>
                            </div>
                            <br>
                             <div class="col-md-12">
                                <div class="form-group">
                                   </div>
                            </div>
                            <br>
                             <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control2" id="address" placeholder="Address" value='<?php echo htmlentities($address) ?>' name="address">
                              
                                   </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                         <select class="form-control2" name="country" id="country" value='<?php echo htmlentities($country) ?>'>
                                    <option value="" selected="selected">--Select Country--</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>

                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>

                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>

                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>

                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>

                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>

                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>

                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                   </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control2" id="email" placeholder=" Email Address" value='<?php echo htmlentities($email) ?>' name="email" required="">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control2" id="tele" placeholder="Telephone(Residence)" value='<?php echo htmlentities($tele) ?>' name="tele">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control2" id="fax" placeholder="Fax Number" value='<?php echo htmlentities($fax) ?>' name="fax">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control2" id="mobile" placeholder="Mobile Phone" value='<?php echo htmlentities($mobile) ?>' name="mobile">
                                </div>
                            </div>
                            <br>


<div class="col-md-12">
                            <h4>  Please select the number of Travelers: *<br></h4><br>
</div>
                            <div class="col-md-12">
                                <select class="form-control2" name="adult" id="adult" value='<?php echo htmlentities($adult) ?>' required="">
                                    <option selected value="No of Adults ">No of Adults </option>
                                    <option  value="0">0</option>
                                    <option  value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select><p class="plan">(above 12 years)</p> 

                            </div>


                            <div class="col-md-12">
                                <select class="form-control2" name="child" id="child" value='<?php echo htmlentities($child) ?>' required="">
                                    <option selected value="No of Children">No of Children</option>
                                    <option  value="0">0</option>
                                    <option  value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select><p class="plan">(2 to 12 years) </p>

                            </div>

                            <div class="col-md-12">
                                <select class="form-control2" name="infant" id="infant" value='<?php echo htmlentities($infant) ?>' required="">
                                    <option selected value=" No of Infants"> No of Infants</option>
                                    <option  value="0">0</option>
                                    <option  value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select><p class="plan">(below 2 years) </p>
                            </div> 

                        

                        
<div class="col-md-12">
                            <h4 > Flight Details : *<br></h4><br>
</div>
                            <div class="col-md-12">
                                <div class="form-group" >
                                    <input type="text" class="form-control2" id="flightno" placeholder=" Flight Number" value='<?php echo htmlentities($flightno) ?>' name="flightno">
                                </div>
                            </div>
                            <br>    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control2" id="flighttime" placeholder=" Flight Time" value='<?php echo htmlentities($flighttime) ?>' name="flighttime">
                                </div><br>                            
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control2" id="baggage" placeholder="No of Baggage" value='' name="baggage">
                                </div><br>                            
                            </div>  
                            <div class="col-md-12">
                                <div class="err_captcha2" style="color: red;font-size: 16px;">

                                </div><br>                            
                            </div>  
                      

                    
                        
                            <div class="col-md-12">
                                <textarea class="form-control2" placeholder="Enter Inquire" rows="6" value='<?php echo htmlentities($inquire) ?>' name="inquire" id="inquire"></textarea>
                            </div> 

                       

                        

                            <div class="col-md-12">
                                <div class="form-group">
                                    <p>
                                        <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
                                        <label for='message'>Enter the code above here :</label><br>
                                        <input id="6_letters_code" name="6_letters_code" type="text" class="form-control2"><br>
                                        <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
                                    </p>
                                </div><br>                            
                            </div>  
                   

                    </div>                  



                    <div class="row" style="margin-left: 10px; margin-right: 10px;">
                        <div class="col-md-12">
                            <div class="form-group chkbx">
                                <p> <input type="checkbox" id="toggle" checked />
                                    &nbsp;By continuing, you agree to the <a href="" style="color: #01b7f2; text-decoration: none;" data-toggle="modal" data-target="#myModal10">Terms and Conditions.</a></p>
                            </div>  
                        </div>  
                        <!-- Modal -->
                        <div class="modal fade" id="myModal10" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header"  style="background: #d3eff8;">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title" style="text-transform: uppercase; "> Airport Pickup Terms and Conditions</h3>
                                    </div>
                                    <div class="modal-body">



                                        <p class="aboutsl"> Mileage will be calculated from Airport to Airport basis.<br>
                                            Fuel and driver charges are included in the rates.<br>
                                            Parking charges, Paging and Highway charges are not included in the rate<br>
                                            Well experienced qualified driver service will be provided<br>
                                            All vehicles are fully insured with a passenger cover.<br>
                                            Time of transfer to the destination depend on the road condition and traffic on the route<br>
                                            Tentative bookings and quotations are valid only for 24 hours and all bookings will be confirmed after receiving payment<br>
                                            Cancelation and refunds are approved on management decision<br>
                                            In case of breakdown substitute vehicle with same condition will be provided.<br>
                                            For overnight stays, accommodation charge of US$ 10 per night applicable if driver quarters not available</p>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <script type="text/javascript">
                            $(window).load(function () {
                                $('#myModal10').modal('show');
                            });
                        </script>       
                    </div>

                    <div class="row" style="margin-left: 10px; margin-right: 10px;">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning" style="  color:#FFF; border:0;" name="submit" id="submit">Submit</button>

                                </div> 
                            </div> 
                        </div> 
                    </div>  
                    <br>                  
                    
                    
            </div>
           
     
                </div>
              
                 
          
                      
     <div class="col-sm-12" >
               
                 <div class="row" style=" background-color: #FFF;  margin-left: 0; padding: 20px;">
                     <h4 class="tourh4">Booking Details</h4>
                     <div class="row">
                     <div class="col-sm-4">
                        <img src="http://www.ayubowantours.lk/photos/<?php echo $row['img1'];  ?> " width="100" class="img-responsive"/></div>
                     <div class="col-sm-8">
        
                       <!--  <p>  <?php //echo $row['id'];  ?> 
                            <p>  <?php //echo strtoupper($row['model']);  ?> -->
                            <p>  <?php echo strtoupper($row['carname']);  ?> <br>
                       
                             <span style="text-align: left; font-size: 12px;">
                                 Ref No:  <?php echo strtoupper($row['refno']);  ?> </span></p>
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
                             <p style="color:#01b7f2;"> Pick Up<br>
                                 
                                   
                    
            
                                 <span style="font-size: 12px; color:#515657;">
<!--                                        <?php //echo $_POST['pickoff1']; ?><br>-->
                                    <?php echo htmlentities($_POST['dropoff']) ?>
                                
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
                        
 if(isset($row['disdrop']) && ( $row['disdrop'] != '0'))
 {
     echo "<strike>".$row1[$row['model']]."</strike>";
     echo " - ".$row['disdrop']."%";
     echo "<br/>Rs ".($row1[$row['model']] - (($row1[$row['model']])*($row['disdrop']/100)));
 }
 else
 {
      echo $row1[$row['model']] ;
 }
                        
                        ?> LKR</span></h4>
                   
                    </div>  </div> 
                     
                 </div>
         
         
         
         
         
         
                     <br>
                     <div class="row" style=" background-color: #FFF; margin-left: 0; padding: 20px;">
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
                   
           
       
 </form>         
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
    });
});  
 </script> 
    
 
 <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("telephone","req","Please provide your Telephone"); 
frmvalidator.addValidation("email","email","Please enter a valid email address");
</script>

<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
			