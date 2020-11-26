<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<head>
    <title>Alteracao de Usuarios</title>
</head>

<body>

    <?php
    include_once('conexao.php');
    // recuperando 

    $codigo = $_POST['txtcodigo'];
    $nome = $_POST['txtnome'];
    $senha = $_POST['txtsenha'];
    $perfil =$_POST['txtperfil'];
    // criando a linha do  UPDATE
    $sqlupdate =  "update cliente set nome='$nome', senha='$senha',perfil='$perfil'" .
        "estado='$estado', cidade='$cidade', cep='$cep', cargo='$cargo', empresa='$empresa' where id=$codigo";

    // executando instru��o SQL
    $resultado = @mysqli_query($conexao, $sqlupdate);
    if (!$resultado) {
        echo '<input type="button" onclick="window.location=' . "'../index.html'" . ';" value="Voltar"><br><br>';
        die('<b>Query Inv�lida:</b>' . @mysqli_error($conexao));
    } else {
        echo "Registro Alterado com Sucesso";
    }
    mysqli_close($conexao);
    ?>
    <br><br>
    <input type='button' onclick="window.location='../index.html';" value="Voltar">
</body>

</html>