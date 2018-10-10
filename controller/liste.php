<?php

require_once '../config.php';
require_once '../model/Crud_service.php';
require_once '../model/service.php';



$CRUD_app = new Crud_service();
$Lesservices = $CRUD_app->afficher_Allservice(); 

require_once '../view/liste.php'; 