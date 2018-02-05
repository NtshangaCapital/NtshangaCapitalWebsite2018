<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/vendor/phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/vendor/PHPmailer/phpmailer/src/SMTP.php';
require 'phpmailer/vendor/autoload.php';

//$mailto =$_POST['mail_to'];
//$mailSub =$_POST['mail_Subject'];
//$mailMsg =$_POST['mail_Message'];


//require 'class.phpmailer.php';
//require 'PHPMailerAutoload.php';
//require 'PHPMailer-master/PHPMailer-master/composer.json';

//$mail = new PHPMailer(true);
//$mail ->IsSmtp();
//$mail ->SMTPDebug =0;
//$mail ->SMTPAuth = true;
//$mail ->SMTPSecure='ssl';
//$mail ->Host ="smtp.gmail.com";
//$mail ->Port= 465 ;//0r 587
//$mail ->IsHTML(true);
//$mail ->Username ="sethucarter@gmail.com";
//$mail ->Password ="SethuCarter12345";
//$mail ->SetFrom("sethucarter@gmail.com");
//$mail ->Subject=$mailSub;
//$mail ->Body =$mailMsg;
//$mail ->AddAddress($mailto);




//if($mail->send())
//{
 //   echo "Mail Sent";
//}
//else{
///    echo "Mail Not Sent";
//}
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
//require 'vendor/autoload.php';

$mail = new PHPMailer(true);                    // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPOptions = array(
     //   'ssl' => array(
     //       'verify_peer' => false,
     //       'verify_peer_name' => false,
      //      'allow_self_signed' => true
     //   )
  //  );
    $mail->SMTPDebug = 4;                                  // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->Host = 'ssl://smtp.gmail.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sethucarter@gmail.com';                 // SMTP username
    $mail->Password = 'SiphosethuLokwe@12345';                // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients

  $mailto =$_POST['mail_to'];
   $mailSub =$_POST['mail_Subject'];
   $mailMsg =$_POST['mail_Message'];
   $mail ->SetFrom("sethucarter@gmail.com","SethuCarter",0);
   $mail ->AddAddress($mailto);


    //$mail->setFrom('from@example.com', 'Mailer');
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);  

    $mail ->Subject=$mailSub;
    $mail ->Body =$mailMsg;                                // Set email format to HTML
    //$mail->Subject = 'Here is the subject';
    //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>