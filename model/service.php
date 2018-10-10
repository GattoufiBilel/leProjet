<?php

    class service 
        {
          public $id_service ; 
          public $libelle ; 
       
           public function __construct($id_service,$libelle) 
           { 
               $this->id_service=$id_service ; 
               $this->libelle = $libelle ;
           }
            
          
            function getId_service() {
                return $this->id_service;
            }

            function getLibelle() {
                return $this->libelle;
            }

            function setId_service($id_service) {
                $this->id_service = $id_service;
            }

            function setLibelle($libelle) {
                $this->libelle = $libelle;
            }

  
            
            
        }
            


