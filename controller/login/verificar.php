<?php
    include("conexion.php");
    
    $PostUser = $_POST['user'];
    $PostPass = $_POST['pass'];

    if( !isset($_POST['boton'])){
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");    
    }else{
  
    $con = conectar();
    $sql = "SELECT * FROM `usuario` WHERE `name` = '$PostUser' AND `password` = '$PostPass'";
    $query = mysqli_query($con, $sql);

    if(!isset($query)){
      echo "Error \"404\" base de datos.";
      die();
    }else{
      $row = mysqli_fetch_array($query);
       $pass =  $row['password'];
       $nam = $row['name'];
       echo "Ingresaste $PostUser $PostPass, el resultado es $nam $pass";
      if(($PostPass == $pass)||($PostUser == $nam)){
          header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/personal/paginaPrincipal/inicio.php");
      }else{
        header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");
      }
    }
  }
?>