<?php

include "/Xampp/htdocs/El-Comerciante/controller/include/connection.php";
require "/Xampp/htdocs/El-Comerciante/model/envase.php";
require "/Xampp/htdocs/El-Comerciante/model/producto.php";
require "/Xampp/htdocs/El-Comerciante/model/helado.php";


    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];  
    $capacidad = $_GET['capacidad'];
    $descripcion = $_GET['descripcion'];

    $valor = $_GET['valor'];
    if($valor == "agregarEnvase"){
        $envase = new envase(conectar());
        $envase->newEnvase($nombre,$descripcion,$capacidad,$precio);
         header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");
    }
    else if ($valor == "agregarProducto"){
        $producto = new producto(conectar());
        $producto->newProducto($nombre,$descripcion,$precio);
        header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");

    }
    else if ($valor == "agregarSaborHelado"){
        $helado = new helado(conectar());
        $helado->newHelado($nombre,$descripcion);
    }
    else if ($valor = "agregarCombo"){

    }
?>