<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

function sentmail($a , $conten, $title)
{
    // $a = 'doquanglinhdev@gmail.com';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // gửi mail SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'doquanglinhdev@gmail.com'; // SMTP username
        $mail->Password = 'gdsthinxwkfsbfak'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->setFrom('doquanglinhdev@gmail.com', 'UtralPhone');

        $mail->addAddress($a); // Name is optional
        // Content
        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = $title;
        $mail->Body = $conten;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        if(!$mail->Send()) {
            return 0;
        } else {
            return 1;
        }
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
