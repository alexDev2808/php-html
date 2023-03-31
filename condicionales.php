<?php

$esta_lloviendo = false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    
<!-- Esto no se debe de hacer -->

    <h2>Esto no se debe hacer</h2>
    <?php if($esta_lloviendo) {

        echo "<b>😱</b>";
    } else {
        echo "<b>🤫</b>";
    }

    ?>


<!-- Esto es aceptable -->

    <h2>Esto es mas aceptable</h2>

    <?php if($esta_lloviendo) { ?>

        <b>😱</b>

    <?php } else { ?>

        <b>🤫</b>

    <?php } ?>    


    <!-- Esto si es mejor -->
    <h1>Esto si deberias hacerlo!</h1>

    <?php if($esta_lloviendo): ?>
        <b>😱</b>
    <?php else: ?>
        <b>🤫</b>
    <?php endif; ?>


</body>
</html>