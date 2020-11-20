<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício de Laço de Repetição 15/09/2020</title>
</head>

<body>
    <h1>Exercício de Laço de Repetição</h1>

    <form method="POST">
        <label>Número:</label><br>
        <input type="text" name="Numero1"><br>

        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $Num1 = $_POST['Numero1'];

        $Porcentagem = (8*$Num1)/100;
        $Resultado = ($Num1 + $Porcentagem)/10;
        $Cont = 0;
        while($Cont <2){
            $Cont++;
            echo "$Cont ª Parcela:R$ $Resultado<br>";
        }
    }

    ?>
</body>

</html>