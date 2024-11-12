<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mês</title>
</head>
<body>
    <form action="form.php" method="POST">
        <h1>Conferência de mês </h1>
        <label> Selecione o mês </label>
        <select name="mes" id="mes">
            <option value="">Mês</option>
            <option value="1">Mês 01</option>
            <option value="2">Mês 02</option>
            <option value="3">Mês 03</option>
            <option value="4">Mês 04</option>
            <option value="5">Mês 05</option>
            <option value="6">Mês 06</option>
            <option value="7">Mês 07</option>
            <option value="8">Mês 08</option>
            <option value="9">Mês 09</option>
            <option value="10">Mês 10</option>
            <option value="11">Mês 11</option>
            <option value="12">Mês 12</option> 
        </select>
        <input type="submit" value="Enviar">
    </form>

<?php

    if(isset($_POST['mes'])){ //Função que valida de existe valor na variável

    $mes = $_POST['mes'];
    switch ($mes){
        case 1: 
            echo("Janeiro");
            break;
            
        case 2:
            echo("Fevereiro");
            break;

        case 3:
            echo("Março");
            break;

        case 4:
            echo("Abril");
            break;

        case 5:
            echo("Maio");
            break;

        case 6:
            echo("Junho");
            break;

        case 7:
        case 8:
        case 9:
            echo("3° trimestre do ano");
            break;

        case 10:
        case 11:
        case 12:
            echo("4° trimestre do ano");
            break;  

        default:
            echo("Inválido! Selecione o mês corretamente");
    }
}
?>

</body>
</html>