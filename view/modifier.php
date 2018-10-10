
<?php 
require_once('../header.php') ; 
require_once( '../controller/modifier.php') ;
require_once( '../controller/verifier.php') ; 

if ( isset($_GET['id'] )) 
   {
      $id = $_GET['id'] ;
    }
?>

<!DOCTYPE HTML >
<html>  
    <head>
        <title>Modifier vos donnees </title>
    </head>
</html>

 <body>
     <div id="zone1">
         <fieldset>
             <legend> Modifier Service </legend>
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
                   <?php foreach ($res as $var=>$a ) ?>
                   
                   <input type="text" name="id" value= <?php echo $id ; ?> >
                   <input type="text" name="libelle" value= <?php echo $a ; ?> >
                   <input type="submit" name="modif" value="enregistre">
                   <input type="reset" name="reset" value="reset">
                  
         </fieldset>
     </div>  
     <br><br><br><hr> 
     
     
       <?php require_once('../footer.php') ; ?>
 </body>