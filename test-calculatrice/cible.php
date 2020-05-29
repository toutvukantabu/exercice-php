<?php


$nb1 = $_POST['number1'];
$nb2 = $_POST['number2'];
$operateur = $_POST['operateur'];

switch ($operateur){

    case '+':
        $resultat = $nb1+$nb2;
        break;
    case '-':
        $resultat = $nb1-$nb2;
        break;
    case '*':
        $resultat = $nb1*$nb2;
        break;
    case '/':
        $resultat = $nb1/$nb2;
        break;
    case '%':
        $resultat = $nb1%$nb2;
        break;
         }

?>

<p>Le résultat de l'opération est <?php echo $resultat ?></p>
    <p>Retour <a href="index.php">clique ici</a></p>