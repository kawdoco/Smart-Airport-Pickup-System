<?php

require_once 'phpmailer/PHPMailerAutoload.php';
    //$email = $_POST['email'];
   // $uuid = $_POST['uuid'];
   // $file_content = file_get_contents(BASE_PATH.'email.php?uuid='.$uuid);
    //$pdf_content = file_get_contents(BASE_PATH.'pdfemail.php?uuid='.$uuid);
    $mail = new PHPMailer;
    $mail->From = 'nobody@srilankacars.lk';
    $mail->FromName = 'srilankacars.lk';
    $mail->addAddress( 'susara@sltnet.lk' );               // Name is optional
    $mail->addReplyTo(REPLY_EMAIL, 'asantha@ayubowantours.com');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'dsadasdasda';
    $mail->Body    =  'dsadasdasd dsadsadas' ;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->AddAttachment('pdfupload/invoice_dsad_720.pdf' , 'invoice_dsad_720.pdf');
    //////////////////////////////////////////////
       

        
    if($mail->send()){

            echo 'ok';
    }else{
        echo 'notSent';
    }
     
    
?>