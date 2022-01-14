<?php

      //Default values for controller and function
      $controller = 'home';
      $function   = 'home';

      if(isset($_GET['controller'] ) && $_GET['controller'] != ''){
          $controller = $_GET['controller'];
      }
      if(isset($_GET['function'] ) && $_GET['function'] != ''){
          $function = $_GET['function'];
    }
     
    //including url data variable
    include('Controller/'.$controller.'.php');

    //object creation for controller class
    $class =$controller.'Controller';
    $obj   =new $class();
    $obj->$function();
?>