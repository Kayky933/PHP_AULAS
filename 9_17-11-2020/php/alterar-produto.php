<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<head>
    <title>Alteracao de Usuarios</title>
</head>

<body>
    <h2>
        <p align="center"> Alteracao de Usuarios
    </h2>
    <?php
    include_once('conexao.php');
    // recuperando 
    $codigo = $_POST['txtcodigo'];

    // criando a linha do  SELECT
    $sqlconsulta =  "select * from produtos where id = '$codigo'";

    // executando instru��o SQL
    $resultado = @mysqli_query($conexao, $sqlconsulta);
    if (!$resultado) {
        echo '<input type="button" onclick="window.location=' . "'index.html'" . ';" value="Voltar"><br><br>';
        die('<b>Query Inv�lida:</b>' . @mysqli_error($conexao));
    } else {
        $num = @mysqli_num_rows($resultado);
        if ($num == 0) {
            echo "<b>Codigo: </b>nao localizado !!!!<br><br>";
            echo '<input type="button" onclick="window.location=' . "'../index.html'" . ';" value="Voltar"><br><br>';
            exit;
        } else {
            $dados = mysqli_fetch_array($resultado);
        }
    }
    mysqli_close($conexao);
    ?>
    <form name="cliente" action="veralteracao-produto.php" method="post">
        <b>Codigo:</b> <input type="number" name="txtcodigo" value='<?php echo $dados['id']; ?>' readonly><br><br>
        <b>descrição:</b> <input type="text" name="txtdescricao" maxlength='80' style="width:550px" value='<?php echo $dados['descricao']; ?>'><br><br>
        <b>unidade: </b> <input type="text" name="txtunidade" maxlength='80' style="width:550px" value='<?php echo $dados['unidade']; ?>'><br><br>
        <b>peso: </b> <input type="text" name="txtpeso" value='<?php echo $dados['peso']; ?>'><br>
        <b>valor: </b> <input type="text" name="txtvalor" value='<?php echo $dados['valor']; ?>'><br><br>


        <input type="submit" value="Ok">&nbsp;&nbsp;
        <input type="reset" value="Limpar">
        <input type='button' onclick="window.location='../index.html';" value="Voltar">
    </form>
</body>

</html>