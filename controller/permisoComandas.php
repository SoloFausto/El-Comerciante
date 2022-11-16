<?php 
    session_start();
    include ("connection.php");
    include ("../model/Usuario.php");

    $Usuario = new usuario(conectar());
    $Usuario->loadUserById($_SESSION['id']);

    if($Usuario->getPermComandas()== 1) { 
        header('location: ../view/comandas.php');
    }else{
        header('location: ../view/errorSinPermiso.php');
    }
?>