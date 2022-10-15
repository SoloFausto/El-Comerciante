<?php
    require "producto.php";
    require "comanda.php";
    class productoComanda{
        private $idProducto;
        private $numComanda;
        private $conn;
        private $cantidad;
        function __construct($conn){
            $this->conn = $conn;
        }
        function newidProductoIdComanda($idProducto,$numComanda,$cantidad){
            $this->cantidad = $cantidad;
            $this->idProducto = $idProducto;
            $this->numComanda = $numComanda;
            $sql = "INSERT INTO `producto_comanda` (`idProducto`, `numComanda`, `cantidad`) VALUES ('$idProducto', '$numComanda', '$cantidad');";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_object($result);
        }
        function initProductoComanda($idProducto,$numComanda,$cantidad){
            $this->cantidad = $cantidad;
            $this->idProducto = $idProducto;
            $this->numComanda = $numComanda;
        }
        function load(){
            $sql = "SELECT *  FROM `producto_comanda` WHERE `idProducto` = $this->idProducto;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function load2(){
            $sql = "SELECT *  FROM `producto_comanda` WHERE `numComanda` = $this->numComanda;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function deleteProductoComanda(){
            $sql = "DELETE FROM `producto_comanda` WHERE `idProducto` = $this->idProducto AND `numComanda` = $this->numComanda;";
            $result = mysqli_query($this->conn,$sql);
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
                $sql = "UPDATE `producto_comanda` SET `cantidad` = '$cantidad' WHERE `producto_comanda`.`idProducto` = $this->idProducto AND `producto_comanda`.`numComanda` = $this->numComanda";
                $result = mysqli_query($this->conn,$sql);
                return $this;
        }
    }

?>