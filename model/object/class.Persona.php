<?php
	/**
*
*/
	class Persona
	{
		//Colportor
		public $IdPersona;
		public $PrimerNombre;
		public $SegundoNombre;
		public $PrimerApellido;
		public $SegundoApellido;
		public $Ci;
		public $LugarExpedicionCI;
		public $Sexo;
		public $FechaNacimiento;
		public $LugarNacimiento;
		public $Pais;
		public $Ciudad;
		public $GradoAcademico;
		public $Universidad;
		public $Facultad;
		public $Carrera;
		public $Celular;
		public $Foto;


		public function __construct(){		}


		//set Colportor
		public function setIdPersona($idPersona){$this->IdPersona = $idPersona;}
		public function setPrimerNombre($primerNombre){$this->PrimerNombre = $primerNombre;}
		public function setSegundoNombre($segundoNombre){$this->SegundoNombre =  $segundoNombre;}
		public function setPrimerApellido($primerApellido){$this->PrimerApellido =  $primerApellido;}
		public function setSegundoApellido($segundoApellido){$this->SegundoApellido = $segundoApellido;}
		public function setCi($ci){$this->Ci = $ci;}
		public function setSexo($sexo){$this->Sexo  = $sexo;}
		public function setLugarExpedicionCI($expedicionCI){$this->LugarExpedicionCI  = $expedicionCI;}
		public function setFechaNacimiento($fechaNacimiento){$this->FechaNacimiento  = $fechaNacimiento;}
		public function setLugarNacimiento($lugarNacimiento){$this->LugarNacimiento  = $lugarNacimiento;}
		public function setPais($pais){$this->Pais =  $pais;}
		public function setCiudad($ciudad){$this->Ciudad =  $ciudad;}
		public function setGradoAcademico($gradoAcademico){$this->GradoAcademico = $gradoAcademico;}
		public function setUniversidad($universidad){$this->Universidad = $universidad;}
		public function setFacultad($facultad){$this->Facultad  = $facultad;}
		public function setCarrera($carrera){$this->Carrera = $carrera;}
		public function setCelular($celular){$this->Celular = $celular;}
		public function setFoto($foto){$this->Foto = $foto;}

		//getEstudiante
		public function getIdPersona(){return $this->IdPersona;}
		public function getPrimerNombre(){return $this->PrimerNombre;}
		public function getSegundoNombre(){return $this->SegundoNombre;}
		public function getPrimerApellido(){return $this->PrimerApellido;}
		public function getSegundoApellido(){return $this->SegundoApellido;}
		public function getCi(){return $this->Ci;}
		public function getSexo(){return $this->Sexo;}
		public function getLugarExpedicionCI(){return $this->LugarExpedicionCI;}
		public function getFechaNacimiento(){return $this->FechaNacimiento;}
		public function getLugarNacimiento(){return $this->LugarNacimiento;}
		public function getPais(){return $this->Pais;}
		public function getCiudad(){return $this->Ciudad;}
		public function getGradoAcademico(){return $this->GradoAcademico;}
		public function getUniversidad(){return $this->Universidad;}
		public function getFacultad(){return $this->Facultad;}
		public function getCarrera(){return $this->Carrera;}
		public function getCelular(){return $this->Celular;}
		public function getFoto(){return $this->Foto;}

		//Calcular la edad automaticamente falta
		public function getEdad(){return $this->Edad;}
	}
 ?>
