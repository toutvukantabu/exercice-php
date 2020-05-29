
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement de l'information en PHP</title>
</head>
<body>

    <?php

       $birthday = date('d/m/Y',strtotime($_POST['datenaissance']));

?>
    <p>Bonjour!</p>
    <p>Tu t'appelles <?php echo $_POST['prenom'].' '. $_POST['nom']; ?>!</p>
     <p>Tu es né le <?php echo  $birthday; ?></p>
     <p>et tu es <?php echo $_POST['statut']; ?></p>

    <P>retour <a href="index.php">cliques ici</a></P>



    <?php

$birthday = date('d/m/Y',strtotime($_GET['datenaissance']));

?>
<p>Bonjour!</p>
<p>Tu t'appelles <?php echo $_GET['prenom'].' '. $_GET['nom']; ?>!</p>
<p>Tu es né le <?php echo  $birthday; ?></p>
<p>et tu es <?php echo $_GET['statut']; ?></p>

<P>retour <a href="index.php">cliques ici</a></P>
</body>
</html>