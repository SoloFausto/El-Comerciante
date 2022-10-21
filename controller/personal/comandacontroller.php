<?php
include "../include/conection.php";
require "../../model/comanda.php";
require "../../model/comandaStatic.php";
     class comandaController{
          public static function returnComandaIndex(){ //Nos devuelve cuantas comandas pendientes tenemos
               $compenarr = comandaStatic::cargarComandaPendiente(conectar());
               $salida = count($compenarr);
               return $salida;

          }
          public static function hidrateComandaId($index){ //Nos devuelve la id de una comanda
               //pendiente cuando nosotros elegimos una de la lista con el valor index
               $compenarr = comandaStatic::cargarComandaPendiente(conectar()); // este metodo nos devuelve un array de comandas pendientes y 
               //lo ponemos en la variable
               $salida = $compenarr[$index]; // elegimos una comanda de el array 
               $id = $salida->getId(); // conseguimos el valor de la id con el getter de la comanda que elegimos 
               return $id; // devolvemos el valor
          }
          public static function hidrateComandaMesa($index){
               $compenarr = comandaStatic::cargarComandaPendiente(conectar());
               $salida = $compenarr[$index];
               $mesa = $salida->getMesa();
               if($mesa == 0){ // si la mesa que conseguimos es 0, entonces la respuesta es "Para llevar"
                    $respuesta = "Para llevar";
               }
               else{
                    $respuesta = $mesa;
               }
               return $respuesta;
          }
          public static function hidrateComandaTotal($index){
               $compenarr = comandaStatic::cargarComandaPendiente(conectar());
               $salida = $compenarr[$index];
               $total = $salida->getTotal();
               return $total;
          }
          public static function hidrateComandaFecha($index){
               $compenarr = comandaStatic::cargarComandaPendiente(conectar());
               $salida = $compenarr[$index];
               $fecha = $salida->getFecha();
               return $fecha;
          }
          public static function hidrateComandaFormaPago($index){
               $compenarr = comandaStatic::cargarComandaPendiente(conectar());
               $salida = $compenarr[$index];
               $fP = $salida->getForma_pago();
               return $fP;
          }
          public static function generateDeleteLink($index){
               $compenarr = comandaStatic::cargarComandaPendiente(conectar());
               $salida = $compenarr[$index];
               $id = $salida->getId();

          }
          
}
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          echo "ho";
          $delete = $_POST['delete'];
          $info = $_POST['info'];
          if (!empty($delete)) {
               $deleteComanda = new comanda(conectar());
               $deleteComanda->cargarComandaPorNumero($delete);
               echo $deleteComanda->deleteComanda();
               //unset($deleteComanda);
               //header("../../comandas/comanda.php");
          } 
          else  if (!empty($info)){
               $infoComanda = new comanda(conectar());
               // $infoComanda->cargarComandaPorNumero($delete);
               // $infoComanda->deleteComanda();
               unset($infoComanda);
          }
     }