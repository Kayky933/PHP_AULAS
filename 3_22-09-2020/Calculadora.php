<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Calculadora 22/09/2020</title>
</head>

<body>
    <h1>Calculadora</h1>

    <form method="POST">
        <label>Valor 1:</label><br>
        <input type="text" name="Numero1"><br>

        <label>Valor 2:</label><br>
        <input type="text" name="Numero2"><br><br>
        Opções
        <select name="operacoes" id="IdOperacoes">
            <option value="1">Soma</option>
            <option value="2">Subtração</option>
            <option value="3">Divisão</option>
            <option value="4">Multiplicação</option>
        </select>
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $Num1 = $_POST['Numero1'];
        $Num2 = $_POST['Numero2'];
        $Operacao = $_POST['operacoes'];

        if ($Operacao == 1) {
            $Total = $Num1 + $Num2;
            
        } else if ($Operacao == 2) {
            $Total = $Num1 - $Num2;
            
        } else if ($Operacao == 3) {
            $Total = $Num1 / $Num2;
          
        } else if ($Operacao == 4) {
            $Total = $Num1 * $Num2;
           
        }
        echo "O total foi:$Total";
    }
    ?>
</body>

</html>