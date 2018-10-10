<?php 
class config {
		function getConnexion () 
				{
				$bd   ="mysql:host=localhost;dbname=projet";
				$user ="root"; 
				$pw   ="" ; 
				$connexion = new PDO($bd,$user,$pw) ; 
				return $connexion;
				}
			  }
?>