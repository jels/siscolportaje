<?php

	class GestionarUsuario
	{
		protected $Usuario;
		private $Conexion;

		public function __construct()
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

		//FALTA COMPLEMENTAR ESTA FUNTACION [05-06-2017 13:37]
		public function GuardarUsuario(User $usuario)
		{
			/*1*/$idUser = $usuario->getIdUser();
			/*2*/$idRol = $usuario->getIdRol();
			/*3*/$idPersona =$usuario->getIdPersona();
			/*4*/$user = $usuario->getUser();
			/*5*/$password = $usuario->getPassword();
			/*6*/$estado =$usuario->getEstado();
			echo $idUser;
			echo "<br>";
			echo $idRol;
			echo "<br>";
			echo $idPersona;
			echo "<br>";
			echo $user;
			echo "<br>";
			echo $password;
			echo "<br>";
			echo $estado;
			/*
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

				return TRUE;

			} catch (Exception $e) {
				echo 'ERROR: No se logro registrar al nuevo Usuario Lider- '.$e->getMesage();
				exit();
				return FALSE;
			}*/

		}
	}
 ?>
