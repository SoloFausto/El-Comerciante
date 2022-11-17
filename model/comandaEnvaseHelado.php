<?php
// {}
class comandaEnvaseHelado {
    static function newComandaEnvaseHelado($idEnvase,$idHelado,$idComanda,$numEnvase,$conn){
        $sql = "INSERT INTO `comanda_envase_helado` (`idEnvase`, `idHelado`, `numComanda`, `numEnvase`, `cantidad`) VALUES ('$idEnvase', '$idHelado', '$idComanda', '$numEnvase', '1');";
        mysqli_query($conn,$sql);

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
        $sql = "SELECT DISTINCT `idEnvase` FROM `comanda_envase_helado` WHERE `numComanda` = $idComanda;";
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