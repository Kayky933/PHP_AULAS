<!doctype html>
<html>
    <head>
    <meta charser="UTF-8">
    <title>  Exercício 1 15/09/2020</title>
    </head>
<body>
<h1>Exercício 1</h1>

<form method="POST">
    <label>Nota 1:</label><br>
    <input type="text" name="Nota1"><br>

    <label>Nota 2:</label><br>
    <input type="text" name="Nota2"><br>

    

    <input name="executar" type="submit"value="Executar">
</form>

<?php
if($_POST){
   
    $n1 = $_POST['Nota1'];
    $n2 = $_POST['Nota2'];

    $maior_num = $n1 + $n2  / 2;
    if($maior_num >= 7){
    echo "a média é: $maior_num";
    }
    else{
        echo "Aluno reprovado!!";
    }
   
}
?>
</body>
</html>