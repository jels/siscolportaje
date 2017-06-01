<?php
class UsuarioSession
{
  private $Login;

  function __construct($login)
  {
      $this->Login = $login;
  }

  public function CrearSesion()
  {
    $_SESSION['usuario'] = $this->Login->getUser();
    $_SESSION['contrasena'] = $this->Login->getPassword();
    $_SESSION['estado'] = $this->Login->getEstado();
    $_SESSION['idRol'] = $this->Login->getIdRol();
    $_SESSION['nombreRol'] = $this->Login->getRol();
    $_SESSION['primerNombre'] = $this->Login->getPrimerNombre();
    $_SESSION['segundoNombre'] = $this->Login->getSegundoNombre();
    $_SESSION['primerApellido'] = $this->Login->getPrimerApellido();
    $_SESSION['segundoApellido'] = $this->Login->getSegundoApellido();
    $_SESSION['celular'] = $this->Login->getCelular();
    //$fechaActual = getdate();
    //$mes = $convertDate->Month($fechaActual['month']);
    //echo $fechaActual['weekday'] .'<br>'. $fechaActual['mday'] .' - '. $mes. ' - '. $fechaActual['year'];
    //$_SESSION['fecha'] = $fechaActual['mday'] .' - '. $mes. ' - '. $fechaActual['year'
  }
}
?>
