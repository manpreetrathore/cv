<?php
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    }else{
        echo "Message Sent successfully";
    }
?>