<?php
session_start();


    $title = $_POST['title'];
    $fname = $_POST['fname'];
    $familyname = $_POST['familyname'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $fax = $_POST['fax'];
    $mobile = $_POST['mobile'];

    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $infant = $_POST['infant'];
    $flightno = $_POST['flightno'];
    $flighttime = $_POST['flighttime'];
    $baggage = $_POST['baggage'];
    $inquire = $_POST['inquire'];


    $carname = $_POST['carname'];
    $refno = $_POST['refno'];
    $pickoff1 = $_POST['pickoff'];
    $dateon = $_POST['dateon'];
    $ontime = $_POST['ontime'];
    $model = $_POST['model'];



    ///------------hidden variables-------------
    $car1 = $_POST['car1'];
    $pickup1 = $_POST['pickup'];

    $randd=rand(1,1000);


require_once 'dompdf-master/autoload.inc.php';
    require_once 'phpmailer/PHPMailerAutoload.php';
    
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$price=$model;
$html ='
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <div class="container-edit">
            
            <div class="row">
             <table  align="center">
    <tr>
        <td colspan="2" style="text-align:center;">
            <img src="img/cab-logo-final.png">
        </td>
    </tr>
   <tr>
        <td colspan="2">
            <p style="text-align: center;">
                        No 15, <br>
                        Ranamoto shopping complex,<br>
     Colombo Road, Negombo, Sri Lanka
                    </p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p style="text-align: center;font-size: 22px;">
                        Transport Invoice
                    </p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p style="font-weight: 900;font-size: 12px;">
                        Date: '.date("Y-m-d").'
                    </p>
        </td>
    </tr>
    <tr>
        <td>Discription</td>
        <td>Amount</td>
    </tr>
    <tr>
        <td> '.$pickup1.' to '.$pickoff1.'<br> by '.$carname.'</td>
        <td><p>Rs.'.$price.'</p></td>
    </tr>
    <tr>
        <td>Total</td>
        <td><p style="font-size:18px;font-weight: 900;">Rs.'.$price.'</p></td>
    </tr>
</table>
            </div>
            
        </div>
    </body>
</html>';



$pdfname="invoice_".$fname."_".$randd;
 $dompdf->load_html($html);    
$dompdf->render();
$pdf = $dompdf->output();
$file_location = $_SERVER['DOCUMENT_ROOT']."/pdfupload/".$pdfname.".pdf";
file_put_contents($file_location,$pdf); 



$your_email = 'kawdogroup@gmail.com, asantha@ayubowantours.com, mahinda@ayubowantours.com, info@ayubowantours.com'; // <<=== update to your email address
//$your_email = 'ruchinigunasekara2@gmail.com'; // <<=== update to your email address



$errors = '';

//$title = '';
//$fname = '';
//$familyname = '';
//$address = '';
//$country = '';
//$email = '';
//$tele = '';
//$fax = '';
//$mobile = '';
//$adult = '';
//$child = '';
//$infant = '';
//$flightno = '';
//$flighttime = '';
//$inquire = '';
//
//$car1 = '';
//$carname = '';
//$refno = '';
//$pickup = '';
//$pickoff = '';
//$dateon = '';
//$ontime = '';
//$model = '';
//


    ///------------Do Validations-------------



    if (IsInjected($email)) {
        $errors .= "\n Bad email value!";
    }
    if (empty($_SESSION['6_letters_code']) ||
            strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0) {
        //Note: the captcha code is compared case insensitively.
        //if you want case sensitive match, update the check above to
        // strcmp()
        $errors .= "\n The captcha code does not match!";
    }

    if (empty($errors)) {
        //send the email
        $to = $your_email;
        $to1 = $email;
        $subject = "Airport Pickup - Inquire from srilankacars.lk " . date("Y-m-d h:i:sa");
        $subject1 = "Airport Pickup -  Thank You For Your Inquiry  " . date("Y-m-d h:i:sa");
        $from = $email;
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

        $message1 = "<html>
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
                    <td>" . $title . "</td> 

                  </tr>
                  <tr>
                    <th>First Name</th>
                    <td>" . $fname . "</td> 

                  </tr>
                  <tr>
                    <th>Family Name</th>
                    <td>" . $familyname . "</td> 

                  </tr>
                    <tr>
                    <th>Address</th>
                    <td>" . $address . "</td> 

                  </tr>
                  <tr>
                    <th>Country</th>
                    <td>" . $country . "</td> 

                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>" . $email . "</td> 

                  </tr>                
                  <tr>
                    <th>Telephone</th>
                    <td>" . $tele . "</td> 

                  </tr>
                 <tr>
                    <th>Fax</th>
                    <td>" . $fax . "</td> 

                  </tr>
                  
                  <tr>
                    <th>Mobile</th>
                    <td>" . $mobile . "</td> 

                  </tr>
                  
                  
                    <tr>
                    <th>Adult</th>
                    <td>" . $adult . "</td> 

                  </tr>
                  <tr>
                    <th>Child</th>
                    <td>" . $child . "</td> 

                  </tr>
                  <tr>
                    <th>Infant</th>
                    <td>" . $infant . "</td> 

                  </tr>
                  <tr>
                    <th>Flight No</th>
                    <td>" . $flightno . "</td> 

                  </tr>
                   <tr>
                    <th>Flight Time</th>
                    <td>" . $flighttime . "</td> 

                  </tr>
                   <tr>
                    <th>No of Baggage</th>
                    <td>" . $baggage . "</td> 

                  </tr>
                  
                  <tr>
                    <th>Inquire</th>
                    <td>" . $inquire . "</td> 

                  </tr>
                  <tr>
                    <th>Car Id</th>
                    <td>" . $car1 . "</td> 

                  </tr>
                  <tr>
                    <th>Car Name</th>
                    <td>" . $carname . "</td> 

                  </tr>
                  <tr>
                    <th>Ref No</th>
                    <td>" . $refno . "</td> 

                  </tr>
                  <tr>
                    <th>Pick Up</th>
                    <td>" .$pickup1. "</td> 

                  </tr>
                  <tr>
                    <th>Pick Off </th>
                    <td>" . $pickoff1 . "</td> 

                  </tr>
                   <tr>
                    <th>Date On </th>
                    <td>" . $dateon . "</td> 

                  </tr>
                  <tr>
                    <th>Ontime </th>
                    <td>" . $ontime . "</td> 

                  </tr>
                  <tr>
                    <th>Total Price Rs </th>
                    <td>" . $model . "</td> 

                  </tr>
               
                </table>
               
                </div> 

                </body>
                </head>
                </html>";

        
   
    $filename1 = $pdfname.'.pdf';
    
    $file1 = "http://www.srilankacars.lk/pdfupload/".$pdfname.".pdf";   
    
    $file11 = 'pdfupload/'.$pdfname.'.pdf';  

    $content1 = file_get_contents($file1);
    $content1 = chunk_split(base64_encode($content1));

    // a random hash will be necessary to send mixed content
    $separator1 = md5(time());

    // carriage return type (RFC)
    $eol1 = "\r\n";

    // main header (multipart mandatory)
//    $headers = "From: nobody@srilankacars.lk" . $eol1;
//    $headers .= "Reply-To: $email \r\n";
//    $headers .= "MIME-Version: 1.0" . $eol1;
//    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator1 . "\"" . $eol1;
//    $headers .= "Content-Transfer-Encoding: 7bit" . $eol1;
//    $headers .= "This is a MIME encoded message." . $eol1;

    // message
//    $body = "--" . $separator1 . $eol1;
//    $body .= "Content-type:text/html;charset=UTF-8" . $eol1;
//    $body .= "Content-Transfer-Encoding: 8bit" . $eol1;
//    $body .= $message1 . $eol1;

    // attachment
//    $body .= "--" . $separator1 . $eol1;
//    $body .= "Content-Type: application/octet-stream; name=\"" . $filename1 . "\"" . $eol1;
//    $body .= "Content-Transfer-Encoding: base64" . $eol1;
//    $body .= "Content-Disposition: attachment" . $eol1;
//    $body .= $content1 . $eol1;
//    $body .= "--" . $separator1 . "--";
        
        ///////////////////////////////////////////////////////////
    
    
    //  updated by Nimasha Dil    2017-07-17  . using PHPMailer non php mail thotel.  

    //$email = $_POST['email'];
   // $uuid = $_POST['uuid'];
   // $file_content = file_get_contents(BASE_PATH.'email.php?uuid='.$uuid);
    //$pdf_content = file_get_contents(BASE_PATH.'pdfemail.php?uuid='.$uuid);
    $mail = new PHPMailer;
    $mail->From = 'nobody@srilankacars.lk';
    $mail->FromName = 'srilankacars.lk';
    $mail->addAddress( 'kawdogroup@gmail.com' );      
    $mail->AddCC('asantha@ayubowantours.com', 'Asantha');
    $mail->AddCC('mahinda@ayubowantours.com', 'Mahinda');
    $mail->AddCC('susara@sltnet.lk', 'susara');
    $mail->AddCC($email, $fname);
// Name is optional
    $mail->addReplyTo('asantha@ayubowantours.com', 'asantha');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject ;
    $mail->Body    =  $message1  ;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->AddAttachment($file11 , $filename1);
   // 
 //$mail->AddAttachment('pdfupload/invoice_dsad_720.pdf' , 'invoice_dsad_720.pdf');
    //////////////////////////////////////////////
       

        
    if($mail->send()){

            echo 'ok';
    }else{
        echo 'notSent';
    }
     
    ////////////////////////////////////////////////////////
    
//    $filename =$pdfname.".pdf";
//    
//    $file = "http://www.srilankacars.lk/pdfupload/".$pdfname.".pdf";   
//    
//    $message = 'Dear '.$title.' '. ucfirst($fname).',<br><br>Thank You.';
//
//    $content = file_get_contents($file);
//    $content = chunk_split(base64_encode($content));
//
//    // a random hash will be necessary to send mixed content
//    $separator = md5(time());
//
//    // carriage return type (RFC)
//    $eol = "\r\n";

    // main header (multipart mandatory)
//    $headers1 = "From: nobody@srilankacars.lk" . $eol;
//    $headers1 .= "Reply-To: info@ayubowantours.com \r\n";
//    $headers1 .= "MIME-Version: 1.0" . $eol;
//    $headers1 .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
//    $headers1 .= "Content-Transfer-Encoding: 7bit" . $eol;
//    $headers1 .= "This is a MIME encoded message." . $eol;

    // message
//    $body1 = "--" . $separator . $eol;
//    $body1 .= "Content-type:text/html;charset=UTF-8" . $eol;
//    $body1 .= "Content-Transfer-Encoding: 8bit" . $eol;
//    $body1 .= $message . $eol;
//
//    // attachment
//    $body1 .= "--" . $separator . $eol;
//    $body1 .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
//    $body1 .= "Content-Transfer-Encoding: base64" . $eol;
//    $body1 .= "Content-Disposition: attachment" . $eol;
//    $body1 .= $content . $eol;
//    $body1 .= "--" . $separator . "--";

    //SEND Mail
//    if (mail($to1, $subject1, $body1, $headers1)) {
//       
//    } else {
//       
//    } 
//    
    
    
    
    //////////////////////////////////////////////////////////////////
        }else{
            echo $errors;
        }
        


// Function to validate against any email injection attempts
function IsInjected($str) {
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
    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}

