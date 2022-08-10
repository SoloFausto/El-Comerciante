<?php
    include("conexion.php");
    
    $PostUser = $_POST['user'];
    $PostPass = $_POST['pass'];

    if( !isset($_POST['boton'])){
      header("Location:index.html");    
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
          header("Location: inicio.php"); // Poner la pagina de inicio en el sistema
      }else{
        header("Location: index.html");
      }
    }
  }
?>