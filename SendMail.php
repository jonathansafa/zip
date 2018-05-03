<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendors/autoload.php';

class SendMail {

    function smtpMail($toEmail, $toName, $subject, $msgBody) {
        global $error;
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'box6130.bluehost.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'support@zipcaptions.com';                 // SMTP username
            $mail->Password = 'Testing123!!';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            //Recipients
            $mail->setFrom('support@zipcaptions.com', '(zipcaptions.com)');
            $mail->addAddress($toEmail, $toName);     // Add a recipient
            $mail->addReplyTo('support@zipcaptions.com', '(zipcaptions.com)');
            //Contentm
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $msgBody;

            $mail->send();
            $error = 'Message has been sent';
        } catch (Exception $e) {
            global $error;
            $error = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    }

}
