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
        static function loadAllEnvs($conn){
                $sql = "SELECT *  FROM `envase`"; 
                $result = mysqli_query($conn,$sql);
                $respuesta = array();
                while($objetoArray = mysqli_fetch_object($result)){ // creamos un loop que vaya por los resultados
                    $comandaArray = new envase($conn); // creamos una objeto envase por cada resultado
                    $comandaArray->initEnvase($objetoArray->id,$objetoArray->nombre,$objetoArray->descripcion,$objetoArray->capacidad,$objetoArray->precio);
                    array_push($respuesta,$comandaArray); // ponemos los objetos en el array
                }
                return $respuesta; // devolvemos el array
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
        function initEnvase($id,$nombre,$descripcion,$capacidad,$precio){
                $this->nombre = $nombre;
                $this->descripcion = $descripcion;
                $this->capacidad = $capacidad;
                $this->precio = $precio;
                $this->id = $id;
            }
        function loadEnvaseById ($id){
            $sql = "SELECT *  FROM `envase` WHERE `id` = $id;";
            $result = mysqli_query($this->conn,$sql);
            $resultObj = mysqli_fetch_object($result);
            $this->id = $id;
            $this->nombre = $resultObj->nombre;
            $this->descripcion = $resultObj->descripcion;
            $this->capacidad = $resultObj->capacidad;
            $this->precio = $resultObj->precio;
        }
        function refreshEnvase(){
            $sql = "SELECT *  FROM `envase` WHERE `id` = $this->id;";
            $result = mysqli_query($this->conn,$sql);
            $resultObj = mysqli_fetch_object($result);
            $this->nombre = $resultObj->nombre;
            $this->descripcion = $resultObj->descripcion;
            $this->capacidad = $resultObj->capacidad;
            $this->precio = $resultObj->precio;
        }
        function modifyEnvase(){
            $sql = "UPDATE `envase` SET `nombre` = '$this->envase', `descripcion` = '$this->descripcion', `capacidad` = '$this->capacidad', `precio` = '$this->precio' WHERE `envase`.`id` = $this->id;";
            $result = mysqli_query($this->conn,$sql);
        }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
            
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

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
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

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
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

                return $this;
        }

        /**
         * Get the value of capacidad
         */ 
        public function getCapacidad()
        {
                return $this->capacidad;
        }

        /**
         * Set the value of capacidad
         *
         * @return  self
         */ 
        public function setCapacidad($capacidad)
        {
                $this->capacidad = $capacidad;

                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {

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

                return $this;
        }
    }


?>