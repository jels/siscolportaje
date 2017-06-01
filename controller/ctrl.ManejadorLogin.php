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
      echo "ManejadorLogin";
    }

    public function Autentificacion($login)
    {
      $user = $login->getUser();
      $pass = $login->getPassword();
      $datos = $this->Consulta->ObtenerUsuario($user);
      if ($datos) {

        $login->setRol($datos['idRol']);
        $login->setEstado($datos['estado']);

        if ($login->getEstado() == true) {

          if ($datos['contrasena'] == $pass) {
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
          break;
        case 2:
        //echo "LIDER";
        header('Location: view/menuUsuarios.php?modo=LIDER');
        break;
        case 3:
        //echo "COLPORTOR";
        header('Location: view/menuUsuarios.php?modo=COLPORTOR');
          //  header("Location: view/headerCoordinador.php");
          break;
        default:
          header('Location: index.php?modo=AccesoDenegado');
          break;
      }
    }
  }

 ?>
