<?php

    /*

    - Menores de 16 NÃO VOTA
    - Entre 16 e 18 anos ou maior de 70 anos não é obrigatório votar
    - Maiores de 18 anos e menor de 70 é obrigatório votar

    */

    $idade = $_GET['idade'];

    if($idade < 16){
        echo("Pessoas com ".$idade. " anos não votam");

    }elseif (($idade >= 16) && ($idade < 18) || ($idade >= 70)){
        echo("Pessoas com " .$idade. " anos têm voto opcional");

    }else {
        echo("Pessoas com ".$idade. " anos são obrigadas a votar");
    }

?>

<html>
    <body>
        <br>
        <a href="form.php">Voltar</a>
    </body>
</html>
