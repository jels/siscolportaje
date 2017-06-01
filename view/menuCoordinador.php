<?php

    if (isset($_GET['modo'])) {

        include '../controller/ctrl.Index.php';
        $menu = new Manejador($_GET['modo']);
        $menu->MenuCoordinador();

    }else {
      $menu = new Manejador('default');
      $menu->MenuUsuario();
    }

?>
