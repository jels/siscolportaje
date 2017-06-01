<?php
/**
 * require 'class.Union.php';
 */

class Mision extends Union
{
  public $IdMision;
  public $NombreMision;

  function __construct(){  }

  public function setIdMision($idMision){$this->IdMision = $idMision;}
  public function setNombreMision($nombreMision){$this->NombreMision = $nombreMision;}

  public function getIdMision(){return $this->IdMision;}
  public function getNombreMision(){return $this->NombreMision;}
}

 ?>
