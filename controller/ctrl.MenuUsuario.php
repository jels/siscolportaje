<?php
/**
 *
 */
class MenuUser
{
  protected $TipoUsuario;
  function __construct($usuario)
  {
    $this->TipoUsuario = $usuario;
  }

  public function MenuUsers()
  {
    //session_start();
    if (isset($_SESSION['usuario'])) {
      if (isset($this->TipoUsuario)) {
        if ($this->TipoUsuario == 'COORDINADOR') {
          //header('Location: view/menuUsuarios.php?modo=COORDINADOR');
          $ctrlIndex = new Manejador($this->TipoUsuario);
          $ctrlIndex->MenuUsuario();
          //$ctrlIndex  = new Manejador($this->TipoUsuario);
          //$ctrlIndex->MenuUsuario();
        }
        elseif ($this->TipoUsuario == 'LIDER') {
          $ctrlIndex  = new Manejador($this->TipoUsuario);
          $ctrlIndex->MenuUsuario();
        }
        elseif ($this->TipoUsuario == 'COLPORTOR') {
          $ctrlIndex  = new Manejador($this->TipoUsuario);
          $ctrlIndex->MenuUsuario();
        }
        else {
          $menu = new Manejador("default");
          $menu->MenuIndex();
        }
      }else {
        $menu = new Manejador("default");
        $menu->MenuIndex();
      }
    }else {
      header('Location: index.php?modo=AccesoDenegado');
    }
  }

  public function MenuCoordinador()
  {
    if (isset($_GET['modo'])) {

        include '../controller/ctrl.Index.php';
        $menu = new Manejador($_GET['modo']);
        $menu->MenuCoordinador();

    }else {
      $menu = new Manejador('default');
      $menu->MenuUsuario();
    }
  }

  public function MenuLider()
  {

  }

  public function MenuColportor()
  {

  }
}

 ?>
