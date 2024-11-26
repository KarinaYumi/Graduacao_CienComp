<?php 
	// Arquivo config.php

	$host = "localhost"; // endereço do servidor de Banco de dados
	$usuario = "root"; //Usuario do Banco de dados
	$senha = ""; // Senha do banco de dados
	$bd = "aula_php_terca_felipe"; // Banco de dados para conectar. Equivale ao use XXXXX;
	$con = mysqli_connect($host, $usuario, $senha, $bd);// Sempre deixar nessa ordem
	if (mysqli_connect_errno()){ //verifica se a conexão foi executada
		echo "Falha ao conectar-se ao MySQL: " . mysqli_connect_error();
		exit();
	}


	
