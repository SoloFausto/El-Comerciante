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

        static function loadAllCombos($conn){
                $sql = "SELECT *  FROM `combo` WHERE `activo` = 1"; 
                $result = mysqli_query($conn,$sql);
                $respuesta = array();
                while($objetoArray = mysqli_fetch_object($result)){ // creamos un loop que vaya por los resultados
                    $comandaArray = new combo($conn); // creamos una objeto combo por cada resultado
                    $comandaArray->initCombo($objetoArray->id,$objetoArray->nombre,$objetoArray->descripcion,$objetoArray->precio);
                    array_push($respuesta,$comandaArray); // ponemos los objetos en el array
                }
                return $respuesta; // devolvemos el array
        }
        function initCombo($id,$nombre,$descripcion,$precio){
                $this->id = $id;
                $this->nombre = $nombre;
                $this->descripcion = $descripcion;
                $this->precio = $precio;
            }
        function newCombo($nombre,$descripcion,$precio){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
            $sql = "INSERT INTO `combo` (`id`, `nombre`, `descripcion`, `precio`, `activo`) VALUES (NULL, '$nombre', '$descripcion', '$precio',1);";
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
        function eliminarCombo(){
                $sql = "UPDATE `combo` SET `activo` = 0 WHERE `id` = $this->id;";
                $result = mysqli_query($this->conn,$sql);
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
                $this->modifyCombo();
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
                $this->modifyCombo();
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
                $this->modifyCombo();
                return $this;
        }
    }
    ?>