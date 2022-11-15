<?php
include "../controller/connection.php";
require "../model/helado.php";
require "../model/comanda.php";
require "../model/producto.php";
require "../model/envase.php";
require "../model/comandaEnvaseHelado.php";



class comandaController{
     public static function returnComandaIndex(){ //Nos devuelve cuantas comandas pendientes tenemos
          $comandaArr = comanda::cargarComandaEstado(conectar(),1);
          $salida = count($comandaArr);
          return $salida;

     }
     public static function hidrateComandaId($index){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
          $comandaArr = comanda::cargarComandaEstado(conectar(),1); // este metodo nos devuelve un array de comandas pendientes y 
          //lo ponemos en la variable
          $salida = $comandaArr[$index]; // elegimos una en el array 
          $id = $salida->getId(); // conseguimos el valor de la id con el getter de la que elegimos 
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
     public static function createComanda(){
          
     }
}

class productoController{
     public static function returnProductos($idcomanda){ //Nos devuelve cuantos productos tenemos para una comanda
          $prodArr = producto::getRelatedProds(conectar(),$idcomanda);
          $salida = count($prodArr);
          return $salida;

     }
     public static function hidrateProductoNombre($idcomanda,$index){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
          $prodArr = producto::getRelatedProds(conectar(),$idcomanda); // este metodo nos devuelve un array de comandas pendientes y 
          //lo ponemos en la variable
          $salida = $prodArr[$index]; // elegimos una e el array 
          $id = $salida->getNombre();
           // conseguimos el valor de la id con el getter de la ue elegimos 
          return $id; // devolvemos el valor
     }
     public static function hidrateProductoPrecio($idcomanda,$index){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
          $prodArr = producto::getRelatedProds(conectar(),$idcomanda); // este metodo nos devuelve un array de comandas pendientes y 
          //lo ponemos en la variable
          $salida = $prodArr[$index]; // elegimos una e el array 
          $id = $salida->getPrecio(); // conseguimos el valor de la id con el getter de la ue elegimos 
          return $id; // devolvemos el valor
     }
     public static function hidrateProductoCantidad($idcomanda,$index){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
          $prodArr = producto::getRelatedProds(conectar(),$idcomanda); // este metodo nos devuelve un array de comandas pendientes y 
          //lo ponemos en la variable
          $salida = $prodArr[$index]; // elegimos una e el array 
          $id = $salida->getNombre(); // conseguimos el valor de la id con el getter de la ue elegimos 
          return $id; // devolvemos el valor
     }
     public static function hidrateProductoDescripcion($idcomanda,$index){ //Nos devuelve la id de una Comanda pendiente cuando nosotros elegimos una de la lista con el valor index
          $prodArr = producto::getRelatedProds(conectar(),$idcomanda); // este metodo nos devuelve un array de comandas pendientes y 
          //lo ponemos en la variable
          $salida = $prodArr[$index]; // elegimos una e el array 
          $id = $salida->getDescripcion(); // conseguimos el valor de la id con el getter de la ue elegimos 
          return $id; // devolvemos el valor
     }
     public static function hidrateAllProductoNombre($index){
          $productoArr = producto::loadAllProds(conectar());
          $salida = $productoArr[$index];
          $fecha = $salida->getNombre();
          return $fecha;
     }
     public static function hidrateAllProductoPrecio($index){
          $productoArr = producto::loadAllProds(conectar());
          $salida = $productoArr[$index];
          $fP = $salida->getPrecio();
          return $fP;
     }
     public static function hidrateAllProductoDescripcion($index){
          $productoArr = producto::loadAllProds(conectar());
          $salida = $productoArr[$index];
          $fP = $salida->getDescripcion();
          return $fP;
     }
     public static function returnProductoIndex(){ //Nos devuelve los productos
          $prodArr = producto::loadAllProds(conectar());
          $salida = count($prodArr);
          return $salida;

     }

}
class envaseController{
     public static function countRelatedEnvases($idComanda){ 
          $envase = comandaEnvaseHelado::getRelatedEnvsComanda($idComanda,conectar());
          $salida = count($envase);
          return $salida;

     }
     public static function hidrateEnvaseNombreWithComanda($idComanda,$index){
          $envArr = comandaEnvaseHelado::getRelatedEnvsComanda($idComanda,conectar());
          $salida = $envArr[$index];
          $nombre = $salida->getNombre(); 
          return $nombre; 
     }
     public static function hidrateEnvaseCapacidadWithComanda($idComanda,$index){
          $envArr = comandaEnvaseHelado::getRelatedEnvsComanda($idComanda,conectar());
          $salida = $envArr[$index];
          $nombre = $salida->getCapacidad(); 
          return $nombre; 
     }
     public static function hidrateEnvasePrecioWithComanda($idComanda,$index){
          $envArr = comandaEnvaseHelado::getRelatedEnvsComanda($idComanda,conectar());
          $salida = $envArr[$index];
          $precio = $salida->getPrecio(); 
          return $precio; 
     }
     
     public static function hidrateEnvaseNombre($idEnvase){ 
          $envArr = envase::loadAllEnvs(conectar()); 
          $salida = $envArr[$idEnvase];
          $id = $salida->getNombre(); 
          return $id; 
     }
     public static function hidrateEnvasePrecio($idEnvase){ 
          $envArr = envase::loadAllEnvs(conectar());
          $salida = $envArr[$idEnvase];
          $id = $salida->getPrecio(); 
          return $id;
     }
     public static function hidrateEnvaseCapacidad($idEnvase){ 
          $envArr = envase::loadAllEnvs(conectar());

          $salida = $envArr[$idEnvase]; 
          $id = $salida->getCapacidad(); 
          return $id;
     }
     

}
class heladoController{
     public static function countRelatedHeladosComanda($idComanda){
          $heladoArr = comandaEnvaseHelado::getRelatedHeladosComanda($idComanda,conectar());
          $salida = count($heladoArr);
          return $salida;
     }
     public static function countRelatedHeladosComandaNumEnvase($idComanda,$numEnvase){
          $heladoArr = comandaEnvaseHelado::getRelatedHelados($numEnvase,$idComanda,conectar());
          $salida = count($heladoArr);
          return $salida;
     }
     public static function hidrateHeladoNombreWithNumEnvaseComanda($idComanda,$numEnvase,$index){
          $heladoArr = comandaEnvaseHelado::getRelatedHelados($numEnvase,$idComanda,conectar());
          $salida = $heladoArr[$index];
          $nombre = $salida->getNombre(); 
          return $nombre; 


     }
     public static function hidrateHeladoCantidadWithNumEnvaseComanda($idComanda,$numEnvase,$index){
          $heladoArr = comandaEnvaseHelado::getRelatedHeladosCantidad($numEnvase,$idComanda,conectar());
          $salida = $heladoArr[$index];
          return $salida; 
     }
     
     public static function hidrateEnvasePrecioWithComanda($idComanda,$index){
          $envArr = comandaEnvaseHelado::getRealtedEnvs($index,$idComanda,conectar());
          $precio = $envArr->getPrecio(); 
          return $precio; 
     }
}