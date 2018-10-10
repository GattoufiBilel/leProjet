<?php
    
    require_once '../config.php';
    require_once 'service.php';
    
    
    class Crud_service 
    {
        private $connect ; 
        
        public function __construct() 
        {
            $obj = new config(); 
            $this->connect = $obj->getConnexion(); 
        }
        
        
        function ajouter_service(service $serv) 
        {
            $id = $serv->getId_service();
            $lib = $serv->getLibelle(); 
            
            $sql ="insert into service values ($id,'$lib')" ; 
            $resultat =  $this->connect->exec($sql); 
            return ($resultat);  
        }
        
        
        function chercher_service($input_id) 
        {   
            $sql =  "select * from service where id_service =".$input_id ;   
            $resultat = $this->connect->query($sql) ;      
            return ($resultat->fetch(PDO::FETCH_NUM)) ;
        }
        
         function afficher_Allservice() 
        {
            $sql = "select * from service order by id_service asc";
            $resultat = $this->connect->query($sql) ; 
            return ($resultat->fetchAll(PDO::FETCH_NUM)) ;
        }
        
        
           function modifier_service(service $serv)
        {   
            $input_id =  $serv->getId_service();
            $input_lib = $serv->getLibelle();    
            
            $sql = 'update service set libelle="'.$input_lib.'"where id_service="'.$input_id.'" '   ;
            $resultat =  $this->connect->exec($sql) ; 
            return ($resultat) ;
            
        }
        
        function modif_service($input_lib,$input_id)
        {
            
            $sql = 'update service set libelle="'.$input_lib.'"where id_service="'.$input_id.'" '   ;
            $resultat =  $this->connect->exec($sql) ; 
            return ($resultat) ;
            
        }
        
       
        function supprimer_service($input_id)
        {
            $sql = "delete from service where id_service=".$input_id ;
            $resultat = $this->connect->exec($sql); 
            return ($resultat);
        }        
        
        
        function Recuper_service($input_id)
        {
             $sql='select * from service where id_service="' .$input_id.'" ';
             $resultat=$this->connect->query($sql);  
             return ($resultat->fetch(PDO::FETCH_NUM));
        }
     
        
        
    }

