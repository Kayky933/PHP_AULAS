<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Exercício 3 13/10/2020</title>
</head>

<body>
    <h1>Exercício 3</h1>

    <?php
    if ($_POST) {
        $a = array("Maria" => "41,f", "Pedro" => "18,h", "Joao" => "58,h", "Joana" => "15,f");
        foreach ($a as $chave => $valor) {
            $genero = substr($valor, -1);
            if ($genero == "h") {
                echo "Nome: " . $chave . "<br> Sexo : Masculino<br> Idade: $valor<br><br>";
            }
        }
    }
    ?>
    <br>
    <a href="..\Exercicio3.html">Voltar</a>
</body>

</html>