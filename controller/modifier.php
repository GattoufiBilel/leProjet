<?php

require_once '../config.php';
require_once '../model/Crud_service.php';
require_once '../model/service.php';
require_once '../view/modifier.php';



    if(isset($_POST['modif']))
        {   
          $libelle=$_POST['libelle'] ; 
          $id_service = $_POST['id'] ; 
        
            $serv=new service($id_service,$libelle);
            $CRUD_app=new Crud_service();
            $CRUD_app->modifier_service($serv);

          //header("location:/view/liste.php");  
           //  header("location:verifier.php");  
           require_once "../view/liste.php";
        }
    
    

    
    