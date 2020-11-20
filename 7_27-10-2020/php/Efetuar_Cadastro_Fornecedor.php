<?php

include("conexao.php");

//recebendo os dados
$nome = FormatarMaiusculo($_POST['txtNome']);
$email = FormataMinusculo($_POST['txtEmail']);
$telefone = $_POST['txtTelefone'];
$endereco = FormatarMaiusculo($_POST['txtEndereco']);
$estado = FormatarMaiusculo($_POST['txtEstado']);
$cidade = FormatarMaiusculo($_POST['txtCidade']);
$cep = trim($_POST['txtCEP']);
str_replace(",", ".", $cep);
$cargo = FormatarMaiusculo($_POST['txtCargo']);
$empresa = FormatarMaiusculo($_POST['txtEmpresa']);


$Dados = "Nome:" . $nome . PHP_EOL . "Email:" . $email . PHP_EOL .
    "Telefone:" . $telefone . PHP_EOL . "Endereço:" . $endereco . PHP_EOL .
    "Estado:" . $estado . PHP_EOL . "Cidade:" . $cidade . PHP_EOL . "Cep" . $cep . PHP_EOL .
    "Cargo:" . $cargo . PHP_EOL . "Empresa:" . $empresa . PHP_EOL . PHP_EOL;

$sqlinsert =  "insert into fornecedor  values ( 0,'$nome', '$email', '$telefone', '$endereco', '$estado', '$cidade', '$cep', '$cargo', '$empresa')";
if (ValidaFornecedor($nome, $email, $telefone, $endereco, $estado, $cidade, $cep, $cargo, $empresa) == false) {
    die(include("erro.html"));
} else {
    // executando instrução SQL
    $resultado = @mysqli_query($conexao, $sqlinsert);
    if (!$resultado) {
        die('Query Inválida: ' . @mysqli_error($conexao));
    } else {
        //Variável arquivo armazena o nome e extensão do arquivo.
        $arquivo = "Registros/Fornecedor.txt";
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
    return strtoupper(trim(utf8_decode($maiusculo)));
}
function FormataMinusculo($minusculo)
{
    return strtolower(trim(utf8_decode($minusculo)));
}

function ValidaFornecedor($nome, $email, $telefone, $endereco, $estado, $cidade, $cep, $cargo, $empresa)
{
    if (strlen($nome) <= 3 || strlen($email) <= 5 || strlen($telefone <= 0)) {
        return false;
    } else if (strlen($endereco) <= 0 || strlen($cidade) < 2 || strlen($cep) < 11) {
        return false;
    } else if (strlen($cargo) <= 5 || $estado == "Selecionar" || strlen($empresa) <= 5) {
        return false;
    } else if (empty($nome) || empty($email) || empty($telefone) || empty($endereco) || empty($cidade)) {
        return false;
    } else if (empty($cep) || empty($cargo) || empty($empresa)||is_numeric($nome)) {
        return false;
    } else if (substr($email, -10) == "@gmail.com" || substr($email, -12) == "@hotmail.com") {
        return true;
    }
}
