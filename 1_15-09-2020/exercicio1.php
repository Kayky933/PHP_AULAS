<!doctype html>
<html>
    <head>
    <meta charser="UTF-8">
    <title>  title>Primeiro exemplo PHP</title>
    </head>
<body>
<h1>Exercício 1</h1>

<form method="POST">
    <label>Nota 1:</label><br>
    <input type="text" name="Nota1"><br>

    <label>Nota 2:</label><br>
    <input type="text" name="Nota2"><br>

    <label>Nota 3:</label><br>
    <input type="text" name="Nota3"><br>

    <input name="executar" type="submit"value="Executar">
</form>

<?php
if($_POST){
   
    $n1 = $_POST['Nota1'];
    $n2 = $_POST['Nota2'];
    $n3 = $_POST['Nota3'];

    
    $media = $n1 + $n2 + $n3 / 3;
    echo "a média é: $media";
   
}
?>
</body>
</html>