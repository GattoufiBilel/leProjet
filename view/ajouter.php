
<?php require_once('../header.php') ; ?>
<!DOCTYPE HTML >
<html>  
    <head>
        <title>page service </title>
    </head>
</html>

 <body>
     <div id="zone1">
         <fieldset>
             <legend> ajouter service </legend>
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
                   
                   <input type="text" name="id_service" placeholder="IDservice">
                   <input type="text" name="libelle" placeholder="nameservice">
                   <input type="submit" name="insert" value="enregistre">
                   <input type="reset" name="reset" value="reset">
         </fieldset>
     </div>  
     <br><br><br><hr>
       <?php require_once('../footer.php') ; ?>
 </body>
