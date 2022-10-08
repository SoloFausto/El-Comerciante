<?php
class helado{
    private $id;
    private $nombre;
    private $descripcion;
    private $conn;
    function __construct($conn){
        $this->conn = $conn;
    }
    /**subir nuevo sabor de helados a la base de datos */
    function newHelado($nombre,$descripcion){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $sql = "INSERT INTO `helado` (`id`, `nombre`, `descripcion`) VALUES (NULL, '$nombre', '$descripcion');";
        $result = mysqli_query($this->conn,$sql);

    }
    /**cargar un nuevo sabor de helado por su id */
    function loadHeladoById ($id){
        $sql = "SELECT *  FROM `helado` WHERE `id` = $id;";
        $result = mysqli_query($this->conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        $this->id = $id;
        $this->nombre = $resultObj->nombre;
        $this->descripcion = $resultObj->descripcion;
    }
    /**actualizar sabor de helado ya existente*/
    function refreshHelado (){
        $sql = "SELECT *  FROM `helado` WHERE `id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        $this->nombre = $resultObj->nombre;
        $this->descripcion = $resultObj->descripcion;
        
    }
    function modifyHelado (){
        $sql = "UPDATE `helado` SET `nombre` = '$this->nombre', `descripcion` = '$this->descripcion' WHERE `helado`.`id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
    }
    /**borrar sabor de helado*/
    function deleteHelado(){
        $sql = "DELETE FROM helado WHERE `helado`.`id` = $this->id";
        $this->nombre = "";
        $this->descripcion = "";
        $this->id = "";
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        $this->refreshHelado();
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;
        $this->refreshHelado();
        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        $this->refreshHelado();
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->modifyHelado();
        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        $this->refreshHelado();
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        $this->modifyHelado();
        return $this;
    }
}



?>