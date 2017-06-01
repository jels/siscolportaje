<?php
/**
 *
 */
class Manejador
{
  private $Modo;
  function __construct($modo)
  {
    $this->Modo = $modo;
  }
//PARA CONTROLAR EL LOGIN
  public function MenuIndex()
  {
    switch ($this->Modo) {
      case 'CamposLlenos':
      //include 'view/headerCoordinador.php';
      include 'model/object/class.User.php';
      echo "1";
      include 'model/gestions/class.GestionarUsuario.php';
      echo "2";
      include 'model/conexion/class.conexion.php';
      echo "3";
      include 'ctrl.ManejadorLogin.php';
      echo $_POST['user'], $_POST['password'];

      $usuario  = new User($_POST['user'], $_POST['password']);
      $manejadorLogin =  new ManejadorLogin();
      $manejadorLogin->Autentificacion($usuario);
        break;

        case 'ErrorPassword':
        include 'view/headerLogin.html';
          ?>
          <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡ERROR!</strong> <p>Error en la contraseña</p>
          </div>
          <?php
          include 'view/bodyLogin.html';
          include 'view/footerLogin.html';
          break;
        case 'AccesoDenegado':
        include 'view/headerLogin.html';
        ?>
        <p class="login-box-msg">Inicia tu sesión</p>
        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>¡ERROR!</strong> <p>Acceso Denegado</p>
        </div>
        <?php
        include 'view/bodyLogin.html';
        include 'view/footerLogin.html';
          break;
        case 'UsuarioInexistente':
        include 'view/headerLogin.html';
        ?>
        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡ERROR!</strong> <p>Usuario Inexistente</p>
        </div>
        <?php
        include 'view/bodyLogin.html';
        include 'view/footerLogin.html';
          break;

      default:
      include 'view/headerLogin.html';
      include 'view/bodyLogin.html';
      include 'view/footerLogin.html';
        break;
    }
  }
//PARA INISIAR SESSION DE CADA USUARIO
  public function MenuUsuario()
  {
    switch ($this->Modo) {
      case 'COORDINADOR':
       include '../view/headerCoordinador.php';
       include '../view/bodyCoordinador.html';
       include '../view/footerCoordinador.html';
        break;
      case 'LIDER':
        include '../view/headerLider.php';
        include '../view/bodyLider.html';
        include '../view/footerLider.html';
        break;
      case 'COLPORTOR':
          include '../view/headerColportor.php';
          include '../view/bodyColportor.html';
          include '../view/footerColportor.html';
          break;
      default:
        # code...
        break;
    }
  }

