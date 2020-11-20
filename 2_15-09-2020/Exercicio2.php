<!doctype html>
<html>
    <head>
    <meta charser="UTF-8">
    <title> Exercício 2 15/09/2020</title>
    </head>
<body>
<h1>Exercício 2</h1>

<form method="POST">
    <label>Número 1:</label><br>
    <input type="text" name="Numero1"><br>

    <label>Número 2:</label><br>
    <input type="text" name="Numero2"><br>

    

    <input name="executar" type="submit"value="Executar">
</form>

<?php
if($_POST){
   
    $n1 = $_POST['Numero1'];
    $n2 = $_POST['Numero2'];

   if($n1 < $n2){
       echo "O número 1 é menor que o número 2";
   }
   else{
    echo "O número 2 é menor que o número 1";
   }
   
   
}
?>
</body>
</html>