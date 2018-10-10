<?php
require_once ('../header.php') ; 
require_once ('../model/service.php');
require_once ('../controller/chercher.php');
require_once '../model/Crud_service.php';
require_once 'chercher.php';

$id_service=$_POST['id_service'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link type="text/css" rel="stylesheet" href="../../assets/css/main.css" />
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID Service</th><th>Libelle</th><th>Action</th> 
               
            </tr>
        <?php
            echo "<tr>";
            foreach($res as $service)
                {  
                    echo"<td>$service</td>";     
                }
                    echo"<td><a href=../view/modifier.php?id=$id_service>UPDATE</a></td>";
                    echo"<td><a href=../controller/supprimer.php?id=$id_service> DELETE </a></td>";      
                
            echo"</tr>";        
     
        ?>
            <tr>
               <td><a href="../controller/ajouter.php">Ajouter Nouvelle service </a></td>
               <td><a href="../controller/chercher.php">Rechercher  </a></td>
            </tr>
            </table>
            <br><br><br><hr>
       <?php require_once('../footer.php') ; ?>
    </body>
</html>
