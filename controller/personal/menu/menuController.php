<?php
require "/Xampp/htdocs/El-Comerciante/model/producto.php";
require "/Xampp/htdocs/El-Comerciante/model/envase.php";
require "/Xampp/htdocs/El-Comerciante/model/helado.php";
require "/Xampp/htdocs/El-Comerciante/model/combo.php";
include "/Xampp/htdocs/El-Comerciante/controller/include/connection.php";
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
    public static function hidrateAllProductoId($index){
          $prodArr = producto::loadAllProds(conectar());
          $salida = $prodArr[$index];
          $id = $salida->getid();
          return $id;
    }
}
class envaseController{
    public static function returnEnvases(){ //Nos devuelve cuantos productos tenemos para una comanda
         $envArr = envase::loadAllEnvs(conectar());
         $salida = count($envArr);
         return $salida;

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
    public static function hidrateEnvaseId($index){
     $envArr = envase::loadAllEnvs(conectar());
     $salida = $envArr[$index];
     $id = $salida->getid();
     return $id;
}
    

}
class saborHelado{
    public static function returnHelados(){ //Nos devuelve cuantos productos tenemos para una comanda
         $envArr = helado::loadAllHelados(conectar());
         $salida = count($envArr);
         return $salida;

    }
    public static function hidrateHeladoNombre($idEnvase){ 
         $envArr = helado::loadAllHelados(conectar()); 
         $salida = $envArr[$idEnvase];
         $id = $salida->getNombre(); 
         return $id; 
    }
    public static function hidrateHeladoDescripcion($idEnvase){ 
         $envArr = helado::loadAllHelados(conectar());
         $salida = $envArr[$idEnvase];
         $id = $salida->getPrecio(); 
         return $id;
    }
    
}
class combocontroller{
    public static function returnCombo(){ //Nos devuelve cuantos productos tenemos para una comanda
        $envArr = combo::loadAllCombos(conectar());
        $salida = count($envArr);
        return $salida;

   }
   public static function hidrateComboNombre($idEnvase){ 
        $envArr = combo::loadAllCombos(conectar()); 
        $salida = $envArr[$idEnvase];
        $id = $salida->getNombre(); 
        return $id; 
   }
   public static function hidrateComboDescripcion($idEnvase){ 
        $envArr = combo::loadAllCombos(conectar());
        $salida = $envArr[$idEnvase];
        $id = $salida->getPrecio(); 
        return $id;
   }
   public static function hidrateComboPrecio($idEnvase){ 
    $envArr = combo::loadAllCombos(conectar());
    $salida = $envArr[$idEnvase];
    $id = $salida->getPrecio(); 
    return $id;
}
}
