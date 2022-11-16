<?php 
    session_start();
    include ("connection.php");
    include ("../model/Usuario.php");

    $Usuario = new usuario(conectar());
    $Usuario->loadUserById($_SESSION['id']);

    if($Usuario->getPermUsuarios()== 1) { 
        header('location: ../view/usuarios.php');
    }else{
        header('location: ../view/errorSinPermiso.php');
    }
?>