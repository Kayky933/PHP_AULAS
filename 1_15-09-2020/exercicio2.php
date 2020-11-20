<!doctype html>
<html>
    <head>
    <meta charser="UTF-8">
    <title>  title>Primeiro exemplo PHP</title>
    </head>
<body>
<h1>Exercíco 2</h1>

<form method="POST">
    <label>Número 1:</label><br>
    <input type="text" name="Numero1"><br>

    <label>Número 2:</label><br>
    <input type="text" name="Numero2"><br>

    <label>Número 3:</label><br>
    <input type="text" name="Numero3"><br>

    <input name="executar" type="submit"value="Executar">
</form>

<?php
if($_POST){
   
    $n1 = $_POST['Numero1'];
    $n2 = $_POST['Numero2'];
    $n3 = $_POST['Numero3'];

    $dobron1 = $n1 + $n1;
    $metadesegundo = $n2 /2;
    $somadotriplo = $n1*3 + $n3*3;
    $aocubo = $n3*3;
    echo "O dobro do primeiro número é: $dobron1, $metadesegundo é a metade do segundo, e $aocubo é o numero 3 elevado ao cubo .";
   
}
?>
</body>
</html>