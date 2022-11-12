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
        $sql = "SELECT `idEnvase` FROM `comanda_envase_helado` WHERE `numComanda` = $idComanda GROUP BY numEnvase;";
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
         $respuesta = array();
         if ($resultsql = mysqli_query($conn,$sql)) {
             while ($objetoArray = mysqli_fetch_object($resultsql)) {
                     $helado = new helado ($conn);
                     $helado->setId($objetoArray->idHelado);
                     array_push($respuesta,$helado);
             }
           }
        return $respuesta;
            

    }
    static function getRelatedHeladosCantidad($numEnvase,$idComanda,$conn){
        $sql = "SELECT `cantidad` FROM `comanda_envase_helado` WHERE `numEnvase` = $numEnvase AND `numcomanda` = $idComanda ;";
         $respuesta = array();
         if ($resultsql = mysqli_query($conn,$sql)) {
             while ($objetoArray = mysqli_fetch_object($resultsql)) {
                     array_push($respuesta,$objetoArray->cantidad);
             }
           }
        return $respuesta;
            

    }
    static function getRelatedHeladosComanda($idComanda,$conn){
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