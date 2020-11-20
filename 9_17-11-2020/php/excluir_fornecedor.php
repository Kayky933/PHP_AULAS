<?php
include("conexao.php");

$nome = $_POST['txtnome'];
$email = $_POST['txtemail']; 

$sqldelete ="delete from fornecedor where nome='$nome' and email='$email'";
$resultado = @mysqli_query($conexao, $sqldelete);
if (!$resultado) {
    echo '<input type="button" onclick="window.location=' . "'../menu.html'" . ';" value="Voltar"><br><br>';
    die('<b>Query Inv�lida:</b>' . @mysqli_error($conexao));
} else {
    echo "<br><br>
        <label class='alert alert-success'>
            Cliente apagado com sucesso!!
            <input type='button' onclick='window.location=" . '"../menu.html"' . ";' value='Voltar'>
         </label>";
}
mysqli_close($conexao);
?>