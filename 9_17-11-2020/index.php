<?php
include("php/conexao.php");
include("php/banco/banco-usuarios.php");
include("php/logica-usuario.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<title> Tela de Login </title>

<body>

    <div class="container">
        <div class="jumbotron">
            <center>
                <h3> Acesso ao Sistema Livre Entrada
                </h3>
            </center>
            <br>
            <form name="frmlogin" method="post">
                <b>Usuário:</b> <input class="form-control" type="text" name="usuario"><br><br>
                <b>Senha:</b> <input class="form-control" type="password" name="senha"><br><br>
                <center>
                    <input class="btn btn-primary" type="submit" value="ENTRAR">
                    <input class="btn btn-danger" type="reset" value="LIMPAR">

                    <?php
                    if ($_POST) {
                        $usuario = $_POST['usuario'];
                        $senha = $_POST['senha'];
                        //1 passo verificar se o usuario existe

                        //Passando sem colocar login e senha vai direto
                        if (efetuaLogin($conexao, $usuario, $senha)) {
                            logaUsuario($usuario);
                            header("Location: menu.html");
                        } else {
                            $usuario = $_POST['usuario'];
                            echo "<br><br>
                   <label class='alert alert-danger'>
                       Usuário ou Senha Incorretos!
                    </label>";
                        }
                    }
                    ?>
                </center>
            </form>
        </div>
    </div>
</body>

</html>