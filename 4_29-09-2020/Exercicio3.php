<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 3 29/09/2020</title>
</head>

<body>
    <h1>Exercício 3</h1>

    <form method="POST">
      
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $num1 = 3;
        $num2 = &$num1;
        $num2+=$num1;
       echo "A variável num1 vale $num1 e a variável num2 Vale $num2";
      
    }
    ?>
</body>

</html>