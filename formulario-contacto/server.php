<?php 

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

require("vendor/autoload.php");

function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuracion inicial de nuestro servidor de correos

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    // $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    // Ese puerto tiene seguridad
    $phpmailer->Port = 465;
    $phpmailer->Username = 'alexis.tenorio.hernandez@gmail.com';
    $phpmailer->Password = 'tvqtfxuxkjytfguz';

    // Integrando destinatarios
    $phpmailer->setFrom('contact@proton.me', 'Formularios Alexis');
    $phpmailer->addAddress($email, $name); 


    // Definiendo el cuerpo del mail
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar correo
    $phpmailer->send();

}

?>