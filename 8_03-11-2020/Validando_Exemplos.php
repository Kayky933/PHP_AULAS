<?php
//verifica número mínimo de caracteres 
$nome = $_GET['nome'];
if(strlen($nome)<=2){
echo "Preencha o nome com no mínimo 2 caracteres.";
}else{
echo "Seu nome \"$nome\" tem ".strlen($nome)." caracteres.";
}
?>


<?php
//informar apenas números
$idade = $_GET['idade'];
if(!is_numeric($idade)){
echo "Preencha a idade somente com números.";
}else{
echo "Sua idade é ".$idade." anos.";
}
?>



<?php
//Se as palavras NÂO PODE TER ESPAÇO entre elas
$palavra = "teste teste";
if(strstr($palavra, " ")){
echo "A palavra não pode ter espaços.";
}else{
echo "Você escreveu ".$palavra;
}
?>


<?php
//Evitando campo vazio
$palavra = "1     2    3   4";
if(empty($palavra)){
echo "A palavra não pode estar vazia.";
}else{
echo "Você escreveu ".$palavra;
}
?>


<?php
//Validando e-mail (expressão regular)
$email = "maria.ribeiro2@etec.sp.gov.br";
if(!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)){
echo "E-mail inválido.";    
}else{
echo "Seu e-mail é ".$email;
}
?>


<?php
//Outro modo de usar a validação de e-mail por função própria PHP
$email = "maria.ribeiro2@etec.sp.gov.br";
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "E-mail inválido.";    
}else{
echo "Seu e-mail é ".$email;
}
?>


<?php
//Validando CEP
$cep = "55324-424";
if(!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep)) {
  echo "CEP inválido.";
}
?>


<?php
//Validando Data
$data = "04/04/2011";
if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data)) {
echo "Data inválida.";
}
?>

<?php
//Validando telefone
$telefone = "(82) 5555-5555";
if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{4}-[0-9]{4}$^', $telefone)){
echo "Telefone inváildo.";
}
?>

<?php
//Validando CPF
$cpf = "111.122.792.12";
if(!preg_match('/^[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}$/', $cpf)) {
echo "CPF inválido.";
}
?>

<?php
//Aqui apenas a função criada... precisa passar valor de um cpf para verificar
function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
            return false;
        }
    }
    return true;
}
?>