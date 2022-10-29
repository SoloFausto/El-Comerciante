<?php
include "/Xampp/htdocs/El-Comerciante/controller/include/connection.php";
require "/Xampp/htdocs/El-Comerciante/model/comanda.php";

        $delete = $_GET['delete'];
        $info = $_GET['info'];
        $valor = $_GET['valor'];
        if(isset($delete)){
          $deleteComanda = new comanda(conectar());
          $deleteComanda->cargarComandaPorNumero($delete);
          $deleteComanda->deleteComanda();
          header('Location: ../../../../El-comerciante/view\dolcezzainterfaces\personal\comandas\comanda.php');  
          }
          else {
            header("Location:../../../../El-comerciante/view\dolcezzainterfaces\personal\comandas\agregarcomanda.php?id=$info");
          }
