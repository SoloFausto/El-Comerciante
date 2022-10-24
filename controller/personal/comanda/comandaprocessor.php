<?php
include "/Xampp/htdocs/El-Comerciante/controller/include/connection.php";
require "/Xampp/htdocs/El-Comerciante/model/comanda.php";
     if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $delete = $_GET['delete'];
        $info = $_POST['info'];
        if ($delete != ""){
          $deleteComanda = new comanda(conectar());
          $deleteComanda->cargarComandaPorNumero($delete);
          $deleteComanda->deleteComanda();
          header('Location: ../../../../El-comerciante/view\dolcezzainterfaces\personal\comandas\comanda.php');     }
        else if ($info != ""){

        }

   }
     else if ($_SERVER["REQUEST_METHOD"] == "POST"){
          
     }