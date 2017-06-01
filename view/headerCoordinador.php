<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coordinador</title>
  <link rel="shortcut icon" href="css/master.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../view/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../view/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../view/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../view/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../view/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../view/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../view/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../view/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>Col</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sis</b> COLPORTAJE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
<li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../view/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
                <?php echo ucwords(strtolower($_SESSION['primerNombre'])); ?>
              </span>                                               <!-- NOMBRE DE USUARIO -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../view/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  <?php echo ucwords(strtolower($_SESSION['primerNombre'] .' '. $_SESSION['segundoNombre'] .' '. $_SESSION['primerApellido'] .' '. $_SESSION['segundoApellido'])); ?>                                               <!-- NOMBRE DE USUARIO y cargo -->
                  <small><?php
                  //setlocale(LC_ALL, 'es_ES');
                  //echo strftime('Hoy es %A y son las %H:%M');
                  //echo strftime('<br>El año es %Y y el mes %B');
                    $fechaActual = getdate();
                    echo $fechaActual['weekday'] .'<br>'. $fechaActual['mday'] .' - '. $fechaActual['month'] . ' - '. $fechaActual['year'];
                   ?></small>                                                                           <!-- FECHA -->
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="menuUsuarios.php?modo=CerrarSession" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
</li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../view/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            <?php echo ucwords(strtolower($_SESSION['primerNombre'] .' '. $_SESSION['segundoNombre'])); ?>
          </p>
          <a><i class="fa fa-circle text-success"></i> Coordinador</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">Menu Navegación</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Lider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="menuCoordinador.php?modo=ViewRegistrarLider"><i class="fa fa-circle-o"></i> Registrar</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Colportor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="menuCoordinador.php?modo=ViewRegistrarColportor"><i class="fa fa-circle-o"></i> Registrar</a></li>
            <li class="active"><a href="bodyregistrolider.php"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Libro</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="menuCoordinador.php?modo=ViewRegistrarColportor"><i class="fa fa-circle-o"></i> Registrar</a></li>
            <li class="active"><a href="bodyregistrolider.php"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!--FINAL DEL HEADER-->

  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
