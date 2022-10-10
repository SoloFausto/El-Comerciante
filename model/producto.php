<?php
    class producto{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $conn;
        function __construct($conn){
            $this->conn = $conn;
        }
        function newproducto($nombre,$descripcion,$precio){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
            $sql = "INSERT INTO `producto` (`nombre`, `descripcion`, `precio`) VALUES (NULL, '$nombre', '$descripcion', '$precio');";
            $result = mysqli_query($this->conn,$sql);
    /* El codigo de abajo recupera la id de el helado que recien creamos*/
            $getIdSql = "SELECT `id` FROM `producto` WHERE `nombre` LIKE '$nombre' AND `descripcion` LIKE '$descripcion';";
            $resultQueryId = mysqli_query($this->conn,$getIdSql);
            $resultObjId = mysqli_fetch_object($resultQueryId);
            $this->id = $resultObjId->id;
        }
        function loadProductoById ($id){
            $sql = "SELECT *  FROM `producto` WHERE `id` = $id;";
            $result = mysqli_query($this->conn,$sql);
            $resultObj = mysqli_fetch_object($result);
            $this->id = $id;
            $this->nombre = $resultObj->nombre;
            $this->descripcion = $resultObj->descripcion;
            $this->precio = $resultObj->precio;
        }
        function refreshProducto (){
            $sql = "SELECT *  FROM `producto` WHERE `id` = $this->id;";
            $result = mysqli_query($this->conn,$sql);
            $resultObj = mysqli_fetch_object($result);
            $this->nombre = $resultObj->nombre;
            $this->descripcion = $resultObj->descripcion;
            $this->precio = $resultObj->precio;
        }
        function modifyProducto(){
                $sql = "UPDATE `producto` SET `nombre` = '$this->nombre', `descripcion` = '$this->descripcion', `precio` = '$this->precio' WHERE `helado`.`id` = $this->id;";
                $result = mysqli_query($this->conn,$sql);
        }
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                $this->refreshProducto();
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
                $this->refreshProducto();
                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                $this->refreshProducto();
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
                $this->refreshProducto();
                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                $this->refreshProducto();
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
                $this->refreshProducto();
                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                $this->refreshProducto();
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
                $this->refreshProducto();
                return $this;
        }
    }







?>