<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 6 15/09/2020</title>
</head>

<body>
    <h1>Exercício 6</h1>

    <form method="POST">
        <label>Graus Celsius:</label><br>
        <input type="text" name="Celsius"><br>

        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {
    $GrausCelsius = $_POST['Celsius'];
    $Fahrenheit = (9 * $GrausCelsius + 160) / 5;

    echo "Celsius:$GrausCelsius<br>Fahrenheit:$Fahrenheit";
    }
    ?>
</body>

</html>