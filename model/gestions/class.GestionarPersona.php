<?php

	class GestionarPersona
	{
		private $Conexion;

		function __construct()
		{
			$this->Conexion =  new Conexion();
		}

		public function GuardarPersona(Persona $persona)
		{
			/*1*/$idPersona = $persona->getIdPersona();
			/*2*/$primerNombre = $this->ConvertString($persona->getPrimerNombre());
			/*3*/$segundoNombre =  $this->ConvertString($persona->getSegundoNombre());
			/*4*/$primerApellido = $this->ConvertString($persona->getPrimerApellido());
			/*5*/$segundoApellido = $this->ConvertString($persona->getSegundoApellido());
			/*6*/$ci = strtolower($persona->getCi());
			/*7*/$lugarExpedicionCI = strtoupper($persona->getLugarExpedicionCI());
			/*8*/$sexo =  $this->ConvertString($persona->getSexo());
			/*9*/$fechaNacimiento  = $persona->getFechaNacimiento();
			/*10*/$lugarNacimiento = $this->ConvertString($persona->getLugarNacimiento());
			/*11*/$pais =  $this->ConvertString($persona->getPais());
			/*12*/$ciudad =  $this->ConvertString($persona->getCiudad());
			/*13*/$gradoAcademico  = $this->ConvertString($persona->getGradoAcademico());
			/*14*/$universidad =  $this->ConvertString($persona->getUniversidad());
			/*15*/$facultad =  $this->ConvertString($persona->getFacultad());
			/*16*/$carrera =  $this->ConvertString($persona->getCarrera());
			/*17*/$celular = $persona->getCelular();
			/*18*/$foto = $persona->getFoto();
			/*Calcular la edad automatico
			$edad = getEdad();*/
			try {
				$insertPersona = 'INSERT INTO persona (idPersona,
																																	primerNombre,
																																	segundoNombre,
																																	primerApellido,
																																	segundoApellido,
																																	ci,
																																	lugarExpedicionCI,
																																	sexo,
																																	fechaNac,
																																	lugarNac,
																																	pais,
																																	ciudad,
																																	gradoAcademico,
																																	universidad,
																																	facultad,
																																	carrera,
																																	celular,
																																	foto)
												VALUES (:idPersona,
																			 :primerNombre,
																			 :segundoNombre,
																			 :primerApellido,
																			 :segundoApellido,
																			 :ci,
																			 :lugarExpedicionCI,
																			 :sexo,
																			 :fechaNac,
																			 :lugarNac,
																			 :pais,
																			 :ciudad,
																			 :gradoAcademico,
																			 :universidad,
																			 :facultad,
																			 :carrera,
																			 :celular,
																			 :foto)';

			$atribPersona = $this->Conexion->prepare($insertPersona);

			$atribPersona->bindParam(':idPersona', $idLider);
			$atribPersona->bindParam(':primerNombre', $primerNombre);
			$atribPersona->bindParam(':segundoNombre', $segundoNombre);
			$atribPersona->bindParam(':primerApellido', $primerApellido);
			$atribPersona->bindParam(':segundoApellido', $segundoApellido);
			$atribPersona->bindParam(':ci', $ci);
			$atribPersona->bindParam(':lugarExpedicionCI', $lugarExpedicionCI);
			$atribPersona->bindParam(':sexo', $sexo);
			$atribPersona->bindParam(':fechaNac', $fechaNacimiento);
			$atribPersona->bindParam(':lugarNac', $lugarNacimiento);
			$atribPersona->bindParam(':pais', $pais);
			$atribPersona->bindParam(':ciudad', $ciudad);
			$atribPersona->bindParam(':gradoAcademico', $gradoAcademico);
			$atribPersona->bindParam(':universidad', $universidad);
			$atribPersona->bindParam(':facultad', $facultad);
			$atribPersona->bindParam(':carrera', $carrera);
			$atribPersona->bindParam(':celular', $celular);
			$atribPersona->bindParam(':foto', $foto);

			$atribPersona->execute();

			return TRUE;

			} catch (PDOException $e)
			{
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				//return FALSE;
			}
		}

		public function BuscarCI($ci)
		{
			$consulta = $this->Conexion->prepare('SELECT ci FROM persona WHERE ci = :ci');
			$consulta->bindParam(':ci', $ci);
			$consulta->execute();
			$registro = $consulta->fetchAll();

			if ($registro) {
				foreach ($registro as $datos) {
					if ($datos['ci'] == $ci) {
						return $existe = TRUE;
					}else {
						return $existe = FALSE;
					}
				}
			}else {
				return $existe = FALSE;
			}
		}

		public function ConvertString($string)
		{
			$primerFase = strtolower($string);
			$segundaFase = ucwords($primerFase);
			return $segundaFase;
		}

		public function ObtenerUltimoId()
		{
				$consulta = $this->Conexion->prepare('SELECT MAX(idPersona) AS id FROM persona');

				$consulta->execute();
				$idPersona = $consulta->fetch();
				return $idPersona;
		}
	}
 ?>
