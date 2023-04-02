<?php

// echo "<pre>";

// var_dump($_GET);
// echo "</pre>";

// Es importante validar si get no esta vacio
$nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "Sin nombre";
$edad = $_GET["edad"] ?? "Sin edad";

echo "El usuario $nombre tiene $edad años";
