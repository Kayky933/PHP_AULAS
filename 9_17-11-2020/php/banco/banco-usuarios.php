<?php

///Funcao para efetuarlogin
function efetuaLogin($conexao, $usuario, $senha){
	
	$query = "select * from usuario where nome='$usuario' and senha='$senha'";
	
	$resultado = mysqli_query($conexao, $query);
	
	$usuariologado = mysqli_fetch_assoc($resultado);
	
	return $usuariologado;
}