<?php

    $nome = $_POST['nomeUsuario'];
    $idade = $_POST['idadeUsuario'];

    if($idade <15){
        echo("Comprador ".$nome." é MENOR de idade e não pode efetuar a compra!");
    }else{
        echo("Comprador ".$nome." é maior de idade");
    }
?>

<html>
    <body>
        <br>
        <a href="form.php">Voltar</a>
    </body>
</html>