<?php
    function conectar(){
        $conn =mysqli_connect(
            'sql107.epizy.com',
            'epiz_32993642',
            'huF3stM6MB1CW2',
            'epiz_32993642_elcomerciantedb',
            '3306'
        );
        return  $conn;
    }



?>