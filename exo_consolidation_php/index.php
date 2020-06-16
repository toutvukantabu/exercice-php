<?php
require 'function.php';

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>


    <?php

    incrementation(12);

    ?>

    <br><br>
    <h2>Exercice 2</h2>
    ======================================================================================================
    <br><br><br>
    <?php

    modulo(7);

    ?>

    <br><br>
    <h2>Exercice 3 </h2>
    ======================================================================================================
    <br><br><br>
    <?php

    rectangle(7, 3);

    ?>
    <br><br>
    <h2>Exercice 4 </h2>
    ======================================================================================================
    <br><br><br>
    <?php

    nombre_aleatoire();

    ?>
    <br><br>
    <h2>Exercice 5 </h2>
    ======================================================================================================
    <br><br><br>
    <?php
    racine()


    ?>
    <br><br>
    <h2>Exercice 6 </h2>
    ======================================================================================================
    <br><br><br>
    <?php
    fibonacci();
    ?>

    <br><br>
    <h2>Exercice 7 </h2>
    ======================================================================================================
    <br><br><br>

    <?php
    heure_date();
    ?>







    <br><br>
    <h2>Exercice 8 </h2>
    ======================================================================================================
    <br><br><br>
    <?php
    $tableau = array(
         "H" => "Hydrogène", 
        "He" => "Helium", 
        "Li" => "Lythium", 
        "Be" => "Beryllium",
        "B" => "Bore", 
        "C" => "Carbonne",
        "N" => "Azote",
        "O" => "Oxygène", 
        "F" => "Fluor", 
        "Ne" => "Néon");

    echo'<div class="table1"><table border=1><tr><th>Symbole</th><th>Elements</th> </tr></table></div>';
    foreach ($tableau as $symbole => $elements) {
        echo '<div class="table1">
        <table border=1>
        <tr>
        <td>' . $symbole . '</td>
        <td>' . $elements . '</td>
        </tr></table></div>';
    }
    ?>


<h2>Exercice 9</h2>
    ======================================================================================================
    <br><br><br>
    <?php
    $tab=array(
        "Dupont"=>array("prenom"=>"Paul","ville"=>"Paris","age"=>27),
        "Schmoll"=>array("prenom"=>"Kirk","ville"=>"Berlin","age"=>35),
        "Smith"=>array("prenom"=>"Stan","ville"=>"Londres","age"=>45));
        
echo var_dump($tab);

    
        foreach($tab as $key => $value){
            echo $key. "<br>";
 
                foreach($value as $key => $value){
                     echo $key." : ".$value."<br>";
                }
            }
        
foreach ($tab as $key =>$value){

    echo"Bonjour je m'appelle ".$value['prenom'].' '.$key." j'ai ".$value['age']." et j'habite à ".$value['ville']."<br>" ;
}








        
    ?>






</body>

</html>