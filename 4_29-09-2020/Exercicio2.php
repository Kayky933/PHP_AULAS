<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 2 29/09/2020</title>
</head>

<body>
    <h1>Exercicio 2</h1>

    <form method="POST">
        <label>Preço:</label><br>
        <input type="text" name="atual"><br>
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {
        //Ano atual
        $atual = $_POST['atual']; #Recebe ano atual
        /*
        Faz a conta para mostrar o ano atual
        e o anterior
        */
        echo "O Ano atual é $atual e o ano anterior é " . --$atual;
    }
    ?>
</body>

</html>