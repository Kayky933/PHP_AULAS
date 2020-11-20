<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 5 15/09/2020</title>
</head>

<body>
    <h1>Exercício 5</h1>

    <form method="POST">
        <label>Número 1:</label><br>
        <input type="text" name="Numero1"><br>

        <label>Número 2:</label><br>
        <input type="text" name="Numero2"><br>

        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $Num1 = $_POST['Numero1'];
        $Num2 = $_POST['Numero2'];
  
        if ($Num1 < $Num2) {
            while ($Num1 <= $Num2) {
            
                echo "$Num1 <br>";
                $Num1++;
            }
        } else {
            while ($Num2 <= $Num1) {
             
            echo "$Num2 <br>";
            $Num2++;
            }
        }
    }
    ?>
</body>

</html>