
<?php
include("conexao.php"); 

//recebendo os dados
$nome = FormatarMaiusculo($_POST['txtnome']);
$endereco = FormatarMaiusculo($_POST['txtendereco']);
$telefone = FormataMinusculo($_POST['txtTelefone']);
$email = FormataMinusculo($_POST['txtemail']);

$Dados = "Nome:" . $nome . PHP_EOL . "Endereço:" . $endereco . PHP_EOL .
	"Telefone:" . $telefone . PHP_EOL . "Email:" . $email . PHP_EOL . PHP_EOL;
 
$insert =  "insert into cliente  values ( 0,'$nome', '$endereco', '$telefone', '$email')";
if (ValidaCliente($nome, $endereco, $telefone, $email) == false) {
	die(include("erro.html"));
} else {
	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $insert);
	if (!$resultado) {
		die('Query Inválida: ' . @mysqli_error($conexao));
	} else {
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo = "Registros/Cliente.txt";
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

function ValidaCliente($nm, $end, $tel, $emai)
{
	if (strlen($nm) == 0 || is_numeric($nm) || empty($nm) || strlen($tel) < 14 || strlen($emai) == 0 || strlen($end) == 0) {
		return false;
	} else if (empty($end)||empty($tel)||empty($emai)||is_numeric($nm)) {
		return false;
	} else if (substr($emai, -10) == "@gmail.com" || substr($emai, -12) == "@hotmail.com") {
		return true;
	}
}
?>