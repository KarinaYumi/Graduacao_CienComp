<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>  

    <form action="tratarDados.php" method="POST"> 
        <h1>Formulário de Apresentação </h1>

            <label for="nomeUsuario"> Nome: </label>
            <input type="text" maxlength="250" name="nomeUsuario" id="nomeUsuario" placeholder="Digite o nome"> <!--Maxlength - Máximo de caracteres que pode ser inserido-->
            <br>

            <label for="idadeUsuario"> Idade: </label>
            <input type="number" min="0" max="120"  name="idadeUsuario" id="idadeUsuario">
            <br>
            <br>

            <input type="submit" value="Enviar">
        </form>
    
</body>
</html>