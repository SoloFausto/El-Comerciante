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
    static function getRealtedEnvs($numEnvase,$idComanda,$conn){
        $sql = "SELECT `idEnvase` FROM `comanda_envase_helado` WHERE `numComanda` = $idComanda AND `numEnvase` = $numEnvase;";
        $resultsql = mysqli_query($conn,$sql);
        $objetoArray = mysqli_fetch_object($resultsql);
        $envase = new envase ($conn);
        $envase->setId($objetoArray->idEnvase);
                return $envase;
    }
    static function getRelatedEnvsComanda($idComanda,$conn){
<<<<<<< HEAD
        $sql = "SELECT DISTINCT `idEnvase` FROM `comanda_envase_helado` WHERE `numComanda` = $idComanda;";
=======
        $sql = "SELECT `idEnvase` FROM `comanda_envase_helado` WHERE `numComanda` = $idComanda AND `numEnvase` = $numEnvase;";
>>>>>>> parent of 020e949 (pq)
        $respuesta = array();
        if ($resultsql = mysqli_query($conn,$sql)) {
            while ($objetoArray = mysqli_fetch_object($resultsql)) {
                    $comandaArray = new envase ($conn);
                    $comandaArray->setId($objetoArray->idEnvase);
                    array_push($respuesta,$comandaArray);
            }
          }
    return $respuesta;
    }
    static function getRelatedHelados($numEnvase,$idComanda,$conn){
        $sql = "SELECT `idHelado` FROM `comanda_envase_helado` WHERE `numEnvase` = $numEnvase AND `numcomanda` = $idComanda ;";
        $result = mysqli_query($conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        $rr = $resultObj->idHelado;
        echo gettype($resultObj);
        $helado = new helado ($conn);
        $helado->setId(0);
                return $helado;
    }
    static function getIdHeladoFromCEH($idComanda,$conn){
        $sql = "SELECT `idHelado`,`cantidad`,`idEnvase` FROM `comanda_envase_helado` WHERE `idComanda` = $idComanda ;";
        $respuesta = array();
        if ($resultsql = mysqli_query($conn,$sql)) {
            while ($objetoArray = mysqli_fetch_object($resultsql)) {
                    $comandaArray = new envase ($conn);
                    $comandaArray->setId($objetoArray->idEnvase);
                    array_push($respuesta,$comandaArray);
            }
          }
    return $respuesta;
    }
    
}


?>