<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';


$mail = new PHPMailer(true);

try {
$mail->SMTPDebug = SMTP::DEBUG_OFF;
$mail->isSMTP();
$mail->Host         = 'smtp.gmail.com';
$mail->SMTPAuth     = true;
$mail->Username     = 'ivan.gallegos2515@gmail.com';
$mail->Password     = 'Luis.Benavides135';
$mail->SMTPSecure   = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port         = 465

$mail->setFrom(MAIL_USER, 'MP');
$mail->addAddress('civan.gallegos2515@gmail.com', 'MusicPro');

$mail->isHTML(true);
$mail->Subject = 'Detalles de su compra';

$cuerpo = "<h4>Gracias por su compra</h4>";
$cuerpo .= "<p>El ID de su compra es: <b>'.$id_transaccion.'</b></p>";

$mail->body = utf8_decode($cuerpo);
$mail->AltBody = 'Le enviaremos los detalles de su compra.';

$mail->setLanguaje('es', '../phpmailer/languaje/phpmailer.lang-es.php');

$mail->send();
}catch(exception $e){
    echo "No se pudo enviar el mensaje. Error de envio: {$mail->ErrorInfo}";
    //exit;
}
