<?php
include "../include/connection.php";
require "../El-Comerciante/model/comanda.php";
     class comandaController{
          public static function hidrateComandaId($conn,$index){
               $compenarr = comanda::cargarComandaPendiente($conn);
               $salida = $compenarr[$index];
               $id = $salida->getId();
               return $id;
          }
          public static function hidrateComandaMesa($conn,$index){
               $compenarr = comanda::cargarComandaPendiente($conn);
               $salida = $compenarr[$index];
               $mesa = $salida->getMesa();
               return $mesa;
          }
          public static function hidrateComandaTotal($conn,$index){
               $compenarr = comanda::cargarComandaPendiente($conn);
               $salida = $compenarr[$index];
               $total = $salida->getTotal();
               return $total;
          }
          public static function hidrateComandaFecha($conn,$index){
               $compenarr = comanda::cargarComandaPendiente($conn);
               $salida = $compenarr[$index];
               $fecha = $salida->getFecha();
               return $fecha;
          }
          public static function hidrateComandaFormaPago($conn,$index){
               $compenarr = comanda::cargarComandaPendiente($conn);
               $salida = $compenarr[$index];
               $fP = $salida->getMesa();
               return $fP;
          }
          public static function generateDeleteLink($conn,$index){
               $compenarr = comanda::cargarComandaPendiente($conn);
               $salida = $compenarr[$index];
               $mesa = $salida->getFecha();
          }

}