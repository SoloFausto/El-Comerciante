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
    static function getRelatedHelados($numEnvase,$idComanda,$conn){
        $sql = "SELECT `idHelado`,`cantidad`,`idEnvase` FROM `comanda_envase_helado` WHERE `numEnvase` = $numEnvase AND `numcomanda` = $idComanda ;";
        $reusltsql = mysqli_query($conn,$sql);
        $objetoArray = mysqli_fetch_object($reusltsql);
        $helado = new helado ($conn);
        $helado->setId($objetoArray->idHelado);
                return $helado;
    }

    
}


?>