
<?php
include("conexao.php");

//recebendo os dados
$Descricao = FormatarMaiusculo($_POST['txtDescricao']);
$Unidade_De_Medida = $_POST['txtUnidadeDeMedida'];
$Peso = $_POST['txtPeso'];
$Valor = $_POST['txtValor'];
str_replace(",", ".", $Valor); 
str_replace(",", ".", $Peso);

$Dados = "Descrição:" . $Descricao . PHP_EOL . "Unidade de medida:" . $Unidade_De_Medida . PHP_EOL .
    "Peso:" . $Peso . PHP_EOL . "Valor:" . $Valor . PHP_EOL . PHP_EOL;

$insert =  "insert into produtos  values ( 0,'$Descricao', '$Unidade_De_Medida', '$Peso', '$Valor')";
if (ValidaProduto($Descricao, $Unidade_De_Medida, $Peso, $Valor) == false) {
    die(include("erro.html"));
} else {
    // executando instrução SQL
    $resultado = @mysqli_query($conexao, $insert);
    if (!$resultado) {
        die('Query Inválida: ' . @mysqli_error($conexao));
    } else {
        //Variável arquivo armazena o nome e extensão do arquivo.
        $arquivo = "Registros/Produto.txt";
        //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
        $fp = fopen($arquivo, "a+");
        //Escreve no arquivo aberto.
        fwrite($fp, $Dados);
        //Fecha o arquivo.
        fclose($fp);
        die(include("sucesso.html"));
    }
    mysqli_close($conexao);
}
function FormatarMaiusculo($maiusculo)
{
    return strtoupper(utf8_decode($maiusculo));
}

function FormataMinusculo($minusculo)
{
    return strtolower(utf8_decode($minusculo));
}

function ValidaProduto($desc, $tpeso, $pes, $val)
{
    if (strlen($desc) <= 0  || strlen($tpeso) <= 1 || $tpeso == "Selecionar" || $pes <= 0 || $val <= 0) {
        return false;
    } else if (empty($desc) || empty($pes) || empty($val)) {
    } else {
        return true;
    }
}
?>