<?php

	class GestionarColportor
	{
		private $Conexion;

		function __construct()
		{
			$this->Conexion =  new Conexion();
		}

		public function GuardarColportor(Persona $colportor){

			/*1*/$idLider = $colportor->getIdPersona();
			/*2*/$primerNombre = $colportor->getPrimerNombre();
			/*3*/$segundoNombre =  $colportor->getSegundoNombre();
			/*4*/$primerApellido = $colportor->getPrimerApellido();
			/*5*/$segundoApellido =  $colportor->getSegundoApellido();
			/*6*/$ci = $colportor->getCi();
			/*7*/$lugarExpedicionCI = $colportor->getLugarExpedicionCI();
			/*8*/$sexo =  $colportor->getSexo();
			/*9*/$fechaNacimiento  = $colportor->getFechaNacimiento();
			/*10*/$lugarNacimiento = $colportor->getFechaNacimiento();
			/*11*/$pais =  $colportor->getColegio();
			/*12*/$ciudad =  $colportor->getParticular_Fiscal();
			/*13*/$gradoAcademico  = $colportor->getGestionBachiller();
			/*14*/$universidad =  $colportor->getNacionalidad();
			/*15*/$facultad =  $colportor->getCiudadNacimiento();
			/*16*/$carrera =  $colportor->getEstadoCivil();
			/*17*/$celular =  $colportor->getGestionIngreso();
			/*18*/$foto =  $colportor->getGestionIngreso();
			/*Calcular la edad automatico
			$edad = getEdad();*/
			try {
				$insertColportor = 'INSERT INTO persona (idPersona,
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

			$atribColportor = $this->Conexion->prepare($insertColportor);

			$atribColportor->bindParam(':idPersona', $idLider);
			$atribColportor->bindParam(':primerNombre', $primerNombre);
			$atribColportor->bindParam(':segundoNombre', $segundoNombre);
			$atribColportor->bindParam(':primerApellido', $primerApellido);
			$atribColportor->bindParam(':segundoApellido', $segundoApellido);
			$atribColportor->bindParam(':ci', $ci);
			$atribColportor->bindParam(':lugarExpedicionCI', $lugarExpedicionCI);
			$atribColportor->bindParam(':sexo', $sexo);
			$atribColportor->bindParam(':fechaNac', $fechaNacimiento);
			$atribColportor->bindParam(':lugarNac', $lugarNacimiento);
			$atribColportor->bindParam(':pais', $pais);
			$atribColportor->bindParam(':ciudad', $ciudad);
			$atribColportor->bindParam(':gradoAcademico', $gradoAcademico);
			$atribColportor->bindParam(':universidad', $universidad);
			$atribColportor->bindParam(':facultad', $facultad);
			$atribColportor->bindParam(':carrera', $carrera);
			$atribColportor->bindParam(':celular', $celular);
			$atribColportor->bindParam(':foto', $foto);

			$atribColportor->execute();

			return TRUE;

			} catch (PDOException $e)
			{
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return FALSE;
			}
		}
	}
 ?>
