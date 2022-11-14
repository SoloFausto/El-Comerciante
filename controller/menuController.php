<?php
require "../model/producto.php";
require "../model/envase.php";
require "../model/helado.php";
require "../model/combo.php";
include "../controller/connection.php";
include "../model/comboEnvase.php";
include "../model/comboProducto.php";
   class productoController{
     public static function hidrateCheckedProducto($indexProducto,$idCombo){
          $prodArr = producto::loadAllProds(conectar());
          $salida = $prodArr[$indexProducto];
          $idProducto = $salida->getid();
          if(comboProducto::verificarIdProductoIdCombo($idCombo,$idProducto,conectar()) == true){
          return "checked";
          }
          else if (comboProducto::verificarIdProductoIdCombo($idCombo,$idProducto,conectar()) == false){
          return "";
          }
     }
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
    public static function returnEnvases(){ //Nos devuelve cuantos productos tenemos
         $envArr = envase::loadAllEnvs(conectar());
         $salida = count($envArr);
         return $salida;

    }
    public static function hidrateEnvaseDescripcion($idEnvase){ 
     $envArr = envase::loadAllEnvs(conectar()); 
     $salida = $envArr[$idEnvase];
     $id = $salida->getDescripcion(); 
     return $id; 
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
     public static function hidrateCheckedEnvases($indexenvase,$idCombo){
         $envArr = envase::loadAllEnvs(conectar());
         $salida = $envArr[$indexenvase];
         $idEnvase = $salida->getid();
         if(comboEnvase::verificarIdEnvaseIdCombo($idCombo,$idEnvase,conectar()) == true){
          return "checked";
         }
         else if (comboEnvase::verificarIdEnvaseIdCombo($idCombo,$idEnvase,conectar()) == false){
          return "";
         }
         
          
     }
}
class heladoController{

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
         $id = $salida->getDescripcion(); 
         return $id;
    }
    public static function hidrateHeladoId($idEnvase){ 
     $envArr = helado::loadAllHelados(conectar());
     $salida = $envArr[$idEnvase];
     $id = $salida->getId(); 
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
        $id = $salida->getDescripcion(); 
        return $id;
   }
   public static function hidrateComboPrecio($idEnvase){ 
    $envArr = combo::loadAllCombos(conectar());
    $salida = $envArr[$idEnvase];
    $id = $salida->getPrecio(); 
    return $id;
}
public static function hidrateComboId($index){
     $comboArr = combo::loadAllCombos(conectar());
     $salida = $comboArr[$index];
     $id = $salida->getid();
     return $id;
}
}
