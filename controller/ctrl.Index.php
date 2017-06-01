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

      include 'model/conexion/class.session.php';
      include 'model/object/class.Persona.php';
      include 'model/object/class.User.php';
      include 'model/gestions/class.GestionarUsuario.php';
      include 'model/conexion/class.conexion.php';
      include 'ctrl.ManejadorLogin.php';
      include 'ctrl.MenuUsuario.php';

      $usuario  = new User();
      $usuario->setUser($_POST['user']);
      $usuario->setPassword($_POST['password']);
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
      //echo "Hola COORDINADOR";
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
    case 'CerrarSession':
      session_start();
      session_destroy();
      header("Location: ../index.php");
    break;
    default:
      include '../view/headerLogin.html';
      include '../view/bodyLogin.html';
      include '../view/footerLogin.html';
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
        require('../model/gestions/class.GestionarPersona.php');
        require_once('../model/conexion/class.conexion.php');

        $persona = new Persona();
        $gestionarPersona =  new GestionarPersona();

        //BUSCAMOS CI
        $existeCI = $gestionarPersona->BuscarCI($_POST['ci']);
        if ($existeCI == TRUE) {
          header('Location: menuCoordinador.php?modo=ciExistenteLider');
        }else {
          //REGISTRO DE PERSONA
                 $persona-> setPrimerNombre($_POST['primerNombre']);
                 $persona-> setSegundoNombre($_POST['segundoNombre']);
                 $persona-> setPrimerApellido($_POST['primerApellido']);
                 $persona-> setSegundoApellido($_POST['segundoApellido']);
                 $persona-> setCi($_POST['ci']);
                 $persona-> setSexo($_POST['sexo']);
                 $persona-> setLugarExpedicionCI($_POST['expedicionCI']);
                 $persona-> setFechaNacimiento($_POST['fechaNacimiento']);
                 $persona-> setLugarNacimiento($_POST['lugarNacimiento']);
                 $persona-> setPais($_POST['pais']);
                 $persona-> setCiudad($_POST['ciudad']);
                 $persona-> setGradoAcademico($_POST['gradoAcademico']);
                 $persona-> setUniversidad($_POST['universidad']);
                 $persona-> setFacultad($_POST['facultad']);
                 $persona-> setCarrera($_POST['carrera']);
                 $personas-> setCelular($_POST['celular']);

                 $verificarRegistro = $gestionarPersona->GuardarPersona($persona);

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
    case 'ciExistenteLider':
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

              /*CRUD CAMPAÑA*/
      case 'ViewRegistrarCampana':
        include '../view/headerCoordinador.php';
        include '../view/bodyRegistroColportor.php';
        include '../view/footerCoordinador.html';
      break;
      default:
        # code...
        break;
    }
  }
}

 ?>
