<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrar Libro</title>
  <link rel="shortcut icon" href="css/master.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Nombre de usuario</span>                                               <!-- NOMBRE DE USUARIO -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Nombre Usuario - Cargo                                                               <!-- NOMBRE DE USUARIO y cargo -->
                  <small> 25 de Mayo </small>                                                                           <!-- FECHA -->
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Nombre Usuario</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Coordinador</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">Menu Navegación</li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Registrar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="bodyregistrolider.php"><i class="fa fa-circle-o"></i> Lider</a></li>
            <li class="active"><a href="bodyregistroCampana.php"><i class="fa fa-circle-o"></i> Campaña</a></li>
            <li class="active"><a href="bodyregistroLibro.php"><i class="fa fa-circle-o"></i> Libro</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Listar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="bodyregistrolider.php"><i class="fa fa-circle-o"></i> Lider</a></li>
            <li class="active"><a href="bodyregistrolider.php"><i class="fa fa-circle-o"></i> Campaña</a></li>
            <li class="active"><a href="bodyregistrolider.php"><i class="fa fa-circle-o"></i> Libro</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content-header">
              <h1>
                Registrar Lider
              </h1>
            </p>
            </section>
        <div class="col-md-10">
                  <div class="nav-tabs-custom">

                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Registrar</a></li>
                      <li><a href="#timeline" data-toggle="tab">Editar</a></li>
                      <li><a href="#timeline" data-toggle="tab">Dar de Baja</a></li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="settings">
                        <form class="form-horizontal">

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Primer Nombre</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputName" placeholder="Primer Nombre">
                            </div>
                          </div>

                          <div class="form-group">
                             <label for="inputName" class="col-sm-2 control-label">Segundo Nombre</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail" placeholder="Segundo Nombre">
                            </div>
                          </div>

                          <div class="form-group">
                             <label for="inputName" class="col-sm-2 control-label">Primer Apellido</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail" placeholder="Primer Apellido">
                            </div>
                          </div>

                          <div class="form-group">
                             <label for="inputName" class="col-sm-2 control-label">Segundo Nombre</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail" placeholder="SegundoApellido">
                            </div>
                          </div>

                          <div class="form-group">
                             <label for="inputName" class="col-sm-2 control-label">Cedula de Identidad</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputEmail" placeholder="Cedula de Identidad">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="inputEmail" placeholder="Expedito">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Fecha de Nacimiento</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Fecha de Nacimiento">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Genero</label>

                            <div class="col-sm-10">
                              <select name="opcionGenero" class="form-control">
                              <option value="1">Masculino</option>
                              <option value="2">Femenino</option>
                            </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Ciudad</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Ciudad">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Grado Académico</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Grado Académico">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Universidad</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Universidad">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Facultad</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Facultad">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Carrera</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Carrera">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Celular</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Celular">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Subir Fotografia</label>

                            <div class="col-sm-10">
                              <input type="file" id="InputFile">
                            </div>
                          </div>

                          <div class="form-group" align="center">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                          </div>

                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div>
                  <!-- /.nav-tabs-custom -->
        </div>
      </div>

<!-- FINAL BODY -->
<section class="content">
</section>
<section class="content">
</section>

  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
