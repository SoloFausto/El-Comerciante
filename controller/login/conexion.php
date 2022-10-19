<?php
    function conectar(){
        $host = "localhost";
        $user = "id19735407_corvus";
        $pass = "c6#OxS9}MLb!6\Ax";
        $db = "id19735407_elcomerciantedb";

        $con = mysqli_connect($host, $user, $pass);
        mysqli_select_db($con, $db);
        return $con;
    }
?>