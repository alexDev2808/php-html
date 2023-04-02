<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="serve.php" method="post" enctype="multipart/form-data">
        <label for="name">Escribe tu nombre:</label>
        <input type="text" name="nombre" id="name">

        <label for="image">Imagen:</label>
        <input type="file" name="imagen" id="image">

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>