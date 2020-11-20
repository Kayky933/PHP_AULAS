<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 5 29/09/2020</title>
</head>

<body>
    <h1>Exercício 5</h1>

    <form method="POST">
        <label>Número 1:</label><br>
        <input type="text" name="num1"><br>

        <label>Número 2:</label><br>
        <input type="text" name="num2"><br>
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $n1= $_POST['num1'];
        $n2= $_POST['num2'];
        $media = ($n1+$n2)/2;
        
        echo "A soma dos dois valores passados é ".($n1+$n2); 
        echo "<br>A subtração dos dois valores passados é ".($n1-$n2);
        echo "<br>A Divisão dos dois valores passados é ".($n1/$n2);
        echo "<br>O Modulo dos dois numeros passados vale ".($n1%$n2);
        echo "<br>A média dos dois numeros passados vale $media";
    }
    ?>
</body>

</html>