<?php
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (!isset($_SESSION['txtusuario'])){
      require_once 'model/database.php';

      $controller = 'transporte';

      // Todo esta lógica hara el papel de un FrontController
      if(!isset($_REQUEST['c']))
      {
          require_once "controller/$controller.controller.php";
          $controller = ucwords($controller) . 'Controller';
          $controller = new $controller;
          $controller->OperacionesL1b();
      }
      else
      {
          // Obtenemos el controlador que queremos cargar
          $controller = strtolower($_REQUEST['c']);
          $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'OperacionesL1b';

          // Instanciamos el controlador
          require_once "controller/$controller.controller.php";
          $controller = ucwords($controller) . 'Controller';
          $controller = new $controller;

          // Llama la accion
          call_user_func( array( $controller, $accion ) );
      }
    }else{
 header('Location: index.html');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>
