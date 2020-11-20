<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 9 15/09/2020</title>
</head>

<body>
    <h1>Exercício 9</h1>

    <form method="POST">
        <label>Número 1:</label><br>
        <input type="text" name="Numero"><br>
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $Numero = $_POST['Numero'];
        $Resultado = $Numero % 2;
        if ($Resultado == 0) {
            echo "O número $Numero é Par";
        } else {
            echo "O número $Numero é Impar";
        }
    }
    ?>
</body>

</html>