<?php
  session_start();
    if (isset($_GET['modo'])) {

        include '../controller/ctrl.Index.php';
        $menu = new Manejador($_GET['modo']);
        $menu->MenuLider();

    }else {
      $menu = new Manejador('default');
      $menu->MenuUsuario();
      //hello
    }

?>
