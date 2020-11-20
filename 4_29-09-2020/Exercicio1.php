<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 1 29/09/2020</title>
</head>

<body>
    <h1>Exercício 1</h1>

    <form method="POST">
        <label>Preço:</label><br>
        <input type="text" name="preco"><br>
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $Preco = $_POST['preco'];

        echo "O preço do produto é:R$". number_format($Preco,2)."<br>";
        $Preco += ($Preco * 10 / 100);
        echo "O novo preço com 10% de aumento será:R$". number_format($Preco,2)."<br>";
        $Preco -= ($Preco * 10 / 100);
        echo "O novo preço com 10% de desconto será:R$". number_format($Preco,2);
    }
    ?>
</body>

</html>