  public function MenuCoordinador()
  {
    switch ($this->Modo) {
      case 'ViewRegistrarLider':
        include '../view/headerCoordinador.php';
        include '../view/bodyRegistroLider.php';
        include '../view/footerCoordinador.html';
      break;

        /*CRUD DE LIDER*/

    case 'InsertLider':
        require('../model/object/class.Persona.php');
        require('../model/gestions/class.GestionarLider.php');
        require_once('../model/conexion/class.conexion.php');

        $lider = new Persona();
        $gestionarLider =  new GestionarLider();

        //BUSCAMOS CI
        $existeCI = $gestionarLider->BuscarCI($_POST['ci']);
        if ($existeCI == TRUE) {
          header('Location: menuCoordinador.php?modo=ciExistente');
        }else {
                 $lider-> setPrimerNombre($_POST['primerNombre']);
                 $lider-> setSegundoNombre($_POST['segundoNombre']);
                 $lider-> setPrimerApellido($_POST['primerApellido']);
                 $lider-> setSegundoApellido($_POST['segundoApellido']);
                 $lider-> setCi($_POST['ci']);
                 $lider-> setSexo($_POST['sexo']);
                 $lider-> setLugarExpedicionCI($_POST['expedicionCI']);
                 $lider-> setFechaNacimiento($_POST['fechaNacimiento']);
                 $lider-> setLugarNacimiento($_POST['lugarNacimiento']);
                 $lider-> setPais($_POST['pais']);
                 $lider-> setCiudad($_POST['ciudad']);
                 $lider-> setGradoAcademico($_POST['gradoAcademico']);
                 $lider-> setUniversidad($_POST['universidad']);
                 $lider-> setFacultad($_POST['facultad']);
                 $lider-> setCarrera($_POST['carrera']);
                 $lider-> setCelular($_POST['celular']);

                 $verificarRegistro = $gestionarLider->GuardarLider($lider);

                 if ($verificarRegistro == TRUE) {
                   header('Location: menuCoordinador.php?modo=RegistroLiderExitoso');
                   //$sms = new Manejador($_POST['RegistroLiderExitoso']);
                   //$sms->MenuCoordinador();
                 }else {
                   header('Location: menuCoordinador.php?modo=RegistroLiderError');
                   //$sms = new Manejador($_GET['RegistroLiderError']);
                   //$sms->MenuCoordinador();
                 }
        }
        //echo "" . $lider->getPrimerNombre();
        //echo ''. $_POST['lugarNacimiento'] . '<br>' . $_POST['pais'];
    break;
    case 'RegistroLiderExitoso':
      include '../view/headerCoordinador.php';
      ?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="fa fa-check-circle"></i>¡Felicidadades!</strong> <p>El registro se realizo exitosamente</p>
        </div>
      <?php
      include '../view/bodyRegistroLider.php';
      include '../view/footerCoordinador.html';
    break;
    case 'RegistroLiderError':
       include '../view/headerCoordinador.php';
       ?>
         <div class="alert alert-warning alert-dismissable">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>¡ERROR!</strong> <p>Error al registrar al Lider</p>
         </div>
        <?php
       include '../view/bodyRegistroLider.php';
       include '../view/footerCoordinador.html';
    break;
    case 'ciExistente':
      include '../view/headerCoordinador.php';
      ?>
        <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡ERROR!</strong> <p>Se encontro una persona con la  misma Cedula de Identidad registrada</p>
        </div>
      <?php
      include '../view/bodyRegistroLider.php';
      include '../view/footerCoordinador.html';
    break;

              /*CRUD COLPORTOR*/
      case 'ViewRegistrarColportor':
        include '../view/headerCoordinador.php';
        include '../view/bodyRegistroColportor.php';
        include '../view/footerCoordinador.html';
        break;
      case 'InserColportor':
        require('../model/object/class.Persona.php');
        require('../model/gestions/class.GestionarLider.php');
        require_once('../model/conexion/class.conexion.php');

        $colportor = new Persona();
        $gestionarColportor =  new GestionarLider();

        $colportor-> setPrimerNombre($_POST['primerNombre']);
        $colportor-> setSegundoNombre($_POST['primerNombre']);
        $colportor-> setPrimerApellido($_POST['primerNombre']);
        $colportor-> setSegundoApellido($_POST['primerNombre']);
        $colportor-> setCi($_POST['primerNombre']);
        $colportor-> setSexo($_POST['primerNombre']);
        $colportor-> setLugarExpedicionCI($_POST['primerNombre']);
        $colportor-> setFechaNacimiento($_POST['primerNombre']);
        $colportor-> setLugarNacimiento($_POST['primerNombre']);
        $colportor-> setPais($_POST['primerNombre']);
        $colportor-> setCiudad($_POST['primerNombre']);
        $colportor-> setGradoAcademico($_POST['primerNombre']);
        $colportor-> setUniversidad($_POST['primerNombre']);
        $colportor-> setFacultad($_POST['primerNombre']);
        $colportor-> setCarrera($_POST['primerNombre']);
        $colportor-> setCelular($_POST['primerNombre']);

        $verificarRegistro = $gestionarColportor->GuardarColportor($colportor);

        if ($verificarRegistro == TRUE) {
          header('Location: menuCoordinador.php?modo=RegistroColportorExitoso');
        }else {
          header('Location: menuCoordinador.php?modo=RegistroColportorError');
        }
        break;
      case 'RegistroColportorExitoso':
          include '../view/headerCoordinador.php';
          ?>
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="fa fa-check-circle"></i>¡Felicidadades!</strong> <p>El registro se realizo exitosamente</p>
            </div>
          <?php
          include '../view/bodyRegistroLider.php';
          include '../view/footerCoordinador.html';
        break;
      case 'RegistroColportorError':
          include '../view/headerCoordinador.php';
          ?>
            <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡ERROR!</strong> <p>Error al registrar al Lidet</p>
            </div>
          <?php
          include '../view/bodyRegistroLider.php';
          include '../view/footerCoordinador.html';
        break;

            /*CRUD CAMPAÑA*/
      case 'InsertCampana':
        break;
      default:
        # code...
        break;
    }
  }
}

 ?>
