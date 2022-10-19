<?php
    function conectar(){
        $conn =mysqli_connect(
            'localhost',
            'id19735407_corvus',
            'c6#OxS9}MLb!6\Ax',
            'id19735407_elcomerciantedb',
            '3306'
        );
        return  $conn;
    }



?>