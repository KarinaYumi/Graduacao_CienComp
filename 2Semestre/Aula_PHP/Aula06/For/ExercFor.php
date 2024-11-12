<?php
    $inicio = 0;
    $fim = 10;
    for($contador = $inicio; $contador <= $fim; $contador++){
        echo($contador."<br>");
    }

    $inicio = 10;
    $fim = 0;

    echo("<hr>");
    for($contador = $inicio; $contador >= $fim; $contador--){
        
        echo($contador."<br>");
    }

    echo("<hr>");

    $inicio = 0;
    $fim = 10;
    for($contador = $inicio; $contador <= $fim; $contador++){
        echo("<br>");
        if($contador % 2 == 0) {
            echo($contador." é divisível de 2 <br>");
        } else{
            echo($contador." não é divisível de 2 <br>");
        }
        
    }

?>