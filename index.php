<?php
  include 'controller/ctrl.Index.php';

  if (isset($_GET['modo'])) {
      $menu = new Manejador($_GET['modo']);
      $menu->MenuIndex();
  }else {
    $menu = new Manejador("default");
    $menu->MenuIndex();
  }
?>
