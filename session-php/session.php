<?php
  //On démarre une nouvelle session
   session_start();
  
  //On définit des variables de session
   $_SESSION['prenom'] = 'Pierre';
   $_SESSION['age'] = 29;
?>
<!DOCTYPE html>
<html>
   <head>
       <title>Cours PHP & MySQL</title>
       <meta charset="utf-8">
       <link rel="stylesheet" href="cours.css">
   </head>
  
   <body>
       <h1>Titre principal</h1>
       
         <a href="session2.php">lien page 2
         </a> 
    
       <p>Un paragraphe</p>
   </body>
</html>