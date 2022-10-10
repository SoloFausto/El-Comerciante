<?php
    include("conexion.php");
    require("../../model/Usuario.php");
    
    $PostUser = $_POST['user'];
    $PostPass = $_POST['pass'];
    if(($PostPass == "")||($PostUser == "")){
      header("location: ../../view/dolcezzainterfaces/login");
    }else{

    if( !isset($_POST['boton'])){ /*Verifica que los datos vengan del inicio de sesión*/
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");

    }else{
  
    $Usuario = new usuario(conectar());
    
    if($Usuario->loadUserByPassw($PostUser, $PostPass) == true){
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/personal/paginaPrincipal/inicio.php");
    }else{
      header("Location: /../EL-COMERCIANTE/view/dolcezzainterfaces/login");
    }
    /*$con = conectar();
    $sql = "SELECT * FROM `usuario` WHERE `nombre` = '$PostUser' AND `contrasena` = '$PostPass'";
    $query = mysqli_query($con, $sql);*/
    
  }  
}
?>