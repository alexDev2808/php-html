<?php

$usuarios = array(

    array(
        "id" => 0,
        "username" => "Alexis"
    ),
    array(
        "id" => 1,
        "username" => "Martha"
    ),
    array(
        "id" => 2,
        "username" => "Fernanda"
    ),

);

$edad_alexis = 22;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JS</title>
</head>
<body>

    <script>
// Todo lo que este dentro de las etiquetas de PHP se trata como tal
// Se pasa un un array de PHP a JS
        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        console.log(users);

        const edadAlexis = <?= $edad_alexis ?>;
        console.log(edadAlexis);

    </script>
    
</body>
</html>