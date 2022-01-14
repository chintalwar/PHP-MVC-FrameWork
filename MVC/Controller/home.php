<?php

      //controller home class for calling function
      class homeController{

         //constructer for the class
          function __construct(){
              
            //including model here
            include('Model/home.php');
            $this->obj =new homeModel();
          }

          //function for home
          function home(){
              $arr = $this->obj->home();
              include('View/header.php');
              include('View/page.php');
              include('View/footer.php');
          }

          //function for about
          function about(){
            $arr = $this->obj->about();
            include('View/header.php');
            include('View/page.php');
            include('View/footer.php');
          }
            //function for about
            function contact(){
                $arr = $this->obj->contact();
                include('View/header.php');
                include('View/page.php');
                include('View/footer.php');
              }
      }
?>