


<!-- // Exercice1 -->
<?php
function incrementation($nb)
{

    for ($suite_nombre = $nb; $suite_nombre <= 100; $suite_nombre += $nb)

        if ($suite_nombre + $nb > 100) {
            echo $suite_nombre   . ' ';
        } else {
            echo $suite_nombre  . ',';
        }
}

?>

<!-- // Exercice2 -->

<?php

function modulo($nb2)
{



    if ($nb2 % 2 == 0) {
        echo '<p>ce chiffre ' . $nb2 . ' est pair </p><br> ';
    } else {
        echo '<p>ce chiffre ' . $nb2 . ' est impair </p><br> ';
    }

    if ($nb2 % 4 == 0) {
        echo '<p>ce chiffre ' . $nb2 . 'est  un multiple de 4 </p><br> ';
    } else {
        echo '<p>ce chiffre ' . $nb2 . ' n\'est pas un multiple de 4 </p><br> ';
    }
    if ($nb2 % 3 == 0) {
        echo '<p>ce chiffre ' . $nb2 . ' est un multiple de 3 </p><br> ';
    } else {
        echo '<p>ce chiffre ' . $nb2 . ' n\'est pas un multiple de 3 </p><br> ';
    }
}
?>
<!-- // Exercice3 -->


<?php
function rectangle($a, $b)
{
    $air = $a * $b;
    echo '<p> L\'air du rectangle est ' . $air . ' </p><br> ';
}
?>

<!-- // Exercice4 -->

<?php
function nombre_aleatoire(){
  
do {

    $nb1=rand(0,9);
    $nb2=rand(0,9);
    $nb3=rand(0,9);
    echo $nb1.$nb2.$nb3;
}
while ($nb1+$nb2+$nb3 !=10);
echo "la somme de $nb1+$nb2+$nb3=10"; 
}

?>

<!-- // Exercice5 -->
<?php
function racine( ){

for($i=0; $i<11; $i++){
echo $i*$i.' ';

}

}


?>

<!-- // Exercice6 -->
<?php
function fibonacci()
{
    $x = 0;    
    $y = 1; 
    
    for($i=0;$i<=10;$i++)    
    {    
        $z = $x + $y;    
        echo $z."<br />";         
        $x=$y;       
        $y=$z;     
    }   
    
}

?>
<!-- // Exercice7 -->
<?php
function heure_date()
{
    date_default_timezone_set('Europe/Paris');

    echo date('d/m/o  H:i:s');
    
   
}

?>


