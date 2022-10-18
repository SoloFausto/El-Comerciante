<?php
class comanda {
    protected $id;
    protected $mesa;
    protected $total;
    protected $estado;
    protected $fecha;
    protected $conn;
    function __construct($conn){
        $this->conn = $conn;
    }
    function newComanda($mesa,$total,$estado,$fecha){
        $this->mesa = $mesa;
        $this->total = $total;
        $this->estado = $estado;
        $this->fecha = $fecha;
        $sql = "INSERT INTO `comanda` (`mesa`, `total`, `estado`, `fecha`)
        VALUES ('$mesa', '$total', '$estado', '$fecha');";
        $result = mysqli_query($this->conn,$sql);  
    }
    //El siguiente código es para sacar de la BD los datos de una comanda utilizando como input el número de la misma
    function cargarComandaPorNumero($id){
        $sql = "SELECT *  FROM `comanda` WHERE `id` = $id;";
        $result = mysqli_query($this->conn,$sql);
        $resultadoObj = mysqli_fetch_object($result);
        $this->mesa = $resultadoObj->$mesa;
        $this->total = $resultadoObj->$total;
        $this->estado = $resultadoObj->$estado;
        $this->fecha = $resultadoObj->$fecha;
    }
    
    function modifyComanda(){
        $sql = "UPDATE `comanda` SET `nombre` = '$this->nombre', `contrasena` = '$this->contrasena', `permComandas` = b'$this->permComandas', `permSLComandas` = b'$this->permSLComandas', `permMenu` = b'$this->permMenu ', `permComandas` = b'$this->permComandas', `permEsTableta` = b'$this->permEsTableta' WHERE `comanda`.`id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
    }
    function deleteComanda(){
        $sql = "DELETE FROM comanda WHERE `comanda`.`id` = $this->id";
    }
    function refreshComanda(){
        $sql = "SELECT *  FROM `comanda` WHERE `id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $resultadoObj = mysqli_fetch_object($result);
        $this->mesa = $resultadoObj->$mesa;
        $this->total = $resultadoObj->$total;
        $this->estado = $resultadoObj->$estado;
        $this->fecha = $resultadoObj->$fecha;
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

        return $this;
    }

    /**
     * Get the value of mesa
     */ 
    public function getMesa()
    {
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

        return $this;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
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

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
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

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
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

        return $this;
    }
}