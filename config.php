<?php
$mail_config =  new stdClass();

$mail_config->smtpHost = "domainname.com"; //put your domain name here
$mail_config->smtpUser = "mail@domainname.com"; //put the mail user setup on your hosting service
$mail_config->smtpPass = "esting1234@"; //put the user's password
$mail_config->senderEmail = "mail@domainname.com"; //put the mail user setup on your hosting service
$mail_config->senderName = "www.domainname.com"; // put whatever, it should be the company representative sending the email E.g: HR Mr John Doe
$mail_config->replyTo = "mail@domainname.com"; //put the mail user setup on your hosting service
$mail_config->recipientEmail = "user@gmail.com"; //put recipient email here
$mail_config->recipientName = "Jane Doe"; //put recipient name here
$mail_config->subject = "Registration Successful"; //put email subject here
$mail_config->cc = null;
$mail_config->bcc = null;

?>