<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if  ($_POST['nom'] == "gwendal" AND  $_POST['mdp'] == "gwendal")
{
echo "<p> Bravo vous êtes un vrais hackeur du dimanche, voici les codes: 'qhsfqYDDQGSHJCFSUXSUQGDYQXIXSHXBBCBLKWJCIKWJC'</p>";
}

else {
    echo "<p>retentes ta chance </p>";
}

?>

<a href="index.php">Revenir à la page d'accueil</a>    

</body>
</html>




