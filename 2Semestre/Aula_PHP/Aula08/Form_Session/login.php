<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(($usuario === "Karina") && ($senha === "KY")){ // O === compara precisamente, compara se o tipo de dado está igual
    $_SESSION['login'] = "s"; 
    $_SESSION['user'] = $usuario;
    $_SESSION['erro'] = "";

    //echo("Usuário correto");
    
}else {
    $_SESSION['erro'] = "Usuário ou senha incorretos";
    //echo("Usuário incorreto!");
}
header("Location: index.php");

?>