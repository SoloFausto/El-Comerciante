<?php
//require "comanda.php";
    class comandaStatic{
        static function cargarComandaPendiente($conn){
            $sql = "SELECT *  FROM `comanda` WHERE `estado` = 1;";
            $result = mysqli_query($conn,$sql);
            if (!$result) { die("Query Failed."); }
            $respuesta = array();
            while($objetoArray = mysqli_fetch_object($result)){
                $comandaArray = new comanda($conn);
                $comandaArray->initcomanda($objetoArray->id,$objetoArray->mesa,$objetoArray->total,$objetoArray->estado,$objetoArray->fecha,$objetoArray->forma_pago);
                array_push($respuesta,$comandaArray);
            }
            return $respuesta;
    
        }
    }
?>