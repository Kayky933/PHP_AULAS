<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<head>
    <title>Exclus�o de Usu�rios</title>
</head>

<body>
    <h2>
        <p align="center"> Exclus�o de Usu�rios
    </h2>
    <?php
    include_once('conexao.php');
    // recuperando 
    $codigo = $_POST['txtcodigo'];

    // criando a linha do  SELECT
    $sqlconsulta =  "select * from usuario where id = $codigo";

    // executando instru��o SQL
    $resultado = @mysqli_query($conexao, $sqlconsulta);
    if (!$resultado) {
        echo '<input type="button" onclick="window.location=' . "'../index.html'" . ';" value="Voltar"><br><br>';
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
    <form name="usuario" action="excluir-usuario.php" method="post">
        <b>Codigo:</b> <input type="number" name="txtcodigo" value='<?php echo $dados['id']; ?>' readonly><br><br>
        <b>Usuario:</b> <input type="text" name="txtnome" maxlength='80' style="width:550px" value='<?php echo $dados['nome']; ?>'><br><br>
        <b>Senha: </b> <input type="password" name="txtsenha" maxlength='80' style="width:550px" value='<?php echo $dados['senha']; ?>'><br><br>
        <b>Perfil: </b> <input type="text" name="txtperfil" value='<?php echo $dados['perfil']; ?>'><br><br>



        <input type="submit" value="Ok">&nbsp;&nbsp;
        <input type="reset" value="Limpar">
        <input type='button' onclick="window.location='../index.html';" value="Voltar">
    </form>
</body>

</html>