<?php
  /**
   *
   */
  class ManejadorLogin
  {
    private $Consulta;

    function __construct()
    {
      $this->Consulta =  new GestionarUsuario();
    }

    public function Autentificacion($login)
    {
      $user = $login->getUser();
      $pass = $login->getPassword();
      $datos = $this->Consulta->ObtenerUsuario($user);
      if ($datos) {

        $login->setRol($datos['idRol']);
        $login->setEstado($datos['estado']);
        $login->setPrimerNombre($datos['primerNombre']);
        $login->setSegundoNombre($datos['segundoNombre']);
        $login->setPrimerApellido($datos['primerApellido']);
        $login->setSegundoApellido($datos['segundoApellido']);
        $login->setCelular($datos['celular']);
        if ($login->getEstado() == true) {

          if ($datos['contrasena'] == $pass) {
              session_start();
              $session = new UsuarioSession($login);
              $session->CrearSesion();
              $this->TipoUsuario($datos['idRol']);
          }else {
            header("Location: index.php?modo=ErrorPassword");
          }
        }else {
         header("Location: index.php?modo=AccesoDenegado");
       }
      }else {
        header("Location: index.php?modo=UsuarioInexistente");
      }
    }
//revisar
    public function TipoUsuario($tipo)
    {
      switch ($tipo) {
        case 1:
        //echo "COORDINADOR";
        header('Location: view/menuUsuarios.php?modo=COORDINADOR');
        /*$coordinador = new MenuUser('COORDINADOR');
        $coordinador->MenuUsers();*/
          break;
        case 2:
        //echo "LIDER";
        header('Location: view/menuUsuarios.php?modo=LIDER');
        /*$lider = new MenuUser('LIDER');
        $lider->MenuUsers();*/
        break;
        case 3:
        //echo "COLPORTOR";
        header('Location: view/menuUsuarios.php?modo=COLPORTOR');
        /*$colportor = new MenuUser('COLPORTOR');
        $colportor->MenuUsers();*/
          break;
        default:
          header('Location: index.php?modo=AccesoDenegado');
          break;
      }
    }
  }

 ?>
