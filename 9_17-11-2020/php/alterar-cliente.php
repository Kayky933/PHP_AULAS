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
    $sqlconsulta =  "select * from cliente where id = '$codigo'";

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
    <form name="cliente" action="veralteracao-cliente.php" method="post">
        <b>Codigo:</b> <input type="number" name="txtcodigo" value='<?php echo $dados['id']; ?>' readonly><br><br>
        <b>nome:</b> <input type="text" name="txtnome" maxlength='80' style="width:550px" value='<?php echo $dados['nome']; ?>'><br><br>
        <b>email: </b> <input type="text" name="txtemail" maxlength='80' style="width:550px" value='<?php echo $dados['email']; ?>'><br><br>
        <b>endereço: </b> <input type="text" name="txtendereco" value='<?php echo $dados['endereco']; ?>'><br>
        <b>Telefone: </b> <input type="text" name="txttelefone" value='<?php echo $dados['telefone']; ?>'><br><br>


        <input type="submit" value="Ok">&nbsp;&nbsp;
        <input type="reset" value="Limpar">
        <input type='button' onclick="window.location='../index.html';" value="Voltar">
    </form>
</body>

</html>