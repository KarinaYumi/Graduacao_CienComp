<?php

    $valorOriginal = $_POST['valor'];
    $desconto = $valorOriginal * 0.15;
    $valorDesconto = $valorOriginal - $desconto;

    echo("Valor Original = R$" .$valorOriginal. "<br> Desconto aplicado = R$" .$desconto. "<br>" . "Valor com desconto = R$" .$valorDesconto);
?>