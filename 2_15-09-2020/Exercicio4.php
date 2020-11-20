<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 4 15/09/2020</title>
</head>

<body>
    <h1>Exercício 4</h1>

    <form method="POST">
        <label>Preço do produto 1:</label><br>
        <input type="text" name="Produto1"><br>

        <label>Preço do produto 2:</label><br>
        <input type="text" name="Produto2"><br>

        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $Produto1 = $_POST['Produto1'];
        $Produto2 = $_POST['Produto2'];

        $PorcentoProd1 = (8 * $Produto1) / 100;
        $PorcentoProd2 = (11 * $Produto2) / 100;
        $Pagar = $PorcentoProd1 + $PorcentoProd2;
        echo "Valor a ser pago:$Pagar";
    }
    ?>
</body>

</html>