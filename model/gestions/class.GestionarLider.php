<?php

	class GestionarLider
	{
		private $Conexion;

		function __construct()
		{
			$this->Conexion =  new Conexion();
		}

		public function GuardarLider(Persona $lider){

			/*1*/$idLider = $lider->getIdPersona();
			/*2*/$primerNombre = $lider->getPrimerNombre();
			/*3*/$segundoNombre =  $lider->getSegundoNombre();
			/*4*/$primerApellido = $lider->getPrimerApellido();
			/*5*/$segundoApellido =  $lider->getSegundoApellido();
			/*6*/$ci = $lider->getCi();
			/*7*/$lugarExpedicionCI = $lider->getLugarExpedicionCI();
			/*8*/$sexo =  $lider->getSexo();
			/*9*/$fechaNacimiento  = $lider->getFechaNacimiento();
			/*10*/$lugarNacimiento = $lider->getLugarNacimiento();
			/*11*/$pais =  $lider->getPais();
			/*12*/$ciudad =  $lider->getCiudad();
			/*13*/$gradoAcademico  = $lider->getGradoAcademico();
			/*14*/$universidad =  $lider->getUniversidad();
			/*15*/$facultad =  $lider->getFacultad();
			/*16*/$carrera =  $lider->getCarrera();
			/*17*/$celular =  $lider->getCelular();
			/*18*/$foto =  $lider->getFoto();
			/*Calcular la edad automatico
			$edad = getEdad();*/
			try {
				$insertLider = 'INSERT INTO persona (idPersona,
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

			$atribLider = $this->Conexion->prepare($insertLider);

			$atribLider->bindParam(':idPersona', $idLider);
			$atribLider->bindParam(':primerNombre', $primerNombre);
			$atribLider->bindParam(':segundoNombre', $segundoNombre);
			$atribLider->bindParam(':primerApellido', $primerApellido);
			$atribLider->bindParam(':segundoApellido', $segundoApellido);
			$atribLider->bindParam(':ci', $ci);
			$atribLider->bindParam(':lugarExpedicionCI', $lugarExpedicionCI);
			$atribLider->bindParam(':sexo', $sexo);
			$atribLider->bindParam(':fechaNac', $fechaNacimiento);
			$atribLider->bindParam(':lugarNac', $lugarNacimiento);
			$atribLider->bindParam(':pais', $pais);
			$atribLider->bindParam(':ciudad', $ciudad);
			$atribLider->bindParam(':gradoAcademico', $gradoAcademico);
			$atribLider->bindParam(':universidad', $universidad);
			$atribLider->bindParam(':facultad', $facultad);
			$atribLider->bindParam(':carrera', $carrera);
			$atribLider->bindParam(':celular', $celular);
			$atribLider->bindParam(':foto', $foto);

			$atribLider->execute();

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
