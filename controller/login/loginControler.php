<?php
    include("conexion.php");
    require("../../model/Usuario.php");
    
    $nombre = $_POST['user'];
    $contrasena = $_POST['pass'];
    if(($contrasena == "")||($nombre == "")){
      header("location: ../../view/dolcezzainterfaces/login");
    }else{

    if( !isset($_POST['boton'])){ /*Verifica que los datos vengan del inicio de sesión*/
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");

    }else{
  
    $Usuario = new usuario(conectar());
    $veri = $Usuario->loadUserByPassw($nombre, $contrasena);
    
    if($veri == true){
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/personal/paginaPrincipal/inicio.php");
      session_start();
    }else{
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");
    }
  }  
}
?>