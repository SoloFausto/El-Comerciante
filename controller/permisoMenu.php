<?php 
    session_start();
    include ("connection.php");
    include ("../model/Usuario.php");

    $Usuario = new usuario(conectar());
    $Usuario->loadUserById($_SESSION['id']);

    if($Usuario->getPermMenu()== 1) { 
        header('location: ../view/menu.php');
    }else{
        header('location: ../view/errorSinPermiso.php');
    }
?>