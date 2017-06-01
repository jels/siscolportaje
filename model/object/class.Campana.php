<?php
/**
 *
 */
 class TipoCampana
 {
   public $IdTipoCampana;
   public $NombreTipoCampana;
   function __construct(){   }

   public function setIdTipoCampana($idTipoCampana){$this->IdTipoCampana = $idTipoCampana;}
   public function setNombreTipoCampana($nombreTipoCampana){$this->NombreTipoCampana = $nombreTipoCampana;}

   public function getIdTipoCampana(){return $this->IdTipoCampana;}
   public function getNombreTipoCampana(){return $this->NombreTipoCampana;}
 }

 /**
  *
  */
class Campana extends TipoCampana
{
  public $IdCampana;
  public $IdMision;
  public $NombreCampana;
  public $FechaInicio;
  public $FechaFinal;
  public $Gestion;
  public $Estado;

  function __construct(){  }

  public function setNombre($nombre){$this->Nombre = $nombre;}
  public function setFechaInicio($fechaInicio){$this->FechaInicio =  $fechaInicio;}
  public function setFechaFinal($fechaFinal){$this->FechaFinal  = $fechaFinal;}
  public function setGestion($gestion){$this->Gestion = $gesttion;}
  public function setEstado($estado){$this->Estado = $estado;}

  public function getNombre(){return $this->Nombre;}
  public function getFechaInicio(){return $this->FechaInicio;}
  public function getFechaFinal(){return $this->FechaFinal;}
  public function getGestion(){return $this->Gestion;}
  public function getEstado(){return $this->Estado;}
}

 ?>
