<?php
    include("conexion.php");
    
    $PostUser = $_POST['user'];
    $PostPass = $_POST['pass'];

    if( !isset($_POST['boton'])){ /*Verifica que los datos vengan del inicio de sesión*/
      header("Location: ../view/login.php");

    }else{
  
    $con = conectar();
    $sql = "SELECT * FROM `usuario` WHERE `name` = '$PostUser' AND `password` = '$PostPass'";
    $query = mysqli_query($con, $sql);

    if(!isset($query)){ /*Verifica que haya una respuesta por parte de la BD*/
      echo "Error \"404\" base de datos.";
      die();

    }else{ /*Trae de la BD los datos necesarios*/
      $row = mysqli_fetch_array($query);
       $pass =  $row['password'];
       $nam = $row['name'];
       $rol = $row['Rol'];
       echo "Ingresaste $PostUser $PostPass, el resultado es $nam $pass";

      if($rol != ""){ /*Verifica que el Usuario tenga Rol*/

      if(($PostPass == $pass)||($PostUser == $nam)){ /*Si tiene Rol Este verifica que la cuenta sea correcta o exista*/
        session_start(); /*Si Todo esta bien, Crea una sesión*/  
        header("Location: ../view/paginaPrincipal.php");
      }
    }else{ /*Si NO tiene Rol o La cuenta esta mal ingresada, lo devuelve al inicio*/
        header("Location: ../view/login.php");
      }

    }
  }
?>