<?php

    $idade = $_GET['idade'];

    if($idade >= 18){
        echo("Maior de idade "."(".$idade." anos)");

    }else {
        echo("Menor de idade "."(".$idade." anos)");
    }

?>

<html>
    <body>
        <br>
        <a href="form.php">Voltar</a>
    </body>
</html>
