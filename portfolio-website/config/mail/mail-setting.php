<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'Enter Your Email here';                 // Add your email address here
$mail->Password = 'Enter Your password';                           //add your password here
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('Enter Your Email here', 'no-reply');
$mail->addAddress($email);     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML


