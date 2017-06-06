<?php

	class GestionarUsuario
	{
		private $Conexion;

		function __construct()
		{
			$this->Conexion =  new Conexion();
		}

		public function ObtenerUsuario($usuario)
		{
			$cmd = $this->Conexion->prepare('SELECT u.idUsuario, r.idRol,  r.nombrerol, u.usuario, u.contrasena, u.estado, p.primerNombre, p.segundoNombre, p.primerApellido, p.segundoApellido, p.celular
																								FROM usuario u , rolusuario r, persona p
																							  WHERE u.idRol = r.idRol
																								AND u.idPersona = p.idPersona
																								AND u.usuario = :usuario');
			$cmd->bindParam(':usuario', $usuario);
			$cmd->execute();
			$registro = $cmd->fetch();
			return $registro;
		}

		//FALTA COMPLEMENTAR ESTA FUNCION  ERROR RARO AL REGISTRAR[05-06-2017 13:37]
		public function GuardarUsuario(User $usuario)
		{
			/*1*/$idUser = $usuario->getIdUser();
			/*2*/$idRol = $usuario->getIdRol();
			/*3*/$idPersona =$usuario->getIdPersona();
			/*4*/$user = $usuario->getUser();
			/*5*/$password = $usuario->getPassword();
			/*6*/$estado =$usuario->getEstado();

			try {
				$insertUser = 'INSERT INTO usuario (idUsuario,
																																	idRol,
																																	idPersona,
																																	usuario,
																																	contrasena,
																																	estado)
																 VALUES (:idUsuario,
																			 					 :idRol,
																			 				 	 :idPersona,
																			 				 	 :usuario,
																			 				 	 :contrasena,
																			 				 	 :estado)';

				$atribUser = $this->Conexion->prepare($insertUser);

				$atribUser->bindParam(':idUsuario', $idUser);
				$atribUser->bindParam(':idRol', $idRol);
				$atribUser->bindParam(':idPersona', $idPersona);
				$atribUser->bindParam(':usuario', $user);
				$atribUser->bindParam(':contrasena', $password);
				$atribUser->bindParam(':estado', $estado);

				$atribUser->execute();
				//$filas = $atribUser->rowCount();
				//echo "". $atribUser->execute();
				//echo "". $filas;
				return TRUE;

			} catch (Exception $e) {
				echo 'ERROR: No se logro registrar al nuevo Usuario Lider- '.$e->getMesage();
				exit();
				return FALSE;
			}

		}

		public function ListarLider()
		{
			$consultaLideres = $this->Conexion->prepare('SELECT p.idPersona, p.primerNombre, p.segundoNombre, p.primerApellido, p.segundoApellido, p.ci, p.lugarExpedicionCI, p.sexo, p.fechaNac, p.lugarNac, p.pais, p.ciudad, p.gradoAcademico, p.universidad, p.facultad, p.carrera, p.celular
																																		FROM persona p, usuario u
																																		WHERE u.idPersona = p.idPersona
																																		AND u.idRol = 2');

			$consultaLideres->execute();
			$listaLider = $consultaLideres->fetchAll();

			//CONTAMOS CUANTOS LIDERES EXISTEN
			$cantLideres = $this->Conexion->prepare('SELECT count(p.idPersona) as n
																																		FROM persona p, usuario u
																																		WHERE u.idPersona = p.idPersona
																																		AND u.idRol = 2');

			$cantLideres->execute();
			$numLider = $cantLideres->fetchAll();

			$lider = new User();
			$listaArray = array();
			$i = 0;

			/*for ($i=0; $i <= $numLider ; $i++) {
				$lider->setIdPersona($listaLider['idPersona']);
				$lider->setPrimerNombre($listaLider['primerNombre']);
				$lider->setSegundoNombre($listaLider['segundoNombre']);
				$lider->setPrimerApellido($listaLider['primerApellido']);
				$lider->setSegundoApellido($listaLider['segundoApellido']);
				$lider->setCi($listaLider['ci']);
				$lider->setLugarExpedicionCI($listaLider['lugarExpedicionCI']);
				$lider->setSexo($listaLider['sexo']);
				$lider->setPais($listaLider['pais']);
				$lider->setCiudad($listaLider['ciudad']);

				$listaArray[$i] = $lider;
			}*/
			foreach ($listaLider as $listaL) {
				$lider->setIdPersona($listaL['idPersona']);
				$lider->setPrimerNombre($listaL['primerNombre']);
				$lider->setSegundoNombre($listaL['segundoNombre']);
				$lider->setPrimerApellido($listaL['primerApellido']);
				$lider->setSegundoApellido($listaL['segundoApellido']);
				$lider->setCi($listaL['ci']);
				$lider->setLugarExpedicionCI($listaL['lugarExpedicionCI']);
				$lider->setSexo($listaL['sexo']);
				$lider->setPais($listaL['pais']);
				$lider->setCiudad($listaL['ciudad']);

				$listaArray[$i] = $lider;
				$i++;
			}
			return $listaArray;
		}

		public function Borrar()
		{

 //Buscar el valor de la configuracion en la Base de Datos, segun su Nombre de campo
    $Configura = "SELECT configura_nombre, configura_valor FROM tabla_config";
    $consulta = mysql_query ($Configura, $conexion) or die ("Fallo en la Obtener la Canfiguracion");

	// Mostrar resultados de la consulta
      	$nConfig = mysql_num_rows ($consulta);

		if ($nConfig > 0)
      	{
			for ($i=0; $i<$nConfig; $i++)
         	{
				$verConfig = mysql_fetch_array($consulta);
				$CargaConfig[$i] = $verConfig["conf_nombre"];
				$CargaConfigVal[$CargaConfig[$i]] = $verConfig["conf_valor"];
			}

		}
		}
	}
 ?>
