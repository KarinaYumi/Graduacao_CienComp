<?php

    $numero = 9; 
    $fatorial = 1;

    for($i = $numero; $i >=1; $i--){
        echo($fatorial. " * ".$i."<br>");
        $fatorial *= $i;
    }

    echo("O fatorial de ". $numero. " é = ".$fatorial);

?>