<?php
    class producto{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        public $conn;
        private $cantidad;
        function __construct($conn){
            $this->conn = $conn;
        }
        static function loadAllProds($conn){
                $sql = "SELECT *  FROM `producto` WHERE `activo` = 1"; 
                $result = mysqli_query($conn,$sql);
                $respuesta = array();
                while($objetoArray = mysqli_fetch_object($result)){ // creamos un loop que vaya por los resultados
                    $comandaArray = new producto($conn); // creamos una objeto comanda por cada resultado
                    $comandaArray->initProducto($objetoArray->id,$objetoArray->nombre,$objetoArray->descripcion,$objetoArray->precio,NULL);
                    array_push($respuesta,$comandaArray); // ponemos los objetos en el array
                }
                return $respuesta; // devolvemos el array
        }
        static function getRelatedProds($conn,$idComanda){ // conseguimos todos los productos que esten relacionados con una comanda en especifico
                $sql = "SELECT producto.nombre, producto.descripcion, producto.precio, producto.id, producto_comanda.cantidad
                FROM producto,producto_comanda,comanda 
                WHERE ((producto_comanda.idProducto  = producto.id) AND (producto_comanda.numComanda = comanda.id)) 
                AND comanda.id = $idComanda ;";
                $respuesta = array();
                if ($result = mysqli_query($conn, $sql)) {
                        while ($objetoArray = mysqli_fetch_object($result)) {
                                $comandaArray = new producto ($conn);
                                $comandaArray->initProducto($objetoArray->id,$objetoArray->nombre,$objetoArray->descripcion,$objetoArray->precio,$objetoArray->cantidad);

                                array_push($respuesta,$comandaArray);
                        }
                        mysqli_free_result($result);
                      }
                return $respuesta;
            }
            function initProducto($id,$nombre,$descripcion,$precio,$cantidad){
                $this->id = $id;
                $this->nombre = $nombre;
                $this->descripcion = $descripcion;
                $this->precio = $precio;
                $this->cantidad = $cantidad;
            }
        function newProducto($nombre,$descripcion,$precio){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
            $sql = "INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`) VALUES (NULL, '$nombre', '$descripcion', '$precio');";
            $result = mysqli_query($this->conn,$sql);
    /* El codigo de abajo recupera la id de el helado que recien creamos*/
            $getIdSql = "SELECT `id` FROM `producto` WHERE `nombre` LIKE '$nombre' AND `descripcion` LIKE '$descripcion';";
            $resultQueryId = mysqli_query($this->conn,$getIdSql);
            $resultObjId = mysqli_fetch_object($resultQueryId);
            $this->id = $resultObjId->id;
        }
        function loadProductoById ($id){
            $sql = "SELECT * FROM `producto` WHERE `id` = $id;";
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
                $sql = "UPDATE `producto` SET `nombre` = '$this->nombre', `descripcion` = '$this->descripcion', `precio` = '$this->precio' WHERE `id` = $this->id;";
                $result = mysqli_query($this->conn,$sql);
        }
        function eliminarProducto(){
                $sql = "UPDATE `producto` SET `activo` = 0 WHERE `id` = $this->id;";
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
                $this->modifyProducto();
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
                $this->modifyProducto();
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
                $this->modifyProducto();
                return $this;
        }
    }







?>