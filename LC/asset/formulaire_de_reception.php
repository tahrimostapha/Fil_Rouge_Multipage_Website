<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'BeCodefactice001@outlook.fr';                 // SMTP username
    $mail->Password = 'GoVegan123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('BeCodefactice001@outlook.fr', 'XVX');
    //Set an alternative reply-to address
    $mail->addAddress('2016.carlier.liam@gmail.com', 'Liam');     // Add a recipient
    $Body = "<p><strong> Wesh</strong> c'est mon premiermail php <p>";
  
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "C'est un email test";
    $mail->msgHTML(file_get_contents('contents.html'), __DIR__);

    $mail->Body    = $Body;
    $mail->AltBody = 'This is a plain-text message body';
    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}