<?php

// isset(false) si no esta definido el name en html
// empty valida si el dato esta vacio
// if( isset($_POST["nombre"]) && !empty($_POST["name"]) ){
//     echo "Hola!! " . $_POST["nombre"] . " !!";
// }else{
//     echo "No ingresaste nada!";
// }


if(isset($_POST["form"])) {
    echo "Todo el formulario fue mandado.";
} else{
    echo "No se mando el formulario";
}