<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício IF ELSE 3 15/09/2020</title>
</head>

<body>
    <h1>Exercício IF ELSE 3</h1>

    <form method="POST">
        <label>Número 1:</label><br>
        <input type="text" name="Numero1"><br>

        <label>Número 2:</label><br>
        <input type="text" name="Numero2"><br>

        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $Num1 = $_POST['Numero1'];
        $Num2 = $_POST['Numero2'];

        if ($Num1 > $Num2) {
            echo "$Num2, $Num1";
        } else {
            echo "$Num1, $Num2";
        }
    }

    ?>
</body>

</html>