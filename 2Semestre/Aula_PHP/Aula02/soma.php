<?php
    $nome = "Luana";
    echo ("Seu nome é ".$nome. "<br>"); // ASPAS SIMPLES '' NÃO RECONHECE VARIÁVEL, IRIA APARECER $nome!
                                //PHP é case sensitive, então não dá pra escrever uma variável em minúsculo e querer chamar a variável em maiúsculo, irá aparecer que não foi declarada.
    /* Operadores Aritméticos

    + -> Soma
    - -> Subtração
    * -> Multiplicação
    / -> Divisão
    ** -> Exponente (3**2 = 9)
    % (mod) -> Resto da Divisão

    */

    //SOMA
    $num01 = 7;
    $num02 = 3;

    $resultado = $num01 + $num02;
    echo ("A soma de " .$num01. " e ".$num02. " é: ".$resultado. "<br>");

    //SUBTRAÇÃO
    $num01 = 15;
    $num02 = 5;
    
    $resultado = $num01 - $num02;
    echo ("A subtração de " .$num01. " e ".$num02. " é: ".$resultado. "<br>");

    //MULTIPLICAÇÃO
    $num01 = 15;
    $num02 = 5;

    $resultado = $num01 * $num02;
    echo("A multiplicação de ".$num01." e ".$num02." é = ".$resultado. "<br>");

    //DIVISÃO
    $num01 = 15;
    $num02 = 5;

    $resultado = $num01 / $num02;
    echo("A divisão de ".$num01." por ".$num02." é: ".$resultado. "<br>");

    //EXPONENCIAL
    $num01 = 5;
    $num02 = 2;

    $resultado = $num01 ** $num02;
    echo($num01." elevado a ".$num02." é: ".$resultado. "<br>");

    //MOD
    $num01 = 12;
    $num02 = 2;

    $resultado = $num01 % $num02;
    echo($num01." % ".$num02." é: ".$resultado. "<br>");

?>