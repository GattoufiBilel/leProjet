<?php

require_once '../config.php';
require_once '../model/Crud_service.php';
require_once '../model/service.php';
require_once '../view/chercher.php';


if(isset($_POST['chercher']))
    {   
        $id_service=$_POST['id_service'];
 
            $CRUD_app= new Crud_service();
            $res  = $CRUD_app->chercher_service($id_service);
            
            
            if( $res == false)
                {
                    echo " service non disponible " ; 
                }
                else 
                {
                    echo "seervice trouver"; 
                    echo "<br>" .$id_service ;    
                    require_once '../view/selection.php';
              
                 }
                    
           
    }
   