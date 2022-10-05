<?php
    include("conexion.php");
    
    $PostUser = $_POST['user'];
    $PostPass = $_POST['pass'];
    if(($PostPass == "")||($PostUser == "")){
      header("location: ../../view/dolcezzainterfaces/login");
    }else{

    if( !isset($_POST['boton'])){ /*Verifica que los datos vengan del inicio de sesión*/
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");

    }else{
  
    $con = conectar();
    $sql = "SELECT * FROM `usuario` WHERE `nombre` = '$PostUser' AND `contrasena` = '$PostPass'";
    $query = mysqli_query($con, $sql);

    if(!isset($query)){ /*Verifica que haya una respuesta por parte de la BD*/
      echo "Error \"404\" base de datos.";
      die();

    }else{ /*Trae de la BD los datos necesarios*/
      $row = mysqli_fetch_array($query);
       $pass =  $row['contrasena'];
       $nam = $row['nombre'];
       echo "Ingresaste $PostUser $PostPass, el resultado es $nam $pass";

      if(($PostPass == $pass)&&($PostUser == $nam)){ /*Si tiene Rol Este verifica que la cuenta sea correcta o exista*/
        session_start(); /*Si Todo esta bien, Crea una sesión*/  
        header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/personal/paginaPrincipal/inicio.php");
      }else{
        header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");
      }

    }
  }
}
?>