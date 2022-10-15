<?php
    require "combo.php";
    require "comanda.php";
    class comboComanda{
        private $idCombo;
        private $numComanda;
        private $conn;
        private $cantidad;
        function __construct($conn){
            $this->conn = $conn;
        }
        function newIdComboIdComanda($idCombo,$numComanda,$cantidad){
            $this->cantidad = $cantidad;
            $this->idCombo = $idCombo;
            $this->numComanda = $numComanda;
            $sql = "INSERT INTO `combo_comanda` (`idCombo`, `numComanda`, `cantidad`) VALUES ('$idCombo', '$numComanda', '$cantidad');";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_object($result);
        }
        function initComboComanda($idCombo,$numComanda,$cantidad){
            $this->cantidad = $cantidad;
            $this->idCombo = $idCombo;
            $this->numComanda = $numComanda;
        }
        function load(){
            $sql = "SELECT *  FROM `combo_comanda` WHERE `idCombo` = $this->idCombo;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function load2(){
            $sql = "SELECT *  FROM `combo_comanda` WHERE `numComanda` = $this->numComanda;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function deleteComboComanda(){
            $sql = "DELETE FROM `combo_comanda` WHERE `idCombo` = $this->idCombo AND `numComanda` = $this->numComanda;";
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
                $sql = "UPDATE `combo_comanda` SET `cantidad` = '$cantidad' WHERE `combo_comanda`.`idCombo` = $this->idCombo AND `combo_comanda`.`numComanda` = $this->numComanda";
                $result = mysqli_query($this->conn,$sql);
                return $this;
        }
    }

?>