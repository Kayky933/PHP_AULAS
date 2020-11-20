<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercícios IF ELSE ELSEIF 1 15/09/2020</title>
</head>

<body>
    <h1>Exercícios IF ELSE ELSEIF 1</h1>

    <form method="POST">
        <label>Número 1:</label><br>
        <input type="text" name="Numero"><br>
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

      $Numero = $_POST['Numero'];
     if($Numero == 0){
    echo "O Número Que você digitou é Zero<br>Número:$Numero";
     }else if($Numero >= 0){
        echo "O Número Que você digitou é Positivo<br>Número:$Numero";
     }else if($Numero <= 0){
        echo "O Número Que você digitou é Negativo<br>Número:$Numero";
     }
    }
    ?>
</body>

</html>