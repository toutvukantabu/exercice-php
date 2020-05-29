<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

    <h3>Exercice 1</h3>

    ======================================================================================== <br><br><br>

    <?php

?>

    <form action="cible.php" method="post">
        <label for="">entrez votre Nom</label>
        <input type="text" name="nom">
        <input type="submit" value="envoyer">
    </form>








    <h3>Exercice 2</h3>

    ======================================================================================== <br><br><br>

    <?php
echo basename( __DIR__ , '.php'	);
?>

    <?php
echo __DIR__;
?>



    <br><br>
    <h3>Exercice 3</h3>

    ======================================================================================== <br><br><br>

    <?php
$salaire = array(
    'Salaire de Mr B' => 'Salaire de Mr B' ,'1520€',  '<br>',
    'Salaire de Mr T' => 'Salaire de Mr T','1680€','<br>',
    'Salaire de Mr X' => 'Salaire de Mr X',  '2150€', '<br>',

);
echo '<br> <br><br>';
foreach ($salaire as $element){

    echo $element." " ;

}


$mrb=['Salaire de Mr B' ,'1520€'];
$mrt=['Salaire de Mr T','1680€'];
$mrx=['Salaire de Mr X',  '2150€'];


echo '<br> <br><br>';

     

echo'  <div class="table1" >  <table border=1 >

<tr >
    <td>'.$mrb[ 0].' </td>
    <td>'.$mrb[ 1].'</td>
</tr>

<tr>
    <td>'.$mrt[ 0].'</td>
    <td>'.$mrt[ 1].'</td>
</tr>

<tr>
 <td>'.$mrx[ 0].'</td>
    <td>'.$mrx[ 1].'</td>
</tr>

</table>

</div>';





echo '<br> <br><br>';

     

echo'  <div class="table1" >  <table border=1 >

<tr >
    <td>Salaire de Mr B </td>
    <td>1520€</td>
</tr>

<tr>
    <td>Salaire de Mr T</td>
    <td>1680€</td>
</tr>

<tr>
 <td>Salaire de Mr X</td>
    <td>2150€</td>
</tr>

</table>

</div>';

?>

    <br><br>
    <h3>Exercice 4</h3>

    ======================================================================================== <br><br><br>

    <?php

setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
echo strftime(' %d %m  %Y , %H:%M <br><br>');
echo strftime(' %d/%m/%Y , %H:%M <br><br>');
echo strftime(' %d.%m.%Y , %H:%M <br><br>');

echo date('d m y <').'br><br>';

?>
    <?php

echo '<br> <br><br>';

error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set('Europe/Paris');
$date_debut = strtotime("2020-05-28 02:12:51"); 
$date_fin = strtotime("2021-03-08 11:10:00"); 
echo "Il y a ".round(($date_fin - $date_debut)/60/60/24,0)." jours entre les deux dates";
?>
    <?php
$date = date("Y-m-d");
$birthday = "2021-01-18";
$nbj = (strtotime($birthday)-strtotime($date))/86400;
echo "Mon anniversaire est le 18 janvier il me reste donc ".$nbj." jours avant mon anniversaire";
?>




    <br><br>
    <h3>Exercice 5</h3>

    ======================================================================================== <br><br><br>

    <?php

$nombre[0] = rand(1,40);
$nombre[1] = rand(1,40);
$nombre[2] = rand(1,40);
$nombre[3] = rand(1,40);
$nombre[4] = rand(1,40);
$nombre[5] = rand(1,40);
$nombre[6] = rand(1,40);
$nombre[7] = rand(1,40);
$nombre[8] =rand(1,40);
$nombre[9] = rand(1,40);

echo max($nombre);
echo '<br> <br><br>';
echo min($nombre);
echo '<br> <br><br>';


echo '<br> <br><br>';

echo'  <div class="table1" >  <table border=1 >

<tr >
    <td>'.$nombre[0].' </td>
    <td>'.$nombre[1].'</td>
    <td>'.$nombre[2].' </td>
    <td>'.$nombre[3].'</td>
    <td>'.$nombre[4].' </td>
    <td>'.$nombre[5].'</td>
    <td>'.$nombre[6].' </td>
    <td>'.$nombre[7].'</td>
    <td>'.$nombre[8].' </td>
    <td>'.$nombre[9].'</td>
</tr>

</table>
</div>';

echo '<div class="table1" ><table border=1><tr><br><br>';
asort($nombre);
foreach ($nombre as $element) {
   echo '<td>'.$element.'</td>';
}
echo '</tr></table></div>';

?>

    <br><br>
    <h3>Exercice 6</h3>

    ======================================================================================== <br><br><br>


    <?php

$resultat= sqrt(77);
echo (round($resultat, 2));

?>


    <br><br>
    <h3>Exercice 7</h3>

    ======================================================================================== <br><br><br>

    <?php
$texte = "Mais comment transformer un texte en majuscule en PHP ?";
echo '<br> <br><br>';
echo strtoupper($texte);
echo '<br> <br><br>';
echo strtolower($texte);
echo '<br> <br><br>';
echo ucfirst($texte);
echo '<br> <br><br>';
echo ucwords($texte);
?>

    <br><br>
    <h3>Exercice 8</h3>

    ======================================================================================== <br><br><br>
    <?php

$nb=[];

for ($i=0; $i<31;$i++ ){
     $nb[]=$i;
}

$sum =array_sum($nb);
var_dump($sum);
echo $sum;
?>

    <h3>Exercice 9</h3>

    ======================================================================================== <br><br><br>
    <?php

$nb=[];

for ($i=0; $i<100;$i++ ){
     $nb[]=$i;
}

foreach ( $nb as $element ){

    if ($element<10){
        echo "0".$element.",";
       
    }
    elseif($element >=99){
        echo $element; 

    }
    else {
        echo $element.",";
    }
}

?>

    <br><br>
    <h3>Exercice 8</h3>

    ======================================================================================== <br><br><br>
    <?php
$ceu = array( "Italie"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgique"=> "Bruxelles", "Danemark"=>"Copenhague", "Finlande"=>"Helsinki", "France" => "Paris", "Slovaquie"=>"Bratislava", "Slovénie"=>"Ljubljana", "Allemagne" => "Berlin", "Grèce" => "Athène", "Irlande"=>"Dublin", "Pays Bas"=>"Amsterdam", "Portugal"=>"Lisbonne", "Espagne"=>"Madrid", "Suède"=>"Stockholm", "Royaume Unis"=>"Londre", "Chypre"=>"Nicosie", "Lituanie"=>"Vilnius", "République Tchèque"=>"Prague", "Estonie"=>"Tallinn", "Hongrie"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Vallette", "Autriche" => "Vienne", "Pologne"=>"Varsovie") ;


var_dump($ceu);

foreach ($ceu as $Pays => $capitale) {

// echo $Pays;
// echo $capitale;
echo '<p>La capital de '.$Pays.' est '.$capitale.'</p>';   
}


?>


</body>

</html>