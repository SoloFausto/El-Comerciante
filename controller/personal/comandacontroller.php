<?php
include "../include/connection.php";
require "../El-Comerciante/model/comanda.php";
     class comandaController{
          public static function hidrateComanda(){
               $comanda = new comanda(conectar());
               
          }
}