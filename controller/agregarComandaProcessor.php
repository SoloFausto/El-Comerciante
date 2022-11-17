<?php
include "connection.php";
include "../model/productoComanda.php";
$valor = $_GET["valor"];
$idComanda = $_GET["idComanda"];
$producto = $_GET ["producto"];
$combo = $_GET["combo"];

if ($valor == "agregarProducto"){
    $productoComanda = new productoComanda(conectar());
    $productoComanda->newidProductoIdComanda($producto,$idComanda,1);
    header("Location: $_SERVER[HTTP_REFERER]");
}
if ($valor == "eliminarProducto"){
    $productoComanda = new productoComanda(conectar());

    productoComanda::deleteProductoComanda($producto,$idComanda,conectar());
    echo'';
    header("Location: $_SERVER[HTTP_REFERER]");
}

?>