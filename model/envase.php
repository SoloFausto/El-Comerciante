<?php
    class envase{
        private $id;
        private $nombre;
        private $descripcion;
        private $capacidad;
        private $precio;
        private $conn;
        function __construct ($conn){
            $this->conn = $conn;
        }
        function newEnvase($nombre,$descripcion,$capacidad,$precio){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->capacidad = $capacidad;
            $this->precio = $precio;
            $sql = "INSERT INTO `envase` (`id`, `nombre`, `descripcion`,`capacidad`,`precio`) VALUES (NULL, '$nombre', '$descripcion','$capacidad','$precio');";
            $reusltsql = mysqli_query($this->conn,$sql);
        /* El codigo de abajo recupera la id de el helado que recien creamos*/
            $getIdSql = "SELECT id  FROM `envase` WHERE `nombre` LIKE '$nombre' AND `descripcion` LIKE '$descripcion' AND `capacidad` = $capacidad AND `precio` = $precio;";

            $resultQueryId = mysqli_query($this->conn,$getIdSql);
            $resultObjId = mysqli_fetch_object($resultQueryId);
            $this->id = $resultObjId->id;
    
    
        }
    }


?>