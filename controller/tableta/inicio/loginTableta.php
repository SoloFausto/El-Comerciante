<?php
    include("C:/xampp/htdocs/El-Comerciante/controller/include/connection.php");
    require("C:/xampp/htdocs/El-Comerciante/model/Tableta.php");
    
    $contrasena = $_POST['bottonTab'];
    
    if(($contrasena == "")){ //  se fija que no haya campos vacios
      session_start();
      $_SESSION['mensaje'] = 'No se permiten los campos vacios';
      $_SESSION['mensaje-color'] = 'danger';
      header("location: /El-Comerciante/view/dolcezzainterfaces/tableta/inicio/loginTableta.php");
    }else{

    if(!isset($_POST['botonTablet'])){ /*Verifica que los datos vengan del inicio de sesión*/
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/tableta/inicio/logintableta.php");

    }else{
  
      $tableta = new tableta(conectar());
      $veri = $tableta->cargarTabletaLogin($contrasena);
      
      if($veri == true){
        session_start();
        $_SESSION['mensaje'] = "Bienvenido $nombre";
        $_SESSION['mensaje-color'] = 'success';
        header("Location: ../../../view/dolcezzainterfaces/tableta/Producto/producto.php");
      }else{
        session_start();
        $_SESSION['mensaje'] = 'Esa tableta no existe';
        $_SESSION['mensaje-color'] = 'danger';
        header("Location: /El-Comerciante/view/dolcezzainterfaces/tableta/inicio/loginTableta.php");
      }
    }   
  }
?>