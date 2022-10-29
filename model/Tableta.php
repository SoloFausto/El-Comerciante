<?php
class tableta {
    protected $id;
    protected $nombre;
    protected $contrasena;
    protected $permEsTableta = 1;
    protected $conn;
    function __construct($conn){
        $this->conn = $conn;
    }
    function newTableta($nombre,$contrasena,$permEsTableta){
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->permEsTableta = $permEsTableta;
        $sql = "INSERT INTO `usuario` (`nombre`, `contrasena`, `permEsTableta`)
        VALUES (NULL, '$nombre', '$contrasena', b'$permEsTableta');";
        $result = mysqli_query($this->conn,$sql);
    /* El codigo de abajo recupera la id de el helado que recien creamos*/

        $getIdSql = "SELECT id  FROM `usuario` WHERE `contrasena` = BINARY '$this->contrasena';";
        $getIdquery = mysqli_query($this->conn,$getIdSql);
        $resultObjId = mysqli_fetch_object($getIdquery);
        $this->id = $resultObjId->id;
        
    }
    function cargarTabletaCodigo($contrasena){
        $sql = "SELECT *  FROM `usuario` WHERE `contrasena` = $contrasena;";
        $result = mysqli_query($this->conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        $this->id = $resultOBJid;
        $this->nombre = $resultObj->nombre;
        $this->contrasena = $resultObj->contrasena;
    }
    function cargarTabletaLogin($contrasena){
        $sql = "SELECT * FROM `usuario` WHERE `contrasena` = '$contrasena'";
        $result = mysqli_query($this->conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        if(!isset($resultObj)){ /*Ponemos todo este codigo en un if para saber si hay una respuesta de la base de datos*/
            return false;
          }
        else{
            return true;
        }

    }
    function modifyUser(){
        $sql = "UPDATE `usuario` SET `nombre` = BINARY '$this->nombre', `contrasena` = BINARY '$this->contrasena', `permEsTableta` = BINARY b'$this->permEsTableta' WHERE `usuario`.`id` = BINARY $this->id;";
        $result = mysqli_query($this->conn,$sql);

    }
    function deleteUser(){
        $sql = "DELETE FROM usuario WHERE `usuario`.`id` = BINARY $this->id";
        $this->id = NULL;
        $this->nombre = "";
        $this->contrasena = "";
        $this->permEsTableta = 0;
    }
    function refreshUser(){
        $sql = "SELECT *  FROM `usuario` WHERE `id` = BINARY $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        $this->nombre = $resultObj->nombre;
        $this->contrasena = $resultObj->contrasena;
        $this->permEsTableta = $resultObj->permEsTableta;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
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

        return $this;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of contrasena
     */ 
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }
    }