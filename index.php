<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'templates/welcome.php';
require 'config.php';
//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions


try {

    //Server settings
     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = $mail_config->smtpHost; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 465; // TLS only
    $mail->SMTPSecure = 'tls'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->Username = $mail_config->smtpUser;
    $mail->Password = $mail_config->smtpPass;
    //Recipients
    $mail->setFrom($mail_config->senderEmail,$mail_config->senderName);
    $mail->addAddress($mail_config->recipientEmail);
    $mail->addReplyTo($mail_config->replyTo , 'Support');

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mail_config->subject ;


    $message = sendTemplateString($mail_config->recipientName );
    
    $mail->msgHTML($message); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}