<?php


$villes[0] = 'Nantes';
$villes[1] = 'Saint Nazaire';
$villes[2] = 'Châteaubriant';
$villes[3] = 'Châteaubriant';

foreach ($villes as $element) {
    echo $element . '<br>';
}
?>

<?php
for ($i=0; $i <= 3; $i++){
    echo $villes[$i]. '<br> <br>';
}
?>

pour compter <br>
)=====================================
<br><br><br><br><br>



<?php
for ($i=0; $i < count($villes); $i++){
    echo $villes[$i]." " ;
}
?>






<br><br><br><br><br>

] =======crochet


<br><br><br>


<?php
$coordonnees = array(
    'nom' => 'France',
    'langue' => 'Français',
    'devise' => 'Euros',
    'population' => '67000000',
    'capitale' => 'paris',
    
);

echo count($coordonnees);

echo '<br> <br> <br>';



foreach ($coordonnees as $element) {
    echo $element . '<br>';
      }
?>










