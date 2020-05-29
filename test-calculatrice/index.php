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
            <label for=""></label>
            <input type="number" name="number1">
            <select name="operateur" >
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