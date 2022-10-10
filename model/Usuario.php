<?php
class usuario {
    protected $id;
    protected $nombre;
    protected $contrasena;
    protected $permComandas;
    protected $permSLComandas;
    protected $permMenu;
    protected $permUsuarios;
    protected $permEsTableta;
    protected $conn;
    function __construct($conn){
        $this->conn = $conn;
    }
    function newUser($nombre,$contrasena,$permComandas,$permSLComandas,$permMenu,$permUsuarios,$permEsTableta){
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->permComandas = $permComandas;
        $this->permSLComandas = $permSLComandas;
        $this->permMenu = $permMenu;
        $this->permUsuarios = $permUsuarios;
        $this->permEsTableta = $permEsTableta;
        $sql = "INSERT INTO `usuario` (`nombre`, `contrasena`, `permComandas`, `permSLComandas`, `permMenu`, `permUsuarios`, `permEsTableta`)
        VALUES (NULL, '$nombre', '$contrasena', b'$permComandas', b'$permSLComandas', b'$permMenu', b'$permUsuarios', b'$permEsTableta');";
        $result = mysqli_query($this->conn,$sql);
    /* El codigo de abajo recupera la id de el helado que recien creamos*/

        $getIdSql = "SELECT id  FROM `usuario` WHERE `nombre` LIKE '$this->nombre' AND `contrasena` LIKE '$this->contrasena';";
        $getIdquery = mysqli_query($this->conn,$getIdSql);
        $resultObjId = mysqli_fetch_object($getIdquery);
        $this->id = $resultObjId->id;
        
    }
    function loadUserById($id){
        $sql = "SELECT *  FROM `usuario` WHERE `id` = $id;";
        $result = mysqli_query($this->conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        $this->id = $id;
        $this->nombre = $resultObj->nombre;
        $this->contrasena = $resultObj->contrasena;
        $this->permComandas = $resultObj->permComandas;
        $this->permSLComandas = $resultObj->permSLComandas;
        $this->permMenu = $resultObj->permMenu;
        $this->permUsuarios = $resultObj->permUsuarios;
        $this->permEsTableta = $resultObj->permEsTableta;
    }
    function loadUserByPassw($nombre, $contrasena){
        $sql = "SELECT * FROM `usuario` WHERE `nombre` = '$nombre' AND `contrasena` = '$contrasena'";
        $result = mysqli_query($this->conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        if(!isset($query)){ /*Ponemos todo este codigo en un if para saber si hay una respuesta de la base de datos*/
            return false;
          }
        else{
            $this->id = $resultObj->id;
            $this->nombre = $resultObj->nombre;
            $this->contrasena = $resultObj->contrasena;
            $this->permComandas = $resultObj->permComandas;
            $this->permSLComandas = $resultObj->permSLComandas;
            $this->permMenu = $resultObj->permMenu;
            $this->permUsuarios = $resultObj->permUsuarios;
            $this->permEsTableta = $resultObj->permEsTableta;
            return true;
        }

    }
    function modifyUser(){
        $sql = "UPDATE `usuario` SET `nombre` = '$this->nombre', `contrasena` = '$this->contrasena', `permComandas` = b'$this->permComandas', `permSLComandas` = b'$this->permSLComandas', `permMenu` = b'$this->permMenu ', `permUsuarios` = b'$this->permUsuarios', `permEsTableta` = b'$this->permEsTableta' WHERE `usuario`.`id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);

    }
    function deleteUser(){
        $sql = "DELETE FROM usuario WHERE `usuario`.`id` = $this->id";
        $this->id = NULL;
        $this->nombre = "";
        $this->contrasena = "";
        $this->permComandas = 0;
        $this->permSLComandas = 0;
        $this->permMenu = 0;
        $this->permUsuarios = 0;
        $this->permEsTableta = 0;
    }
    function refreshUser(){
        $sql = "SELECT *  FROM `usuario` WHERE `id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $resultObj = mysqli_fetch_object($result);
        $this->nombre = $resultObj->nombre;
        $this->contrasena = $resultObj->contrasena;
        $this->permComandas = $resultObj->permComandas;
        $this->permSLComandas = $resultObj->permSLComandas;
        $this->permMenu = $resultObj->permMenu;
        $this->permUsuarios = $resultObj->permUsuarios;
        $this->permEsTableta = $resultObj->permEsTableta;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        $this->refreshUser();
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
        $this->refreshUser(); 
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
        $sql = "UPDATE `usuario` SET `nombre` = '$nombre' WHERE `id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        return $this;
    }

    /**
     * Get the value of contrasena
     */ 
    public function getContrasena()
    {
        $this->refreshUser();
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena($contrasena)
    {
        $sql = "UPDATE `usuario` SET `contrasena` = '$contrasena' WHERE `id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $this->contrasena = $contrasena;
        echo "";
        return $this;
    }

    /**
     * Get the value of permComandas
     */ 
    public function getPermComandas()
    {
        $this->refreshUser();
        return $this->permComandas;
    }

    /**
     * Set the value of permComandas
     *
     * @return  self
     */ 
    public function setPermComandas($permComandas)
    {
        $sql = "UPDATE `usuario` SET `permComandas` = b'$permComandas' WHERE `usuario`.`id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $this->permComandas = $permComandas;

        return $this;
    }

    /**
     * Get the value of permSLComandas
     */ 
    public function getPermSLComandas()
    {
        $this->refreshUser();
        return $this->permSLComandas;
    }

    /**
     * Set the value of permSLComandas
     *
     * @return  self
     */ 
    public function setPermSLComandas($permSLComandas)
    {
        $sql = "UPDATE `usuario` SET `permSLComandas` = b'$permSLComandas' WHERE `usuario`.`id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $this->permSLComandas = $permSLComandas;

        return $this;
    }

    /**
     * Get the value of permMenu
     */ 
    public function getPermMenu()
    {
        $this->refreshUser();
        return $this->permMenu;
    }

    /**
     * Set the value of permMenu
     *
     * @return  self
     */ 
    public function setPermMenu($permMenu)
    {
        $sql = "UPDATE `usuario` SET `permMenu` = b'$permMenu' WHERE `usuario`.`id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $this->permMenu = $permMenu;

        return $this;
    }

    /**
     * Get the value of permUsuarios
     */ 
    public function getPermUsuarios()
    {
        $this->refreshUser();
        return $this->permUsuarios;
    }

    /**
     * Set the value of permUsuarios
     *
     * @return  self
     */ 
    public function setPermUsuarios($permUsuarios)
    {
        $sql = "UPDATE `usuario` SET `permUsuarios` = b'$permUsuarios' WHERE `usuario`.`id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $this->permUsuarios = $permUsuarios;

        return $this;
    }

    /**
     * Get the value of permEsTableta
     */ 
    public function getPermEsTableta()
    {
        $this->refreshUser();
        return $this->permEsTableta;
    }

    /**
     * Set the value of permEsTableta
     *
     * @return  self
     */ 
    public function setPermEsTableta($permEsTableta)
    {
        $sql = "UPDATE `usuario` SET `permEsTableta` = b'$permEsTableta' WHERE `usuario`.`id` = $this->id;";
        $result = mysqli_query($this->conn,$sql);
        $this->permEsTableta = $permEsTableta;

        return $this;
    }
}