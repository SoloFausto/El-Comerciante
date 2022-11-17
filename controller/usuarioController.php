<?php
    include ("../model/Usuario.php")
class usuarioController{
     public static function returnUsuarioIndex(){ //Nos devuelve cuantas usuarios pendientes tenemos
          $usuarioArr = usuario::loadUserById(conectar());
          $salida = count($usuarioArr);
          return $salida;

     }
     public static function hidrateUsuarioId($index){ //Nos devuelve la id de una usuario pendiente cuando nosotros elegimos una de la lista con el valor index
          $usuarioArr = usuario::cargarusuarioEstado(conectar()); // este metodo nos devuelve un array de usuarios pendientes y 
          //lo ponemos en la variable
          $salida = $usuarioArr[$index]; // elegimos una en el array 
          $id = $salida->getId(); // conseguimos el valor de la id con el getter de la que elegimos 
          return $id; // devolvemos el valor
     }
     public static function hidrateUsuarioMesa($index){
          $usuarioArr = usuario::cargarusuarioEstado(conectar(),1);
          $salida = $usuarioArr[$index];
          $mesa = $salida->getMesa();
          if($mesa == 0){ // si la mesa que conseguimos es 0, entonces la respuesta es "Para llevar"
               $respuesta = "Para llevar";
          }
          else{
               $respuesta = $mesa;
          }
          return $respuesta;
     }
     public static function hidrateusuarioTotal($index){
          $usuarioArr = usuario::cargarusuarioEstado(conectar(),1);
          $salida = $usuarioArr[$index];
          $total = $salida->getTotal();
          return $total;
     }
     public static function hidrateusuarioFecha($index){
          $usuarioArr = usuario::cargarusuarioEstado(conectar(),1);
          $salida = $usuarioArr[$index];
          $fecha = $salida->getFecha();
          return $fecha;
     }
     public static function hidrateusuarioFormaPago($index){
          $usuarioArr = usuario::cargarusuarioEstado(conectar(),1);
          $salida = $usuarioArr[$index];
          $fP = $salida->getForma_pago();
          return $fP;
     }
     public static function generateDeleteLink($index){
          $usuarioArr = usuario::cargarusuarioEstado(conectar(),1);
          $salida = $usuarioArr[$index];
          $id = $salida->getId();

     }
     public static function createusuarioEnCurso($idUsuario){
          $newusuario = new usuario(conectar());
           $idNuevausuario = $newusuario->createusuarioEnCurso($idUsuario);
          return $idNuevausuario;
     }
}
?>