<!doctype html>
<html>
    <head>
    <meta charser="UTF-8">
    <title>   Exercício 3 15/09/2020</title>
    </head>
<body>
<h1>Exercício 3</h1>

<form method="POST">
    <label>Raio do círculo:</label><br>
    <input type="text" name="Raio"><br>

    <input name="executar" type="submit"value="Executar">
</form>

<?php
if($_POST){
   
    $Raio = $_POST['Raio'];

    $AreaDoCirculo = $Raio * 2;
    echo "A área do círculo é:$AreaDoCirculo"; 
}
?>
</body>
</html>