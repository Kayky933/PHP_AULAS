<?php
include("conexao.php");

$nome = $_POST['txtnome'];
$email = $_POST['txtemail']; 

$sqldelete = "update cliente set nome='$nome', email='$email' where email='$email'";
$resultado = @mysqli_query($conexao, $sqldelete);
if (!$resultado) {
    echo '<input type="button" onclick="window.location=' . "'../index.html'" . ';" value="Voltar"><br><br>';
    die('<b>Query Inv�lida:</b>' . @mysqli_error($conexao));
} else {
    echo "<br><br>
        <label class='alert alert-success'>
            Cliente alterado com sucesso!!
            <input type='button' onclick='window.location=" . '"../index.html"' . ";' value='Voltar'>
         </label>";
}
mysqli_close($conexao);
?>