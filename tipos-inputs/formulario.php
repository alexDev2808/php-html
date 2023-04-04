<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs</title>
</head>
<body>
    
    <form action="server.php" method="post" enctype="multipart/form-data">

    <!-- <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"> -->

    <!-- Arreglos -->
    <!-- <label for="personas">Personas:</label>
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">
    <input type="text" name="personas[]"> -->

    <!-- Arreglos asociativos -->
    <!-- <label for="personas">Nombre:</label>
    <input type="text" name="personas[nombre]">

    <label for="personas">Email:</label>
    <input type="email" name="personas[email]">

    <label for="personas">Edad:</label>
    <input type="number" name="personas[edad]"> -->

    <!-- Checkboxs -->

    <!-- <input type="checkbox" name="list1" value="PHP">
    <input type="checkbox" name="list2" value="JavaScript">
    <input type="checkbox" name="list3" value="Python"> -->

    <!-- Radios -->

    <!-- <label for="mexico">Mexico</label>
    <input type="radio" name="pais" value="MEXICO" id="mexico">
    
    <label for="colombia">Colombia</label>
    <input type="radio" name="pais" value="COLOMBIA" id="colombia">
    
    <label for="eua">EUA</label>
    <input type="radio" name="pais" value="EUA" id="eua"> -->


    <!-- Multiples archivos -->
    <label for="galery">Galeria > Carga tus imagenes: </label>
    <input type="file" name="galeria[]" multiple id="galery">

    <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>