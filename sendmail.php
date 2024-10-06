<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['send'])) {
    $sender = $_POST['sender'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'rb.dagohoy@mcragriventure.com';                     //SMTP username
        $mail->Password = 'vtpktxksfnoetufe';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($sender);
        $mail->addAddress('rb.dagohoy@mcragriventure.com', 'MCR Admin');
        $mail->addReplyTo($sender);


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject . " from " . $name . " " . "<" . $sender . ">";
        $mail->Body = $content;

        $mail->send();
        ?>
        <script>
            alert("Your Message has been sent.");
            window.location.href = "contact";
        </script>
        <?php
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}