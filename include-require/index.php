<!DOCTYPE html>
<html>
   <head>
       <title>Cours PHP & MySQL</title>
       <meta charset="utf-8">
       <link rel="stylesheet" href="cours.css">
   </head>
  
   <body>
       <h1>Titre principal</h1>
       <?php
           echo '<h2>Menu inclus avec include</h2> <br>';
           include 'menu.php';
           include 'menu.php';
      
           echo '<h2>Menu inclus avec include_once</h2> <br>';
           include_once 'menu.php';
          
           echo '<h2>Menu inclus avec require</h2> <br>';
           require 'menu.php';
           require 'menu.php';
          
           echo '<h2>Menu inclus avec require_once</h2> <br>';
           require_once 'menu.php';
       ?>
       <p>Un paragraphe</p>
   </body>
</html>