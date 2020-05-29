<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires PHP</title>
</head>

<body>
    <form action="cible.php" method="post">
        <p>
            <label for="">Nom:</label>
            <input type="text" name="nom"><br>
            <label for="">Prénom:</label>
            <input type="text" name="prenom" /><br>
            <label for="">Date de Naissance</label>
            <input type="date" name="datenaissance" id=""/><br>
   
            <input type="submit" value="valider" />
            <select name="statut" id="">
                <option value="Lead développeur">Lead développeur</option>
                <option value="developpeur Sénior">developpeur Sénior</option>
                <option value="Développeur Junior">Développeur Junior</option>
                <option value="Stagiaire">Stagiaire</option>

            </select>
        </p>
    </form>

    <!-- <form action="cible.php" method="get">
        <p>
            <label for="">Nom:</label>
            <input type="text" name="nom"><br>
            <label for="">Prénom:</label>
            <input type="text" name="prenom" /><br>
            <label for="">Date de Naissance</label>
            <input type="date" name="datenaissance" id=""/><br>
   
            <input type="submit" value="valider" />
            <select name="statut" id="">
                <option value="Lead développeur">Lead développeur</option>
                <option value="developpeur Sénior">developpeur Sénior</option>
                <option value="Développeur Junior">Développeur Junior</option>
                <option value="Stagiaire">Stagiaire</option>

            </select>
        </p>
    </form> -->

    <form action="cible.php" method="post">
        <p>
            <label for=""></label>
            <input type="number" name="number1">
            <select name="statut" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" name="number2">
            <input type="submit" value="Calculer" />
         
        </p>
    </form>
</body>

</html>