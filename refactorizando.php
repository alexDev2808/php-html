<?php

// Separar logica con la impresion de resultados en HTML

$tabla_del_8 = [];

for($i = 1; $i <= 10; $i++) {
    $resultado = 8 * $i;
    $texto = "8 X $i = $resultado";
    array_push($tabla_del_8, $texto);
}

// Depurar
// echo "<pre>";
// print_r($tabla_del_8);
// echo "</pre>";

// die();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla del 8</h1>

    <ul>
        <?php foreach($tabla_del_8 as $resultado): ?>
            <li><?= $resultado ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>