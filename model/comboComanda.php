<?php
    require "combo.php";
    class comboComanda{
        private $idCombo;
        private $numCombo;
        private $conn;
        private $cantidad;
        function __construct($conn){
            $this->conn = $conn;
        }
        function newIdComboIdComanda($idCombo,$id,$cantidad){
            $this->cantidad = $cantidad;
            $this->idCombo = $idCombo;
            $this->id = $id;
            $sql = "INSERT INTO `combo_comanda` (`idCombo`, `id`, `cantidad`) VALUES ('$idCombo', '$id', '$cantidad');";
            $result = mysqli_query($this->conn,$sql);
            $resultadoObj = mysqli_fetch_object($result);
        }
        function initComboComanda($idCombo,$id,$cantidad){
            $this->cantidad = $cantidad;
            $this->idCombo = $idCombo;
            $this->id = $id;
        }
        static function loadRealtedCombo($idComanda,$conn){
            $sql = "SELECT `idCombo`  FROM `combo_comanda` WHERE `numComanda` = $idComanda"; 
            $result = mysqli_query($conn,$sql);
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){ // creamos un loop que vaya por los resultados
                $comboArray = new combo($conn); 
                $comboArray->setId($objetoArray->idCombo);
                array_push($respuesta,$comboArray); // ponemos los objetos en el array
            }
            return $respuesta; // devolvemos el array
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
                $sql = "UPDATE `combo_comanda` SET `cantidad` = '$cantidad' WHERE `combo_comanda`.`idCombo` = $this->idCombo AND `combo_comanda`.`id` = $this->id";
                $result = mysqli_query($this->conn,$sql);
                return $this;
        }
    }

?>