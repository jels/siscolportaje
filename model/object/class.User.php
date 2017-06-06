<?php
  class User extends Persona
  {
    //User
    public $IdUSer;
    protected $IdRol;
    protected $User;
    protected $Password;
    protected $Estado;
    protected $Rol;

    function __construct()
    { }

    //set USER
    public function setIdUser($idUser = 6){$this->IdUSer = $idUser;}
    public function setIdRol($idRol){$this->IdRol = $idRol;}
    public function setUser($user){$this->User = $user;}
    public function setPassword($password){$this->Password = $password;}
    public function setEstado($estado){$this->Estado  = $estado;}
    public function setRol($rol){$this->Rol = $rol;}

    //get USER
    public function getIdUser(){return $this->IdUSer;}
    public function getIdRol(){return $this->IdRol;}
    public function getUser(){return $this->User;}
    public function getPassword(){return $this->Password;}
    public function getEstado(){return $this->Estado;}
    public function getRol(){return $this->Rol;}
  }
 ?>
