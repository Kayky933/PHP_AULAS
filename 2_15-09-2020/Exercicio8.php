<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 8 15/09/2020</title>
</head>

<body>
    <h1>Exercício 8</h1>

    <form method="POST">
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $Numero = array(0, 1, 2, 3, 4, 5, 6, 8, 9, 10);
        foreach ($Numero as $N) {
            echo $N . "<br/>";
        }
    }
    ?>
</body>

</html>