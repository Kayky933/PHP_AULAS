<?php
include("conexao.php");

$id = $_POST['txtid']; 
$descricao = $_POST['txtdescricao'];

$sqldelete = "update produtos set descricao='$descricao' where id=$id";
$resultado = @mysqli_query($conexao, $sqldelete);
if (!$resultado) {
    echo '<input type="button" onclick="window.location=' . "'../menu.html'" . ';" value="Voltar"><br><br>';
    die('<b>Query Inv�lida:</b>' . @mysqli_error($conexao));
} else {
    echo "<br><br>
        <label class='alert alert-success'>
            Produto alterado com sucesso!!
            <input type='button' onclick='window.location=" . '"../menu.html"' . ";' value='Voltar'>
         </label>";
}
mysqli_close($conexao);
?>