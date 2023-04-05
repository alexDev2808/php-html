<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando datos</title>
</head>
<body>
    <form action="server.php" method="post">
        <!-- <label for="nombre">Nombre:</label>
        <input type="text" name="name" id="nombre">

        <label for="usuario">Username:</label>
        <input type="text" name="username" id="usuario"> -->

        <label for="correo">Email:</label>
        <input type="email" name="email" id="correo">
        
        <label for="edad">Edad:</label>
        <input type="text" name="age" id="edad">

        <label for="peso">Peso</label>
        <input type="text" name="peso" id="peso">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>