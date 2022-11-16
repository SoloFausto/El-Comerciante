<?php
    include("connection.php");
    require("../model/Usuario.php");
    
    $nombre = $_POST['user'];
    $contrasena = $_POST['pass'];
    
    if(($contrasena == "")||($nombre == "")){ //  se fija que no alla campos vacios
      session_start();
      $_SESSION['mensaje'] = 'No se permiten los campos vacios';
      $_SESSION['mensaje-color'] = 'danger';
      header("location: ../view/login.php");
    }else{

    if( !isset($_POST['boton'])){ /*Verifica que los datos vengan del inicio de sesión*/
      header("Location: ../view/login.php");

    }else{
  
    $Usuario = new usuario(conectar());
    $veri = $Usuario->loadUserByPassw($nombre, $contrasena);
    
    $id = $Usuario->getId();

    if($veri == true){
      session_start();
      $_SESSION['id'] = "$id";
      $_SESSION['mensaje'] = "Bienvenido $nombre";
      $_SESSION['mensaje-color'] = 'success';
      $_SESSION['mensaje-nombre'] = "$nombre";
      header("Location: ../view/paginaPrincipal.php");
    }else{
      session_start();
      $_SESSION['mensaje'] = 'El usuario y/o la contraseña son incorrectos.';
      $_SESSION['mensaje-color'] = 'danger';
      header("Location: ../view/login.php");
    }
  }  
}
?>