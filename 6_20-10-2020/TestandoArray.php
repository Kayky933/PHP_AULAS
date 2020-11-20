<?php
//Exemplos de Diferentes formas de arrays
$valores1 = array(
    100,
    500,
    1000
);

$valores2 = [
    100,
    500,
    1000
];

//Print_r serve como se fosse o echo que nós usamos para exibir os dados
print_r($valores1);
echo '<br />';
print_r($valores2);

//Tipos de dados diferentes dentro de um array
$minhaArray = array(
    100, // Tipo de dado numérico
    new DateTime(), // Tipo de dado Object
    'Qualquer texto', // Tipo de dado String
    array('fiat', 'hunday', 'suzuki'), // Tipo de data array
    true,
    200
);
/*
<pre> é a tag utilizada para representar texto pré-formatado.
 Espaços em branco são mantidos no texto da mesma forma em que este foi digitado.
*/
echo '<pre>';
print_r($minhaArray);
echo '</pre>';
//Passando informações para um array como se fosse um cadastro de um cliente
$cliente = array(
    'nome' => 'Antonio',
    'sobrenome' => 'Carlos',
    'idade' => 35,
    'telefone' => '9999-9999'
);
echo '<pre>';
print_r($cliente);
echo '</pre>';

$cliente = array(
    'id',//Em uma tabela do baco de dados o id é por padrão auto_Increment, por isso não é passado
    'nome' => 'Antonio',
    'sobrenome' => 'Carlos',
    'idade' => 35,
    'telefone' => '9999-9999',
    5 => 2120,
    "cadastrado"
);
echo '<pre>';
print_r($cliente);
echo '</pre>';
//A função count serve para contar quantos elementos existem
$elementos = count($cliente);

echo "Meu Array possui: " . $elementos . ' elementos';

$cliente = array(
    'id',
    'Antonio',
    'Carlos',
    35,
    '9999-9999',
    2120,
    "cadastrado"
);

echo '<pre>';
print_r($cliente);
echo '</pre>';

echo "Meu Array possui: " . count($cliente) . ' elementos';
echo '<br><br>';
//Percorrendo posições diferentes de um array
$nome = $cliente[1];
$sobrenome = $cliente[2];
$idade = $cliente[3];
//Exibindo informações do array
echo "Nome do Cliente: " . $nome;
echo '<br><br>';
echo "Sobrenome do Cliente: " . $sobrenome;
echo '<br><br>';
echo "Idade do Cliente: " . $idade;

$cliente = array(
    'nome' => 'Antonio',
    'sobrenome' => 'Carlos',
    'idade' => 35,
    'telefone' => '9999-9999',
    0 => "B20932"
);
echo '<pre>';
print_r($cliente);
echo '</pre>';
//Array com várias informações sobre usuários
$cliente = array(
    array('nome' => 'Antonio', 'sobrenome' => 'Carlos', 'idade' => 35, 1 => "B20932"),
    array('nome' => 'Pedro', 'sobrenome' => 'Santos', 'idade' => 42, 1 => "B20933"),
    array('nome' => 'Maria', 'sobrenome' => 'Carlos', 'idade' => 28, 1 => "B20934"),
);

echo '<pre>';
print_r($cliente);
echo '</pre>';
//Nessa "seleção" nós selecionamos o campo que queremos exibr, no primeiro caso é o nome
//Depois falamos qual array será usado, nesse caso foi o array 1 que está com o nome de Antonio
//O 0 indica a primeira posição, o 1 a segunda e assim por diante
$nome = $cliente[0]['nome'];
$sobrenome = $cliente[1]['sobrenome'];
$idade = $cliente[2]['idade'];
$codigo = $cliente[1][1];

echo "Nome do Primeiro Cliente: " . $nome;
echo '<br><br>';
echo "Sobrenome do Segundo Cliente: " . $sobrenome;
echo '<br><br>';
echo "Idade do Terceiro Cliente: " . $idade;
echo '<br><br>';
echo "Código do Segundo Cliente: " . $codigo;
?>