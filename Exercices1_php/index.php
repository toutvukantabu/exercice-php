<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
 $nom="Gwendal";
 $anneedenaissance=2000; 
 $anneeactuelle=2015;
$age=$anneeactuelle-$anneedenaissance;  
echo 'bonjour Mr '.$nom.' Vous avez '.$age.' ans';

?>
 
 
    <?php
    $note_math=15;
    $note_francais=12;
    $note_hg=9;
    $moyenne_generale=($note_hg+$note_francais+$note_math)/3;
    echo'la moyenne génerale est '.$moyenne_generale.'/20';

?>

</body>

</html>
