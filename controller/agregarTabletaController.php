<?php 
    include ('connection.php');
    class agregarDispositivo(){
        function comprobarNombre(){
            $nombreTableta = "Mesa";
            $numeroNombre = 1;
            $tableta = new tableta(conectar());
            while ($tableta->buscarTabletaNombre("$nombreTableta$numeroNombre")){
            echo "a";
            $numeroNombre++;
            }
            $resultado = "$nombreTableta$numeroNombre";
            return $resultado;
        }
        function randomChar(){
            $length = 4;    
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    }
?>