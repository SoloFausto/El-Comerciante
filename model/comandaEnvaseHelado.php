<?php
// {}
class comandaEnvaseHelado {
    private $idEnvase;
    private $idHelado;
    private $idComanda;
    private $numEnvase;
    private $cantidad;
    private $conn;
    function __construct($conn){
        $this->conn = $conn;
    }
    static function getRealtedEnvs($idComanda,$conn){
        $sql = "SELECT DISTINCT `idEnvase` FROM `comanda_envase_helado` WHERE `numComanda` = $idComanda;";
        $respuesta = array();
                if ($reusltsql = mysqli_query($conn,$sql)) {
                        while ($objetoArray = mysqli_fetch_object($reusltsql)) {
                                $comandaArray = new envase ($conn);
                                $comandaArray->setId($objetoArray->idEnvase);
                                array_push($respuesta,$comandaArray);
                        }
                      }
                return $respuesta;
    }
    static function getRelatedHelados($idEnvase,$idComanda,$conn){
        $sql = "SELECT DISTINCT `idHelado`,`cantidad`,`numEnvase` FROM `comanda_envase_helado` WHERE `idEnvase` = $idEnvase AND `idComnada` = $idComanda ;";
        $respuesta = array();
                if ($reusltsql = mysqli_query($conn,$sql)) {
                        while ($objetoArray = mysqli_fetch_object($reusltsql)) {
                                $comandaArray = new helado ($conn);
                                $comandaArray->setId($objetoArray->idHelado);
                                array_push($respuesta,$comandaArray);
                        }
                      }
                return $respuesta;
    }
}


?>