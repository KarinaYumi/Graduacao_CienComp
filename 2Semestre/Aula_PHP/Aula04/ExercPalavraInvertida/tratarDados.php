<?php

    $palavra = $_POST['palavra'];
    $palavraInvertida = strrev($palavra);

    if($palavraInvertida == "OLUAP"){
        echo("A palavra está invertida - " .$palavraInvertida);
    } else {
        echo(" A palavra não está invertida - " .$palavra);
    }

?>

<html>
    <body>
        <br>
        <a href="form.php">Voltar</a>
    </body>
</html>
