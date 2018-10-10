<?php

require_once '../config.php';
require_once '../model/Crud_service.php';
require_once '../view/modifier.php';

    $id_service =$_GET['id'];
    
    $CRUD_app=new Crud_service();
    $res=$CRUD_app->Recuper_service($id_service);
    
    //require_once 'modifier.php' ;  
    
  // header("location:../view/liste.php");
 
    


