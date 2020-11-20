<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Exercício 6 29/09/2020</title>
</head>

<body>
    <h1>Exercício 6</h1>


    <?php
    if ($_POST) {

        $v1 = $_POST['v1'];
        $v2 = $_POST['v2'];
        
        echo "Valor 1 é:$v1 e valor 2 é $v2";
        echo "<br>O valor absoluto de $v2 é" . abs($v2);//Valor absoluto
        echo "<br>A raiz de $v1 é" . sqrt($v1);//Raiz quadrada
        echo "<br>A raiz de $v2 é" . sqrt($v2);
        echo "<br>O valor de $v1 é " . round($v1);//Valor arredondado
        echo "<br>O valor de $v2 é " . round($v2);
        echo "<br>A parte inteira de $v1 é " . intval($v1);//Parte inteira
        echo "<br>A parte inteira de $v2 é " . intval($v2);
        echo "<br>O valor de $v1 em moeda é:R$" . number_format($v1, 2, ",", ".");//Valor em moeda
        echo "<br>O valor de $v2 em moeda é:R$" . number_format($v2, 2, ",", ".");
        echo "<br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);//Número elevado
    }
    ?>
    <br>
    <a href="TesteHtml.html">Voltar</a>
</body>

</html>