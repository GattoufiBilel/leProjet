<?php require_once('../header.php') ; ?>
<!DOCTYPE HTML >
<html>  
    <head>
        <title>page chercher </title>
    </head>
</html>

 <body>
     <div id="zone1">
         <fieldset>
             <legend> Chercher Service </legend>
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
                   
                   <input type="text" name="id_service" placeholder="ID">     
                   <input type="submit" name="chercher" value="Chercher">
                   <input type="reset" name="reset" value="reset">
         </fieldset>
     </div>  
     <br><br><br><hr>
       <?php require_once('../footer.php') ; ?>
 </body>
