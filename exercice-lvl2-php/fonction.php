
<?php



$nb1 = $_POST['number1'];
$taux= 1.26 ;
$operateur = $_POST['calcul_salaire'];

switch ($operateur){

    case 'net':
        $resultat = $nb1 / $taux;
        break;
    case 'brut':
        $resultat = $nb1 * $taux;
        break;
  
         }
         if (!empty($_POST)) {
        
   echo $resultat;  
    }         
?>