<?php

    $host = "localhost"; // Endereço do servidor do banco
    $usuario = "root"; // Usuário do banco
    $senha = ""; // senha do banco
    $bd = "bdALunos"; // Nome do banco

    $conexao = mysqli_connect($host, $usuario, $senha, $bd); //mysqli é a biblioteca
    if(mysqli_connect_errno()){
        echo("Falha ao conectar com o banco de dados". mysqli_connect_error());
    exit();
    }

/*
- PDO tem vantagem do mysqli porque pode ser usado por outros bancos
- mysqli_connect($host, $usuario, $senha, $bd); - sempre essa sequência
*/ 

 ?>
