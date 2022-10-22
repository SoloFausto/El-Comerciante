<?php
include "/Xampp/htdocs/El-Comerciante/controller/include/connection.php";
require "/Xampp/htdocs/El-Comerciante/model/comanda.php";
     if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $delete = $_GET['delete'];
        $info = $_POST['info'];
        $deleteComanda = new comanda(conectar());
        $deleteComanda->cargarComandaPorNumero($delete);
        $deleteComanda->deleteComanda();
   }
     else if ($_SERVER["REQUEST_METHOD"] == "POST"){
          
     }