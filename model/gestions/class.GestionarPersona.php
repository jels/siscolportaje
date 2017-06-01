<?php

	class GestionarPersona
	{
		private $Conexion;

		function __construct()
		{
			$this->Conexion =  new Conexion();
		}

		public function GuardarPersona(Persona $persona){

			/*1*/$idPersona = $persona->getIdPersona();
			/*2*/$primerNombre = $persona->getPrimerNombre();
			/*3*/$segundoNombre =  $persona->getSegundoNombre();
			/*4*/$primerApellido = $persona->getPrimerApellido();
			/*5*/$segundoApellido =  $persona->getSegundoApellido();
			/*6*/$ci = $persona->getCi();
			/*7*/$lugarExpedicionCI = $persona->getLugarExpedicionCI();
			/*8*/$sexo =  $persona->getSexo();
			/*9*/$fechaNacimiento  = $persona->getFechaNacimiento();
			/*10*/$lugarNacimiento = $persona->getLugarNacimiento();
			/*11*/$pais =  $persona->getPais();
			/*12*/$ciudad =  $persona->getCiudad();
			/*13*/$gradoAcademico  = $persona->getGradoAcademico();
			/*14*/$universidad =  $persona->getUniversidad();
			/*15*/$facultad =  $persona->getFacultad();
			/*16*/$carrera =  $persona->getCarrera();
			/*17*/$celular =  $persona->getCelular();
			/*18*/$foto =  $persona->getFoto();
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
				return FALSE;
			}
		}

		public function BuscarCI($ci){
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
	}
 ?>
