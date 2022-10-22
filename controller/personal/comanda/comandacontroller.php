<?php
include "/Xampp/htdocs/El-Comerciante/controller/include/connection.php";
require "/Xampp/htdocs/El-Comerciante/model/comanda.php";
     class comandaController{
          public static function returnComandaIndex(){ //Nos devuelve cuantas comandas pendientes tenemos
               $comandaArr = comanda::cargarComandaEstado(conectar(),1);
               $salida = count($comandaArr);
               return $salida;

          }
          public static function hidrateComandaId($index){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
               $comandaArr = comanda::cargarComandaEstado(conectar(),1); // este metodo nos devuelve un array de comandas pendientes y 
               //lo ponemos en la variable
               $salida = $comandaArr[$index]; // elegimos una e el array 
               $id = $salida->getId(); // conseguimos el valor de la id con el getter de la ue elegimos 
               return $id; // devolvemos el valor
          }
          public static function hidrateComandaMesa($index){
               $comandaArr = comanda::cargarComandaEstado(conectar(),1);
               $salida = $comandaArr[$index];
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
               $comandaArr = comanda::cargarComandaEstado(conectar(),1);
               $salida = $comandaArr[$index];
               $total = $salida->getTotal();
               return $total;
          }
          public static function hidrateComandaFecha($index){
               $comandaArr = comanda::cargarComandaEstado(conectar(),1);
               $salida = $comandaArr[$index];
               $fecha = $salida->getFecha();
               return $fecha;
          }
          public static function hidrateComandaFormaPago($index){
               $comandaArr = comanda::cargarComandaEstado(conectar(),1);
               $salida = $comandaArr[$index];
               $fP = $salida->getForma_pago();
               return $fP;
          }
          public static function generateDeleteLink($index){
               $comandaArr = comanda::cargarComandaEstado(conectar(),1);
               $salida = $comandaArr[$index];
               $id = $salida->getId();

          }
     }
     class productoController{
          public static function returnProductos($idcomanda){ //Nos devuelve cuantos productos tenemos para una comanda
               $prodArr = producto::getRelatedProds(conectar(),$idcomanda);
               $salida = count($prodArr);
               return $salida;

          }
          public static function hidrateProductoNombre($idcomanda){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
               $prodArr = producto::getRelatedProds(conectar(),$idcomanda); // este metodo nos devuelve un array de comandas pendientes y 
               //lo ponemos en la variable
               $salida = $prodArr[$idcomanda]; // elegimos una e el array 
               $id = $salida->getNombre(); // conseguimos el valor de la id con el getter de la ue elegimos 
               return $id; // devolvemos el valor
          }
          public static function hidrateProductoPrecio($idcomanda){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
               $prodArr = producto::getRelatedProds(conectar(),$idcomanda); // este metodo nos devuelve un array de comandas pendientes y 
               //lo ponemos en la variable
               $salida = $prodArr[$idcomanda]; // elegimos una e el array 
               $id = $salida->getNombre(); // conseguimos el valor de la id con el getter de la ue elegimos 
               return $id; // devolvemos el valor
          }
          public static function hidrateProductoCantidad($idcomanda){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
               $prodArr = producto::getRelatedProds(conectar(),$idcomanda); // este metodo nos devuelve un array de comandas pendientes y 
               //lo ponemos en la variable
               $salida = $prodArr[$idcomanda]; // elegimos una e el array 
               $id = $salida->getNombre(); // conseguimos el valor de la id con el getter de la ue elegimos 
               return $id; // devolvemos el valor
          }

     }
