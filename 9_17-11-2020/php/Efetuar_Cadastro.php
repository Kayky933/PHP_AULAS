<?php

include("conexao.php");
 
//recebendo os dados
$nome = FormatarMaiusculo($_POST['txtnome']);
$senha = $_POST['txtsenha'];
$perfil = FormatarMaiusculo($_POST['txtperfil']);

$Dados = "Nome:" . $nome . PHP_EOL . "senha:" . $senha . PHP_EOL . "Perfil:" . $perfil . PHP_EOL . PHP_EOL;
$sqlinsert =  "insert into usuario  values ( 0,'$nome', '$senha', '$perfil')";
if (ValidaUsuario($nome, $senha) == false) {
	die(include("erro.html"));
} else { 
	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		die('Query Inválida: ' . @mysqli_error($conexao));
	} else {
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo = "Registros/Usuario.txt";
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

function ValidaUsuario($nm, $senh)
{
	if (strlen($nm) <= 3||is_numeric($nm) ||empty($nm)||empty($senh)|| strlen($senh) <= 5) {
		return false;
	} else {
		return true;
	}
}
