<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<head>
    <title>Exclusao de Usuarios</title>
</head>

<body>

    <?php
    include_once('conexao.php');
    // recuperando 

    $codigo = $_POST['txtcodigo'];

    // criando a linha do  DELETE
    $sqldelete =  "delete from fornecedor where id=$codigo";

    // executando instru��o SQL
    $resultado = @mysqli_query($conexao, $sqldelete);
    if (!$resultado) {
        echo '<input type="button" onclick="window.location=' . "'../index.html'" . ';" value="Voltar"><br><br>';
        die('<b>Query Inv�lida:</b>' . @mysqli_error($conexao));
    } else {
        echo "Registro Apagado com Sucesso";
    }
    mysqli_close($conexao);
    ?>
    <br><br>
    <input type='button' onclick="window.location='../index.html';" value="Voltar">
</body>

</html>