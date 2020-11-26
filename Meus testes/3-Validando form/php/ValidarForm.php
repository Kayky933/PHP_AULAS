<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Exercício 3 13/10/2020</title>
</head>

<body>
<?php
if($_POST){
    $NomeAluno = $_POST["NomeDoAluno"];
    $NomeMae =  $_POST["NomeDaMae"];
    $NomePai =  $_POST["NomeDoPai"];
    $TelefoneDDD =  $_POST["TelefoneDDD"];
    $NumeroTelefone =  $_POST["NumeroTelefone"];
    $Ramal = $_POST["Ramal"];
    $Email = $_POST["Email"];
    $Serie = $_POST["Serie"][0];

    function ValidaTexto($NomeAluno, $NomeMae, $NomePai, $Ramal, $Email){
        
        if((strlen($NomeAluno)||strlen($NomeMae)||strlen( $NomePai)||strlen( $Ramal)||strlen( $Email)) <= 0){
            return false;
        }else{
            return true;
        }
    }
    function ValidaNumero($TelefoneDDD, $NumeroTelefone){
        if(($NumeroTelefone||$TelefoneDDD)<=0){
           return false;
        }else{
            return true;
        }
    }
    if(ValidaTexto($NomeAluno, $NomeMae, $NomePai, $Ramal, $Email)== false)
    {
        echo "<h1>Erro no preenchimento dos campos</h1><br>Preencha os campos de texto corretamente";
    }
    if(ValidaNumero($TelefoneDDD, $NumeroTelefone) == false){
        echo "<br>Preencha os campos numericos corretamente";
    }
}
?>
<a href="../formulario 2.0.html">Voltar</a>
</body>
</html>
