<?php 

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

require("vendor/autoload.php");

function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuracion inicial de nuestro servidor de correos

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '1b8153b5a608ce';
    $phpmailer->Password = 'e954652c92fa07';

    // Integrando destinatarios
    $phpmailer->setFrom('contact@proton.me', 'Mi empresa');
    $phpmailer->addAddress($email, $name); 


    // Definiendo el cuerpo del mail
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar correo
    $phpmailer->send();

}

?>