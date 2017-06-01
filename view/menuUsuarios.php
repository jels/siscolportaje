<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
      if (isset($_GET['modo'])) {
          include '../controller/ctrl.Index.php';
          $menu = new Manejador($_GET['modo']);
          $menu->MenuUsuario();

      }else {
        $menu = new Manejador("default");
        $menu->MenuIndex();
      }
    }else {
      header('Location: index.php?modo=AccesoDenegado');
    }
    ?>
