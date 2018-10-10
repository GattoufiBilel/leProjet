<?php

require_once '../config.php';
require_once '../model/Crud_service.php';
require_once '../model/service.php';
require_once '../view/ajouter.php';


if(isset($_POST['insert']))
    {   
        $id_service=$_POST['id_service'];
        $libelle=$_POST['libelle'] ; 
        
        
                $serv=new service($id_service,$libelle);
		$CRUD_app=new Crud_service();
		$CRUD_app->ajouter_service($serv);
        
    }