<!doctype html>
<html>

<head>
    <meta charser="UTF-8">
    <title> Exercício 4 29/09/2020</title>
</head>

<body>
    <h1>Exercício 4</h1>

    <form method="POST">
        <input name="executar" type="submit" value="Executar">
    </form>

    <?php
    if ($_POST) {

        $texto1 = "Kayky";
        $$texto1 = "MatosSantana";
    
       echo "A variável texto1 vale $texto1<br>";
       echo " A variável criada recebeu o valor $Kayky";
    }
    ?>
</body>

</html>