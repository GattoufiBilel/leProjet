<?php
require_once ('../header.php') ; 
require_once ('../model/service.php');
require_once ('../controller/liste.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link type="text/css" rel="stylesheet" href="../assets/css/main.css" />
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID Service</th><th>Libelle</th><th colspan="2">Action</th>
            </tr>
        <?php
 
            foreach($Lesservices as $service)
              { 
                echo "<tr>";
                    foreach ($service as $value)
                        {
                        echo"<td>$value</td>";
                        }
                        echo"<td><a href=../view/modifier.php?id=$service[0]>  UPDATE</a></td>";
                        echo"<td><a href=../controller/supprimer.php?id=$service[0]> DELETE </a></td>";
                    
                echo"</tr>";
               }
        
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
