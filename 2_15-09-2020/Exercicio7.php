<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 7 15/09/2020</title>
</head>

<body>
    <h1>Exercício 7</h1>

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

        if ($Num1 < $Num2) {

            for ($i = $Num1; $i <= $Num2; $i++) {

                echo "$i,<br>";
            }
        } else {

            for ($i = $Num1; $i >= $Num2; $i--) {
                echo "$i,<br>";
            }
        }
    }

    ?>
</body>

</html>