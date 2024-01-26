<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$allItems = '';

$alert = '';

if(isset($_POST['submit'])){
	$email = $_POST['email'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'techanalyst41@gmail.com';
        $mail->Password = '0706870680';
        $mail->Username = 'techanalyst41@gmail.com';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('techanalyst41@gmail.com');
        $mail->addAddress($email = $_POST['email']);

        $mail->isHTML(true);
        $mail->isSMTP(true);
        $mail->Subject = 'Welcome to Distinctive Voices LLC';
        $mail->Body = "<html>
        <head>
            <title>HTML email</title>
        </head>

        <body>
            <h7>Hi,</h7>
            <p>Thank you for you for checking out. <br> Distinctive voices is under development, once it is ready we shall let you know. <br> Keep it here.</p>

           <!-- <h3 style= 'color:#f40;'>ADDITIONAL DETAILS</h3>-->
            <p>Cheers!</p>
            <p>Development Team</p>
        </body>
    </html>";
        $mail->send();
        $alert = '<div class="alert-success">
                    <span>Message Sent! Thank you for contacting us.</span>
                  </div>';
    } catch(Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                  </div>';
    }
}





















?>
