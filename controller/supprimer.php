<?php

require_once '../config.php';
require_once '../model/Crud_service.php' ;

if ( isset($_GET['id'] )) 
    {
      echo var_dump('hi');
      $id = $_GET['id'] ;
    
      $CRUD_app=new Crud_service();
      $CRUD_app->supprimer_service($id) ;

      
    // require_once '../view/liste.php'; 
     header("location:../view/liste.php");
    }
    
    
