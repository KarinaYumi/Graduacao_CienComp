<?php
    $nome = $_POST['nome'];
    $nome = strtoupper($nome);
    $condimentos = 0;
    $preco = 10;

    if(isset($_POST['tamanho'])){
        $tamanho = $_POST['tamanho'];
    } if($tamanho == "m"){
        $preco += $preco * 0.50;
    } elseif($tamanho == "g"){
        $preco += $preco * 1.00;
    }

    if(isset($_POST['leiteNinho'])){
        $leiteNinho = $_POST['leiteNinho'];
        $condimentos += 3.00;
    }
    if(isset($_POST['leiteCondensado'])){
        $leiteCondensado = $_POST['leiteCondensado'];
        $condimentos += 3.50;
    }
    if(isset($_POST['confete'])){
        $confete = $_POST['confete'];
        $condimentos += 2.50;
    }
    if(isset($_POST['pacoca'])){
        $pacoca = $_POST['pacoca'];
        $condimentos += 1.50;
    }

    $preco = $preco + $condimentos;
    
    echo($nome." seu pedido ficou: R$".$preco."<br><hr>");
    echo("Informações do pedido: <br> Tamanho: ".$tamanho."<br>Adicionais: ".$condimentos);
    
     
?>