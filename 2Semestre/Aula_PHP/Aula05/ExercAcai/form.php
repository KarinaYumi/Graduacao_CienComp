<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açaí</title>
</head>
<body>
    <form action="tratarDados.php" method="POST">
        <label>Nome </label>
        <input type="text" maxlength="150"  name="nome" placeholder="Digite seu nome" required>
        <hr>

        <h2> Tamanho </h2>
        <label> Valor base 10,00 </label><br>

        <input type="radio" name="tamanho" id="p" value="p">
        <label for="p">Pequeno</label><br>

        <input type="radio" name="tamanho" id="m" value="m">
        <label for="m">Médio</label><br>

        <input type="radio" name="tamanho" id="g" value="g">
        <label for="g">Grande</label>
        <br>
        <hr>

        <h2> Adicionais </h2>
        <label>Leite Ninho</label>
        <input type="checkbox" name="leiteNinho" value="s"><br>

        <label>Leite Condensado</label>
        <input type="checkbox" name="leiteCondensado" value="s"><br>

        <label>Confete</label>
        <input type="checkbox" name="confete" value="s"><br>

        <label>Paçoca</label>
        <input type="checkbox" name="pacoca" value="s"><br>

        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
