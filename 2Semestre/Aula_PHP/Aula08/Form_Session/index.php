<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Session</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
        if(isset($_SESSION['login'])&& ($_SESSION['login'] == "s")){
    ?>
        Bem vindo(a)
    <?php 
        echo($_SESSION['user']);
    ?>
    <br>
        Área privada
    <a href="logout.php">Sair</a>

    <?php
        }else{
    ?>

    <div class="card">
        <?php
            if($_SESSION["erro"] != ""){
                echo("<div style='background-color:green;'>");
                echo($_SESSION["erro"]);
                echo("</div>");
            }
        ?>

        <form action="login.php" method="POST">
            <center>
                <label for="user"> Usuário: </label>
                <input type="text" name="usuario" id="user" placeholder="Digite o login">
                <br/><br/>
                <label> Senha </label>
                <input type="password" name="senha" id="password" placeholder="Digite a senha">
                <br/><br/>
                <input type="submit" value="Acessar">
                <input type="reset" value="Limpar">
            </center>
        </form>
    </div>

    <?php
        }
    ?>

</body>
</html>