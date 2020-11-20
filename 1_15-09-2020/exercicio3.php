<!doctype html>
<html>
    <head>
    <meta charser="UTF-8">
    <title>  title>Primeiro exemplo PHP</title>
    </head>
<body>
<h1>Exercíco 2</h1>

<form method="POST">
    <label>Número:</label><br>
    <input type="text" name="Numero"><br>

    <input name="executar" type="submit"value="Executar">
</form>

<?php
if($_POST){
   
   
    $numero = $_POST['Numero'];
    if($numero == ""){
        echo "Nenhum valor foi passado, tente novamente";
    }else{
    echo "O número digitado foi: $numero";
    }

}
?>
</body>
</html>