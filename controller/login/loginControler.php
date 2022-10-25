<?php
    include("../include/connection.php");
    require("../../model/Usuario.php");
    
    $nombre = $_POST['user'];
    $contrasena = $_POST['pass'];
    
    if(($contrasena == "")||($nombre == "")){ //  se fija que no alla campos vacios
      session_start();
      $_SESSION['mensaje'] = 'No se permiten los campos vacios';
      $_SESSION['mensaje-color'] = 'danger';
      header("location: ../../view/dolcezzainterfaces/login");
    }else{

    if( !isset($_POST['boton'])){ /*Verifica que los datos vengan del inicio de sesión*/
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");

    }else{
  
    $Usuario = new usuario(conectar());
    $veri = $Usuario->loadUserByPassw($nombre, $contrasena);
    
    if($veri == true){
      session_start();
      $_SESSION['mensaje'] = "Bienvenido $nombre";
      $_SESSION['mensaje-color'] = 'success';
      header("Location: /El-Comerciante/view/dolcezzainterfaces/personal/paginaPrincipal/inicio.php");
    }else{
      session_start();
      $_SESSION['mensaje'] = 'El usuario y/o la contraseña son incorrectos.';
      $_SESSION['mensaje-color'] = 'danger';
      header("Location: /../view/dolcezzainterfaces/login/index.php");
    }
  }  
}
?>