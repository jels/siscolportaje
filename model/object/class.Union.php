<?php
  /**
   *
   */
  class Union
  {
      public $IdUnion;
      public $NombreUnion;

    function __construct(){}

      public function setIdUnion($idUnion){$this->IdUnion = $idUnion;}
      public function setNombreUnion($nombreUnion){$this->NombreUnion = $nombreUnion;}

      public function getIdUnion(){return $this->IdUnion;}
      public function getNombreUnion(){return $this->NombreUnion;}
  }

?>
