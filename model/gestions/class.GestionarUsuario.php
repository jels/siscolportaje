<?php

	class GestionarUsuario
	{
		protected $Usuario;
		private $Conexion;

		public function __construct()
		{		}

		public function ObtenerUsuario($usuario)
		{
			$conexion = new Conexion();

			$cmd = $conexion->prepare('SELECT u.idUsuario, r.idRol,  r.nombrerol, u.usuario, u.contrasena, u.estado, p.primerNombre, p.segundoNombre, p.primerApellido, p.segundoApellido, p.celular
																								FROM usuario u , rolusuario r, persona p
																							  WHERE u.idRol = r.idRol
																								AND u.idPersona = p.idPersona
																								AND u.usuario = :usuario');
			$cmd->bindParam(':usuario', $usuario);
			$cmd->execute();
			$registro = $cmd->fetch();
			return $registro;
		}
/*
		public function ExisteUser($usuario, $conn){
			$sql = $this->Conexion->query("SELECT usuario, contrasena
							   FROM usuario
							   WHERE usuario = '{$usuario->getUser()}'
							   AND contrasena = '{$usuario->getPassword()}';")
							   OR die ("ERROR: Se produjo un error al realizar la consulta <b><big>USUARIOS</big></b>".mysql_errno());

			if ($sql) {
				$numFilasConsulta = $sql->num_rows;
				if ($numFilasConsulta > 0) {
					return TRUE;
				}
				else{
					return FALSE;
				}
			}
		}
/*
		public function devolverUsuario(User $usuario){

			$sql = $this->Conexion->query("SELECT usuario, contrasena
							   FROM usuario
							   WHERE usuario = '{$usuario->getUser()}'
							   AND contrasena = '{$usuario->getPassword()}';")
							   OR die ("ERROR: Se produjo un error al realizar la consulta <b><big>USUARIOS</big></b>".mysql_errno());

			if ($sql) {
				$ArrayUser = mysqli_fetch_assoc($sql);
			}

			return $ArrayUser;
		}*/
	}
 ?>
