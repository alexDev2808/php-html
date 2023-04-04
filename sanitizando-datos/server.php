<?php

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$html_entity = htmlentities($name);
$add_slashes = addslashes(($username));
$only_words = preg_replace("/\W/", "", $add_slashes);
$only_numbers = preg_replace("/\D/", "", $add_slashes);

//  	Elimina todos los caracteres menos letras, dígitos y !#$%&'*+-=?^_`{|}~@.[]. 
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email_filter = preg_replace("/\W/", "", $email);
$age_filter = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizados</title>
</head>
<body>
    <h1>Datos Sanitizados</h1>

    <p>Nombre: <?= $html_entity ?></p>
    <p>Usuario: <?= $add_slashes ?></p>
    <p>Usuario(sin signos): <?= $only_words ?></p>
    <p>Usuario(solo numeros): <?= $only_numbers ?></p>
    <p>Email: <?= $email_filter ?></p>
    <p>Edad: <?= $age_filter ?></p>
</body>
</html>