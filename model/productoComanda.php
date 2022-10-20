<?php
    require "producto.php";
    require "comanda.php";
    class productoComanda{
        private $idProducto;
        private $id;
        private $conn;
        private $cantidad;
        function __construct($conn){
            $this->conn = $conn;
        }
        function newidProductoIdComanda($idProducto,$id,$cantidad){
            $this->cantidad = $cantidad;
            $this->idProducto = $idProducto;
            $this->id = $id;
            $sql = "INSERT INTO `producto_comanda` (`idProducto`, `id`, `cantidad`) VALUES ('$idProducto', '$id', '$cantidad');";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_object($result);
        }
        function initProductoComanda($idProducto,$id,$cantidad){
            $this->cantidad = $cantidad;
            $this->idProducto = $idProducto;
            $this->id = $id;
        }
        function load(){
            $sql = "SELECT *  FROM `producto_comanda` WHERE `idProducto` = $this->idProducto;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function load2(){
            $sql = "SELECT *  FROM `producto_comanda` WHERE `id` = $this->id;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function deleteProductoComanda(){
            $sql = "DELETE FROM `producto_comanda` WHERE `idProducto` = $this->idProducto AND `id` = $this->id;";
            $result = mysqli_query($this->conn,$sql);
        }
        function deleteFromComanda($id){
            $sql = "DELETE FROM `producto_comanda` WHERE `idProducto` = $this->idProducto";
            mysqli_query($this->conn,$sql);
        }

        /**
         * Get the value of cantidad
         */ 
        public function getCantidad()
        {

            return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */ 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;
                $sql = "UPDATE `producto_comanda` SET `cantidad` = '$cantidad' WHERE `producto_comanda`.`idProducto` = $this->idProducto AND `producto_comanda`.`id` = $this->id";
                $result = mysqli_query($this->conn,$sql);
                return $this;
        }
    }

?>