<?php

    class comboEnvase{
        private $idEnvase;
        private $idCombo;
        private $conn;
        private $cantidad;
        function __construct($conn){
            $this->conn = $conn;
        }
        function newidComboIdEnvase($idEnvase,$idCombo,$cantidad){
            $this->cantidad = $cantidad;
            $this->idEnvase = $idEnvase;
            $this->idCombo = $idCombo;
            $sql = "INSERT INTO `combo_envase` (`idEnvase`, `idCombo`, `cantidad`) VALUES ('$idEnvase', '$idCombo', '$cantidad');";
            $result = mysqli_query($this->conn,$sql);
        }
        function initComboEnvase($idEnvase,$idCombo,$cantidad){
            $this->cantidad = $cantidad;
            $this->idEnvase = $idEnvase;
            $this->idCombo = $idCombo;
        }
        function loadDeIdEnvase(){
            $sql = "SELECT *  FROM `combo_envase` WHERE `idEnvase` = $this->idEnvase;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function loadDeIdCombo(){
            $sql = "SELECT *  FROM `combo_envase` WHERE `idCombo` = $this->idCombo;";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_array($result);
            return $resultadoObj;
        }
        function deleteComboenvase(){
            $sql = "DELETE FROM `combo_envase` WHERE `idEnvase` = $this->idEnvase AND `idCombo` = $this->idCombo;";
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
                $sql = "UPDATE `combo_envase` SET `cantidad` = '$cantidad' WHERE `combo_envase`.`idEnvase` = $this->idEnvase AND `combo_envase`.`idCombo` = $this->idCombo";
                $result = mysqli_query($this->conn,$sql);
                return $this;
        }
    }

?>