<?php
    function conectar(){
        $conn =mysqli_connect(
            'localhost',
            'root',
            '',
            'elcomerciantedb',
            '3306'
        );
        return  $conn;
    }



?>