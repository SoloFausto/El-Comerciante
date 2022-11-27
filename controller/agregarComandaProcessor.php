<?php
include "connection.php";
include "../model/productoComanda.php";
include "../model/comandaEnvaseHelado.php";
$valor = $_GET["valor"];
$idComanda = $_GET["idComanda"];
$producto = $_GET ["producto"];
$combo = $_GET["combo"];
$idEnvase = $_GET['idEnvase'];
$numeroSabores = $_GET['numeroSabores'];

if ($valor == "agregarProducto"){
    $productoComanda = new productoComanda(conectar());
    $productoComanda->newidProductoIdComanda($producto,$idComanda,1);
    header("Location: $_SERVER[HTTP_REFERER]");
}
else if ($valor == "eliminarProducto"){
    $productoComanda = new productoComanda(conectar());

    productoComanda::deleteProductoComanda($producto,$idComanda,conectar());
    echo'';
    header("Location: $_SERVER[HTTP_REFERER]");
}
else if ($valor == "agregarHelado"){

    $i = 0;
    $saboresPedidos = array();
    while ($i<=$numeroSabores){
        $saborActual = $_GET["sabor$i"];

        if(isset($saborActual)){

            comandaEnvaseHelado::newComandaEnvaseHelado($idEnvase,$saborActual,$idComanda,0,conectar());
        }
        $i++;
    }
    header("Location: ../view/agregarcomanda.php?id=$idcomanda");
}

?>