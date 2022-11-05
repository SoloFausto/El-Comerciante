<?php
class helado{
    private $id;
    private $nombre;
    private $descripcion;
    private $conn;
    function __construct($conn){
        $this->conn = $conn;
    }
    static function loadAllHelados($conn){
        $sql = "SELECT *  FROM `helado` WHERE activo = 1;"; 
        $result = mysqli_query($conn,$sql);
        $respuesta = array();
        while($objetoArray = mysqli_fetch_object($result)){ // creamos un loop que vaya por los resultados
            $comandaArray = new helado($conn); // creamos una objeto envase por cada resultado
            $comandaArray->initHelado($objetoArray->id,$objetoArray->nombre,$objetoArray->descripcion);
            array_push($respuesta,$comandaArray); // ponemos los objetos en el array
        }
        return $respuesta; // devolvemos el array
}
    /**subir nuevo sabor de helados a la base de datos */
    function newHelado($nombre,$descripcion){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $sql = "INSERT INTO `helado` (`id`, `nombre`, `descripcion`) VALUES (NULL, '$nombre', '$descripcion');";
        $reusltsql = mysqli_query($this->conn,$sql);
    /* El codigo de abajo recupera la id de el helado que recien creamos*/
        $getIdSql = "SELECT `id` FROM `helado` WHERE `nombre` LIKE '$nombre' AND `descripcion` LIKE '$descripcion';";
        $resultQueryId = mysqli_query($this->conn,$getIdSql);
        $resultObjId = mysqli_fetch_object($resultQueryId);
        $this->id = $resultObjId->id;


    }
    function initHelado($id,$nombre,$descripcion){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
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
        $sql = "UPDATE `helado` SET `activo` = 0 WHERE `id` = $this->id;";
        mysqli_query($this->conn,$sql);
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