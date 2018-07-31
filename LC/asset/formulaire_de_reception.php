<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->Username= "2016.carlier.liam@gmail.com";
$mail->Subject= "Bonjours";
$mail->Body="ça va?";
$mail->setFrom('2016.carlier.liam@gmail.com', 'Liam Carlier');
$mail->addAddress('2016.carlier.liam@gmail.com');

if($mail->send()){
    echo "Voilà, c'est envoyé";
}
    else {
    echo 'retry';
    }
?>

