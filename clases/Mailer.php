<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer{

    function enviarEmail($email, $asunto, $cuerpo){
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';
    require '../phpmailer/src/Exception.php';
    }
}