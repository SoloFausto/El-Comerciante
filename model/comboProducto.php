<?php
    class comboProducto{
        private $idProducto;
        private $idCombo;
        private $conn;
        private $cantidad;
        function __construct($conn){
            $this->conn = $conn;
        }
        static function verificarIdProductoIdCombo($idCombover,$idProductoVer,$conn){
            $sql = "SELECT *  FROM `combo_producto` WHERE `idCombo` = $idCombover AND `idProducto` = $idProductoVer;";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0){
                return true;
            }
            else {
                return false;
            }
        }
        function newidComboIdProducto($idProducto,$idCombo,$cantidad){
            $this->cantidad = $cantidad;
            $this->idProducto = $idProducto;
            $this->idCombo = $idCombo;
            $sql = "INSERT INTO `combo_producto` (`idProducto`, `idCombo`, `cantidad`) VALUES ('$idProducto', '$idCombo', '$cantidad');";
            $result = mysqli_query($this->conn,$sql);
        }
        function initComboProducto($idProducto,$idCombo,$cantidad){
            $this->cantidad = $cantidad;
            $this->idProducto = $idProducto;
            $this->idCombo = $idCombo;
        }
        function loadDeIdProducto(){
            $sql = "SELECT *  FROM `combo_producto` WHERE `idProducto` = $this->idProducto;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function loadDeIdCombo(){
            $sql = "SELECT *  FROM `combo_producto` WHERE `idCombo` = $this->idCombo;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function deleteComboProducto(){
            $sql = "DELETE FROM `combo_producto` WHERE `idProducto` = $this->idProducto AND `idCombo` = $this->idCombo;";
            $result = mysqli_query($this->conn,$sql);
        }
        static function deleteComboProductoIdCombo($conn,$idCombo){
            $sql = "DELETE FROM `combo_producto` WHERE `idCombo` = $idCombo;";
            $result = mysqli_query($conn,$sql);
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
                $sql = "UPDATE `combo_producto` SET `cantidad` = '$cantidad' WHERE `combo_producto`.`idProducto` = $this->idProducto AND `combo_producto`.`idCombo` = $this->idCombo";
                $result = mysqli_query($this->conn,$sql);
                return $this;
        }
    }

?>