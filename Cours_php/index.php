<?php
for ($i=0; $i<10; $i++) {
   echo "Boucle en PHP Numéro : ".$i."<br>";

}

echo "<br>";

for ($i=0; $i<11; $i++) {
   echo $i." ";
}

for ($i=5; $i<9; $i++) {
    echo $i."<br>";
 }
 

?>

<?php

echo "<Les balises while>";

$i = 0;
while ($i < 11) {
   echo $i."-" ;
   $i+=0.1;
  
}
echo "<br>";
?>


<?php
$i = 20;
do {
   echo $i;
   $i++;
} while ($i<9);
?>


