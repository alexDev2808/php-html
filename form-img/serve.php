<?php

echo "<pre>";

var_dump($_FILES);

echo "</pre>";

$basename = $_FILES["imagen"]["name"];
$image = $_FILES["imagen"]["tmp_name"];
$ruta_a_subir = "images/$basename";

$tipo_archivo = $_FILES["image"]["type"];
$error_de_carga = $_FILES["image"]["error"];
$partes_archivo = explode(".",$basename);
$extension_archivo=strtolower(end($partes_archivo));
$extensiones_permitidas=["jpg","png","svg","ico"];
/*
echo "<pre>";
var_dump($_FILES);
var_dump($extension_archivo);
echo "</pre>";
*/

//Validamos si hubo algun error al cargar el archivo
if ($error_de_carga == UPLOAD_ERR_OK)
{
    //Validamos que sea un tipo de archivo permitido
    if (in_array($extension_archivo,$extensiones_permitidas))
    {
        //Copiamos la imagen a la carpeta del servidor
        if (move_uploaded_file($image, $ruta_a_subir)){
            $mensaje = "Imagen subida correctamente";
        }else{
            $mensaje= "Huston tuvimos un problema - Verifica que tengas permisos para manipular el servidor ";
        }
    }else{
        $mensaje = "Huston tuvimos un problema - Extensión no valida <br>
                    Extensiones validas (".implode(',', $extensiones_permitidas).")";
    }
}else{
    $mensaje="¡Ups! algo salio mal - $error_de_carga";
}

echo "\n";
echo $mensaje;