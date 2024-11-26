<?php 
	require("config.php");
	$id_usuario = mysqli_real_escape_string($con,$_POST["id_usuario"]); //Lê todas as variáveis
	$nome = mysqli_real_escape_string($con,$_POST["nome_usuario"]); //Lê todas as variáveis
	$ra = mysqli_real_escape_string($con,$_POST["ra"]); //Lê todas as variáveis
	$usuario = mysqli_real_escape_string($con,$_POST["usuario"]); //Lê todas as variáveis
	$senha = mysqli_real_escape_string($con,$_POST["senha"]); //Lê todas as variáveis
	$email = mysqli_real_escape_string($con,$_POST["email"]); //Lê todas as variáveis
	$data_nascimento = mysqli_real_escape_string($con,$_POST["data_nascimento"]); //Lê todas as variáveis
	$sql= "update alunos set 
			nome = '$nome',
			ra = '$ra',
			usuario = '$usuario',
			senha = '$senha',
			email = '$email',
			data_nascimento = '$data_nascimento'
			where 
			id = $id_usuario
			";
			mysqli_query($con, $sql) or die(mysqli_error($con));
			echo "Usuário alterado com sucesso!";
			echo "<a href='usuario_consulta.php'>Voltar</a>";
			
			?>
