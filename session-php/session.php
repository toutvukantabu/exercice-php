<?php
  //On démarre une nouvelle session
  setcookie('pseudo', 'Taliesen', time() + 3600, null, null, false, true); // Le cookie sera valable une heure
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // Le cookie sera valable un an
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