<?php

$nombre = "Jesus Alexis";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>

    <!-- Esta es una forma mas limpia y legible de escribrir HTML con PHP -->
    
    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i>" ?>

    <!-- Imprimir variables de PHP en HTML -->
    <h1>Hola <?= $nombre ?>!</h1>


</body>
</html>