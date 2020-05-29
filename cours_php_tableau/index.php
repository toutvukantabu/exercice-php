<?php
$prenoms = array ('Xavier', 'Gwendal', 'Vincent', 'Nicolas');
echo ($prenoms[0]);
var_dump ($prenoms) ;

for ($i=0; $i <= 3; $i++){

    if($i == 1){
        echo $prenoms[$i]. ' is the best <br>';

    }else
    echo $prenoms[$i]. '<br>';
}
echo '<br>'; 

?>

<br><br>


<?php
$prenoms = array ('Xavier', 'Gwendal', 'Vincent', 'Nicolas');
foreach ($prenoms as $element) {
    echo $element . '<br>';
}

echo '<br>'; 
?>

<?php
$coordonnees = array(
    'prenom' => 'Gwendal',
    'nom' => 'Bescont',
    'adresse' => '90 route de Bouvron',
    'ville' => 'Siant-nazaire'
);

var_dump ($coordonnees) ;
?>
