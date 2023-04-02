<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="server.php" method="get">
        <label for="name">Escribe tu nombre:</label>
        <input type="text" name="nombre" id="name">

        <label for="age">Escribe tu edad:</label>
        <input type="number" name="edad" id="age">

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>