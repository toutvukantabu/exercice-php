<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>exercice7 les multiples </h1>

<?php
$resultat= 0;
$chiffre= 15; 

if ($chiffre % 5==$resultat & $chiffre % 5 ==$resultat) 
{
  echo "ce chiffre est un multiple de 3 et de 5";
}
else{
echo "$chiffre ce chiffre n'est pas un multiple de trois ni de 5 ";
}


?>
<!-- 

<h2>application tva </h2>
<form action="<?php //echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
<label for="entrez votre prix pour calculer la tva ">
    <input type="number" name= "HT">
</label>
<input type="submit" name="TTC" value="calculer"  >


</form> -->

<?php

// $nb1 = $_POST['HT'];
// $nb2=1.2;
// $resultat =$nb1 * $nb2;

//     echo "voici le prix $resultat tva incluse";

?>


<!-- <H2>Devises etrangere</H2>
//<form action="<?php //echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
<p>
            <label for=""></label>
            <input type="number" name="monnaie">
            <select name="operateur" >
                <option value="$">$</option>
                <option value="£">£</option>
                <option value="CHF">CHF</option>
                
            </select>
            
            <input type="submit" value="Calculer" />
         
        </p>        
        </form> -->
<?php

// $monnaie= $_POST['monnaie']; 
// $operateur= $_POST['operateur'];
// $livressterling=0.894529;
// $dollard=0.894529;
// $CHF=1.05896;

// switch ($operateur){

//     case '$':
//         $resultat = $monnaie*$dollard;
//         break;
//     case '£':
//         $resultat = $monnaie*$livressterling;
       
//         break;
//     case 'CHF':
//         $resultat = $monnaie* $CHF ;
//         break;
//              }
?>
<!-- <p>Le résultat de l'opération est <?php //echo $resultat ." ". $operateur ?> </p> -->

 


<h2>EXERCICE sexe et age</h2>
<?php
$age=12;
$sexe=1;



if ($sexe=1 and ($age>=18) )
{

    echo "vous etes majeur";
}
    else {

        echo "vous êtes mineur";
    }

?>


<h2> Les codes postaux</h2><br>

<?php

$i = 44000;

while ($i<44999){
    echo $i. "-";
    $i++;
}
?>
<br><br>
__________________________________________________________________br    <br><br><br>


exercice 13 <br><br><br>



<?php
// $i=0;
// while ( $i < 20) {

//     if ($i==10){
//         echo "<strong>".$i."</strong>";

//     }
//     else{
//         echo $i. ' ';
//     }
//     $i+=2;
// }

?>




<br><br><br>


_______________________________________________________________ <br><br><br>
 <br>



<h2>exercice 14</h2>

<?php



// do {

//     $a=rand(1,20);
//     $b=rand (6,99);
//     $c=rand (1,33);
//     echo   $a."," .$b."," .$c. "<br>";
    

// }

// while( $a%2 ==1 || $b%2 ==0 || $c%2==0);
?>

_______________________________________________________________ <br><br><br>
 <br>



<h2>exercice 15</h2>



<?php

$un= 9;
$tirage= 0;

while ($i != $un){
    $i=rand(0,10);
    echo $i .'<br>';
    $tirage++;

}

echo $tirage . ' essais pour trouver '. $un;
             
?>



<?php

// for($tirage=0; $tirage!=$un; $)




?>





















</body>
</html>