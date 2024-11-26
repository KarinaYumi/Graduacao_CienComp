<?php 
	require("config.php");
	$id_usuario = mysqli_real_escape_string($con,$_POST["id_usuario"]);
	$nome = mysqli_real_escape_string($con,$_POST["nome_usuario"]);
	$ra = mysqli_real_escape_string($con,$_POST["ra"]);
	$usuario = mysqli_real_escape_string($con,$_POST["usuario"]);
	$senha = mysqli_real_escape_string($con,$_POST["senha"]);
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$data_nascimento = mysqli_real_escape_string($con,$_POST["data_nascimento"]);
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
