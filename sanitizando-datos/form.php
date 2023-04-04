<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos</title>
</head>
<body>
    <form action="server.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="name" id="nombre">

        <label for="usuario">Username:</label>
        <input type="text" name="username" id="usuario">

        <label for="correo">Email:</label>
        <input type="email" name="email" id="correo">

        <label for="edad">Edad:</label>
        <input type="number" name="age" id="edad">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>