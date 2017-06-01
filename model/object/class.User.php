<?php
  /**
   *
   */
   include 'class.Persona.php';
  class User extends Persona
  {
    //User
    protected $User;
    protected $Password;
    protected $Estado;
    protected $Rol;

    function __construct($user, $password)
    {
      $this->User = $user;
      $this->Password = $password;
    }

    //set USER
    public function setUser($user){$this->User = $user;}
    public function setPassword($password){$this->Password = $password;}
    public function setEstado($estado){$this->Estado  = $estado;}
    public function setRol($rol){$this->Rol = $rol;}

    //get USER
    public function getUser(){return $this->User;}
    public function getPassword(){return $this->Password;}
    public function getEstado(){return $this->Estado;}
    public function getRol(){return $this->Rol;}
  }
 ?>
