<?php
include "../controller/include/connection.php";
require "../model/comanda.php";
ob_start();
        $delete = $_GET['delete'];
        $info = $_GET['info'];
        $valor = $_GET['valor'];
        if(isset($delete)){
          $deleteComanda = new comanda(conectar());
          $deleteComanda->cargarComandaPorNumero($delete);
          $deleteComanda->deleteComanda();
          header('Location: ../view/comanda.php');  
          }
          else {
            header("Location:../view/agregarcomanda.php?id=$info");
          }
          
        