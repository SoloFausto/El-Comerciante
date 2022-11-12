<?php
include "../../../../controller/include/connection.php";
require "../../../../model/comanda.php";
ob_start();
$deleteCombo = $_GET["deleteCombo"];
$deleteProducto = $_GET['deleteProducto'];
$deleteHelado = $_GET['deleteHelado'];
$deleteEnvase = $_GET['deleteEnvase'];

if(isset($deleteCombo)){
    $deleteComanda = new comanda(conectar());
    $deleteComanda->cargarComandaPorNumero($delete);
    $deleteComanda->deleteComanda();
    header('Location: ../../../../El-comerciante/view\dolcezzainterfaces\personal\comandas\comanda.php');  
  }
  else if(isset($deleteProducto)){
  }
  else if (isset($deleteEnvase)){

  }
  else if (isset($deleteHelado)){

  }