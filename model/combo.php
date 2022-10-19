<?php
class combo{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $conn;
        function __construct($conn){
            $this->conn = $conn;
        }
        function newCombo($nombre,$descripcion,$precio){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
            $sql = "INSERT INTO `combo` (`nombre`, `descripcion`, `precio`) VALUES (NULL, '$nombre', '$descripcion', '$precio');";
            $result = mysqli_query($this->conn,$sql);
    /* El codigo de abajo recupera la id de el helado que recien creamos*/
            $getIdSql = "SELECT `id` FROM `combo` WHERE `nombre` LIKE '$nombre' AND `descripcion` LIKE '$descripcion';";
            $resultQueryId = mysqli_query($this->conn,$getIdSql);
            $resultObjId = mysqli_fetch_object($resultQueryId);
            $this->id = $resultObjId->id;
        }
        function loadComboById ($id){
            $sql = "SELECT *  FROM `combo` WHERE `id` = $id;";
            $result = mysqli_query($this->conn,$sql);
            $resultObj = mysqli_fetch_object($result);
            $this->id = $id;
            $this->nombre = $resultObj->nombre;
            $this->descripcion = $resultObj->descripcion;
            $this->precio = $resultObj->precio;
        }
        function refreshCombo (){
            $sql = "SELECT *  FROM `combo` WHERE `id` = $this->id;";
            $result = mysqli_query($this->conn,$sql);
            $resultObj = mysqli_fetch_object($result);
            $this->nombre = $resultObj->nombre;
            $this->descripcion = $resultObj->descripcion;
            $this->precio = $resultObj->precio;
        }
        function modifyCombo(){
                $sql = "UPDATE `combo` SET `nombre` = '$this->nombre', `descripcion` = '$this->descripcion', `precio` = '$this->precio' WHERE `helado`.`id` = $this->id;";
                $result = mysqli_query($this->conn,$sql);
        }
        function deleteCombo(){
                $sql = "DELETE FROM combo WHERE `combo`.`id` = $this->id";
                $this->id = "";
                $this->nombre = "";
                $this->descripcion = "";
                $this->precio = "";
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                $this->refreshCombo();
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;
                $this->refreshCombo();
                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                $this->refreshCombo();
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;
                $this->refreshCombo();
                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                $this->refreshCombo();
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;
                $this->refreshCombo();
                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                $this->refreshCombo();
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;
                $this->refreshCombo();
                return $this;
        }
    }
    ?>