<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Ingressos</title>
</head>
<body>
    <form action="tratarDados.php" method="POST">
        <h1>Venda de Ingressos </h1>

        <label> Nome </label>
        <input type="text" name="nomeUsuario" placeholder="Digite o nome">
        <br>
        <br>
        <label> Idade </label>
        <input type="number" name="idadeUsuario" min="0" max="120" placeholder="Digite a idade" required>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>