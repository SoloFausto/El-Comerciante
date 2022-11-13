<?php
class comandaControllerViejo{
          public static function returnComandaIndex(){ //Nos devuelve cuantas comandas pendientes tenemos
               $compenarr = comanda::cargarComandaEstado(conectar(),0);
               $salida = count($compenarr);
               return $salida;

          }
          public static function hidrateComandaId($index){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
               $compenarr = comanda::cargarComandaEstado(conectar(),0); // este metodo nos devuelve un array de comandas pendientes y 
               //lo ponemos en la variable
               $salida = $compenarr[$index]; // elegimos una e el array 
               $id = $salida->getId(); // conseguimos el valor de la id con el getter de la ue elegimos 
               return $id; // devolvemos el valor
          }
          public static function hidrateComandaMesa($index){
               $compenarr = comanda::cargarComandaEstado(conectar(),0);
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
               $compenarr = comanda::cargarComandaEstado(conectar(),0);
               $salida = $compenarr[$index];
               $total = $salida->getTotal();
               return $total;
          }
          public static function hidrateComandaFecha($index){
               $compenarr = comanda::cargarComandaEstado(conectar(),0);
               $salida = $compenarr[$index];
               $fecha = $salida->getFecha();
               return $fecha;
          }
          public static function hidrateComandaFormaPago($index){
               $compenarr = comanda::cargarComandaEstado(conectar(),0);
               $salida = $compenarr[$index];
               $fP = $salida->getForma_pago();
               return $fP;
          }
          public static function generateDeleteLink($index){
               $compenarr = comanda::cargarComandaEstado(conectar(),0);
               $salida = $compenarr[$index];
               $id = $salida->getId();

          }
          
}