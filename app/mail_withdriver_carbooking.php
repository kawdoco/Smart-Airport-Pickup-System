<?php

 $your_email ='info@ayubowantours.com';// <<=== update to your email address

session_start();
$errors = '';



	$title = $_POST['title'];
	$fname = $_POST['fname'];
        $familyname = $_POST['familyname'];
        $address = $_POST['address'];
        $country = $_POST['country'];
	$email = $_POST['email'];
	$tele = $_POST['tele'];
        $fax = $_POST['fax'];
        $mobile = $_POST['mobile'];
        
     //   $licenseno = $_POST['licenseno'];
      //  $licensexpdate = $_POST['licensexpdate'];
        
	 $nic = $_POST['nic'];
        $adult = $_POST['adult'];
        $child = $_POST['child'];
        $infant = $_POST['infant'];
       $flightno = $_POST['flightno'];
       $flighttime = $_POST['flighttime'];
        $place = $_POST['place'];
        $inquire = $_POST['inquire'];
        
       
        $carname = $_POST['carname'];
        $refno = $_POST['refno'];
        
         $returndate = $_POST['returndate'];
        $returntime = $_POST['returntime'];
        
        
   
       
    
            
          
        ///------------hidden variables-------------
                 $car1 = $_POST['car1'];
                 $picklocation = $_POST['picklocation'];
                 $pickdate = $_POST['pickdate'];
                 $picktime = $_POST['picktime'];
                 $numdays = $_POST['numdays'];
                    $total = $_POST['total'];
       
	///------------Do Validations-------------

        
      
	if(empty($fname)||empty($email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		
                $subject = "Car With Driver Booking - Inquire from srilankacars.lk " . date("Y-m-d h:i:sa");
		$from = $email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "<html>
                <head>
                <style>                    
                    th, td {text-align: left;
                    padding: 8px; background-color: #f0f0f0; }
                </style>
                <body>
                <div align='center'>
                <img src='http://www.srilankacars.lk/img/cab-logo-final.png'/>
                  </div>
                <div align='center'>                 
                  <table border='1'  style='width:40% ; border-collapse: collapse;'>                  
                  <tr>
                    <th>Title</th>
                    <td>".$title."</td> 

                  </tr>
                  <tr>
                    <th>First Name</th>
                    <td>".$fname."</td> 

                  </tr>
                  <tr>
                    <th>Family Name</th>
                    <td>".$familyname."</td> 

                  </tr>
                    <tr>
                    <th>Address</th>
                    <td>".$address."</td> 

                  </tr>
                  <tr>
                    <th>Country</th>
                    <td>".$country."</td> 

                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>".$email."</td> 

                  </tr>                
                  <tr>
                    <th>Telephone</th>
                    <td>".$tele."</td> 

                  </tr>
                 <tr>
                    <th>Fax</th>
                    <td>".$fax."</td> 

                  </tr>
                  
                
            
                 
                  <tr>
                    <th>Nic</th>
                    <td>".$nic."</td> 

                  </tr>
                    <tr>
                    <th>Adult</th>
                    <td>".$adult."</td> 

                  </tr>
                  <tr>
                    <th>Child</th>
                    <td>".$child."</td> 

                  </tr>
                  <tr>
                    <th>Infant</th>
                    <td>".$infant."</td> 

                  </tr>
                  <tr>
                    <th>Flight No</th>
                    <td>".$flightno."</td> 

                  </tr>
                   <tr>
                    <th>Flight Time</th>
                    <td>".$flighttime."</td> 

                  </tr>
                  <tr>
                    <th>Pickup Place</th>
                    <td>".$place."</td> 

                  </tr>
                  
                  <tr>
                    <th>Inquire</th>
                    <td>".$inquire."</td> 

                  </tr>
                  <tr>
                    <th>Car Id</th>
                    <td>".$car1."</td> 

                  </tr>
                  <tr>
                    <th>Car Name</th>
                    <td>".$carname."</td> 

                  </tr>
                  <tr>
                    <th>Ref No</th>
                    <td>".$refno."</td> 

                  </tr>
                 
                  <tr>
                    <th>Pick Up Location</th>
                    <td>".$picklocation."</td> 

                  </tr>
                  <tr>
                    <th>Pickup Date </th>
                    <td>".$pickdate."</td> 

                  </tr>
                   <tr>
                    <th>Pickup Time </th>
                    <td>".$picktime."</td> 

                  </tr>
                  <tr>
                    <th>Return Date </th>
                    <td>".$returndate."</td> 

                  </tr>
                  <tr>
                    <th>Return Time </th>
                    <td>".$returntime."</td> 

                  </tr>
                <tr>
                    <th>Number of Days </th>
                    <td>".$numdays."</td> 

                  </tr>
<tr>
                    <th>Total Price USD </th>
                    <td>".$total."</td> 

                  </tr>
                </table>
               
                </div>
                
                   
                

                </body>
                </head>
                </html>";
                
		
		$headers = "From: $email \r\n";
		$headers .= "Reply-To: $email \r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		 if(mail($to, $subject, $body, $headers)){

            echo 'ok';
    }else{
        echo 'notSent';
    }
    
        }else{
            echo $errors;
        }
  
// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
 
 


