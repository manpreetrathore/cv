<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "name@gmail.com";                 
$mail->Password = "super_secret_password";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];


$mail->isHTML(true);

$mail->Subject = $_POST['subject'];
$mail->Body = "
    <p>Name :". $_POST['name']."</p>
    <p>Subject :". $_POST['subject']."</p>
    <p>Email :". $_POST['email']."</p>
    <p>Message :". $_POST['message']."</p>

";
$mail->AltBody = "
<p>Name :". $_POST['name']."</p>
<p>Subject :". $_POST['subject']."</p>
<p>Email :". $_POST['email']."</p>
<p>Message :". $_POST['message']."</p>

";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}


?>