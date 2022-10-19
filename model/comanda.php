<?php
class comanda {
    protected $id;
    protected $mesa;
    protected $total;
    protected $estado;
    protected $fecha;
    protected $forma_pago;
    protected $conn;

    static function cargarComandaPendiente($conn){
        $sql = "SELECT *  FROM `comanda` WHERE `estado` = 1;";
        $result = mysqli_query($conn,$sql);
        if (!$result) { die("Query Failed."); }
        $respuesta = array();
        while($objetoArray = mysqli_fetch_object($result)){
            $comandaArray = new Comanda($conn);
            $comandaArray->initcomanda($objetoArray->id,$objetoArray->mesa,$objetoArray->total,$objetoArray->estado,$objetoArray->fecha,$objetoArray->forma_pago);
            array_push($respuesta,$comandaArray);
        }
        return $respuesta;

    }
    function __construct($conn){
        $this->conn = $conn;
    }
    function newComanda($mesa,$total,$estado,$fecha,$forma_pago){
        $this->mesa = $mesa;
        $this->total = $total;
        $this->estado = $estado;
        $this->fecha = $fecha;
        $this->forma_pago = $forma_pago;
        $sql = "INSERT INTO `comanda` (`mesa`, `total`, `estado`, `fecha`,`forma_pago`)
        VALUES ('$mesa', '$total', '$estado', '$fecha','$forma_pago');";
        $result = mysqli_query($this->conn,$sql);  
    }
    //El siguiente código es para sacar de la BD los datos de una comanda utilizando como input el número de la misma
    function cargarComandaPorNumero($id){
        $sql = "SELECT *  FROM `comanda` WHERE `id` = $id;";
        $result = mysqli_query($this->conn,$sql);
        $resultadoObj = mysqli_fetch_object($result);
        $this->mesa = $resultadoObj->mesa;
        $this->total = $resultadoObj->total;
        $this->estado = $resultadoObj->estado;
        $this->fecha = $resultadoObj->fecha;
        $this->forma_pago = $resultadoObj->forma_pago;
    }
    function initcomanda($id,$mesa,$total,$estado,$fecha,$forma_pago){
        $this->id = $id;
        $this->mesa = $mesa;
        $this->total = $total;
        $this->estado = $estado;
        $this->fecha = $fecha;
        $this->forma_pago = $forma_pago;
    }
    function modifyComanda(){
        $sql = "UPDATE `comanda` SET ´mesa' = $this->mesa,`total` = $this->total, `estado` = $this->estado, `fecha` = $this->fecha,`forma_pago` = $this->forma_pago;"; 
                $result = mysqli_query($this->conn,$sql);
    }
    function deleteComanda(){
        $sql = "DELETE FROM comanda WHERE `comanda`.`id` = $this->id";
    }
    function refreshComanda(){
        $sql = "SELECT *  FROM `comanda` WHERE `id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $resultadoObj = mysqli_fetch_object($result);
        $this->mesa = $resultadoObj->mesa;
        $this->total = $resultadoObj->total;
        $this->estado = $resultadoObj->estado;
        $this->fecha = $resultadoObj->fecha;
        $this->forma_pago = $resultadoObj->forma_pago;
    }



    /**
     * Get the value of id
     */ 
    public function getid()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setid($id)
    {
        $this->id = $id;
        $this->refreshComanda();
        return $this;
    }

    /**
     * Get the value of mesa
     */ 
    public function getMesa()
    {
        $this->refreshComanda();
        return $this->mesa;
    }

    /**
     * Set the value of mesa
     *
     * @return  self
     */ 
    public function setMesa($mesa)
    {
        $this->mesa = $mesa;
        $this->modifyComanda();
        return $this;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        $this->refreshComanda();
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */ 
    public function setTotal($total)
    {
        $this->total = $total;
        $this->modifyComanda();
        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        $this->refreshComanda();
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;
        $this->modifyComanda();
        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        $this->refreshComanda();
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        $this->modifyComanda();
        return $this;
    }

    /**
     * Get the value of forma_pago
     */ 
    public function getForma_pago()
    {
        $this->refreshComanda();
        return $this->forma_pago;
    }

    /**
     * Set the value of forma_pago
     *
     * @return  self
     */ 
    public function setForma_pago($forma_pago)
    {
        $this->forma_pago = $forma_pago;
        $this->modifyComanda();
        return $this;
    }
}