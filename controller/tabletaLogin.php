<?php
    include("../controller/connection.php");
    require("../model/Tableta.php");
    
    $contrasena = $_POST['bottonTab'];
    
    if(($contrasena == "")){ //  se fija que no haya campos vacios
      session_start();
      $_SESSION['mensaje'] = 'No se permiten los campos vacios';
      $_SESSION['mensaje-color'] = 'danger';
      header("location: ../view/tabletaLogin.php");
    }else{

    if(!isset($_POST['botonTablet'])){ /*Verifica que los datos vengan del inicio de sesión*/
      header("Location: ../view/tabletaLogin.php");

    }else{
  
      $tableta = new tableta(conectar());
      $veri = $tableta->cargarTabletaLogin($contrasena);
      
      if($veri == true){
        session_start();
        $_SESSION['mensaje'] = "Bienvenido $nombre";
        $_SESSION['mensaje-color'] = 'success';
        header("Location: ../view/tabletaPedido.php");
      }else{
        session_start();
        $_SESSION['mensaje'] = 'Esa tableta no existe';
        $_SESSION['mensaje-color'] = 'danger';
        header("Location: ../view/tabletaLogin.php");
      }
    }   
  }
?>