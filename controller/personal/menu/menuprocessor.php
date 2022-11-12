<?php

include "/Xampp/htdocs/El-Comerciante/controller/include/connection.php";
require "/Xampp/htdocs/El-Comerciante/model/envase.php";
require "/Xampp/htdocs/El-Comerciante/model/producto.php";
require "/Xampp/htdocs/El-Comerciante/model/helado.php";
require "/Xampp/htdocs/El-Comerciante/model/combo.php";
require "/Xampp/htdocs/El-Comerciante/model/comboEnvase.php";
require "/Xampp/htdocs/El-Comerciante/model/comboProducto.php";
    $idModificar = $_GET['id'];
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];  
    $capacidad = $_GET['capacidad'];
    $descripcion = $_GET['descripcion'];
    $precioCombo = $_GET['precioCombo'];
    $precioComboNeto = $_GET['precioComboNeto'];
    $deleteEnvase = $_GET['deleteEnvase'];
    $deleteProducto = $_GET['deleteProducto'];
    $deleteHelado = $_GET['deleteHelado'];
    $deleteCombo = $_GET['deleteCombo'];
    $numberEnvase = $_GET['numberEnvase'];
    $numberProducto = $_GET['numberProducto'];
    echo "<h1>$deleteEnvase</h1>";

    $valor = $_GET['valor'];
    if($valor == "agregarEnvase"){
        $envase = new envase(conectar());
        $envase->newEnvase($nombre,$descripcion,$capacidad,$precio,NULL);
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
        header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");
    }
    else if ($valor == "agregarCombo"){
        $nuevoCombo = new combo(conectar());
        $nuevoCombo->newCombo($nombre,$descripcion,$precioCombo);
        $vincularComboEnvase = new comboEnvase(conectar());
        $vincularComboProducto = new comboProducto(conectar());
        $a = 0;
        $envasesPedidos = array();
        while ($a<=$numberEnvase){
            $envaseActual = $_GET["envase$a"];

            if(isset($envaseActual)){
                array_push($envasesPedidos,$envaseActual);
                $vincularComboEnvase->newidComboIdEnvase($envaseActual,$nuevoCombo->getId(),1);
            }
            $a++;
        }
        $b = 0;
        $productosPedidos = array();
        while ($b<=$numberProducto){
            $productoActual = $_GET["producto$b"];

            if(isset($productoActual)){
                array_push($productosPedidos,$productoActual);
                $vincularComboProducto->newidComboIdProducto($productoActual,$nuevoCombo->getId(),1);
            }
            $b++;
        }
        header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");

    }
    else if($deleteEnvase != ""){
        $envaseDelete = new envase(conectar());
        $envaseDelete->loadEnvaseById($deleteEnvase);
        $envaseDelete->eliminarEnvase();
       header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");
    }
    else if($deleteProducto != ""){
        $productoDelete = new producto(conectar());
        $productoDelete->loadProductoById($deleteProducto);
        $productoDelete->eliminarProducto();
        header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");
    }
    else if($deleteHelado != ""){
        $heladoDelete = new helado(conectar());
        $heladoDelete->loadHeladoById($deleteHelado);
        $heladoDelete->deleteHelado();
        header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");
    }
    else if($deleteCombo != ""){
        $comboDelete = new combo(conectar());
        $comboDelete->loadComboById($deleteCombo);
        $comboDelete->eliminarCombo();
       header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");
    }
    else if($valor == "modifyEnvase"){
        $envaseModificar = new envase(conectar());
        $envaseModificar->loadEnvaseById($idModificar);
        $envaseModificar->setCapacidad($capacidad);
        $envaseModificar->setPrecio($precio);
        $envaseModificar->setDescripcion($descripcion);
        $envaseModificar->setNombre($nombre);
         header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");
    }
    else if ($valor == "modifyProducto"){
        $productoModificar = new producto(conectar());
        $productoModificar->loadProductoById($idModificar);
        $productoModificar->setNombre($nombre);
        $productoModificar->setDescripcion($descripcion);
        $productoModificar->setPrecio($precio);
        header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");

    }
    else if ($valor == "modifyHelado"){
        $heladoModificar = new helado(conectar());
        $heladoModificar->loadHeladoById($idModificar);
        $heladoModificar->setNombre($nombre);
        $heladoModificar->setDescripcion($descripcion);
        header("Location:/El-comerciante/view/dolcezzainterfaces/personal/menu/menu.php");
    }
    else if ($valor == "modificarCombo"){

        $modCombo = new combo(conectar());
        $modCombo->loadComboById($idModificar);
        $vincularComboEnvase = new comboEnvase(conectar());
        $vincularComboProducto = new comboProducto(conectar());
        comboProducto::deleteComboProductoIdCombo(conectar(),$idModificar);
        comboEnvase::deleteComboEnvaseIdCombo(conectar(),$idModificar);
        $a = 0;
        $envasesPedidos = array();
        while ($a<=$numberEnvase){
            $envaseActual = $_GET["envase$a"];

            if(isset($envaseActual)){
                array_push($envasesPedidos,$envaseActual);
                $vincularComboEnvase->newidComboIdEnvase($envaseActual,$modCombo->getId(),1);
            }
            $a++;
        }
        $b = 0;
        $productosPedidos = array();
        while ($b<=$numberProducto){
            $productoActual = $_GET["producto$b"];

            if(isset($productoActual)){
                array_push($productosPedidos,$productoActual);
                $vincularComboProducto->newidComboIdProducto($productoActual,$modCombo->getId(),1);
            }
            $b++;
        }


    }
?>