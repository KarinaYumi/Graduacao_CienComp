<?php 
//Com o include o arquivo continua processando mesmo que ele n ache o arquivo, e o "require" morre se ele n achar o arquivo 
require("config.php"); // Pega o config.php e "junta".
	$id_usuario = mysqli_real_escape_string($conexao,$_GET["RAAluno"]); // Nesse código vou preciisar chamar o get na url - ?RAAluno = 1
	$sql = "select * from alunos where id = $RAAluno"; //variável seleciona no banco a informação desejada, nesse caso, o RA
	$obj_sql = mysqli_query($conexao,$sql) //$mysql_query - parâmetros: a conexão e o comando
	or die(mysqli_error($conexao)); //or die remove o erro/mysql_error
	if(mysqli_num_rows($obj_sql)==0){ // mysqli_num_rows - vê quantas linhas retornou ao fazer a busca.
		echo "Nenhum registro encontrado";
		exit();
	}
?>

<html>
	<head>
	</head>
	<body>
		
		<form action="alterar_proc.php" method="post">
			<?php
		while($reg_usuario = mysqli_fetch_array($obj_sql)){ // mysqli_fetch_array - recebe/pega o resultado do select. Pega a "caixinha" recebida com as informações, abre elas, isola as linhas da tabela e cria um array delas.
			?>
			Usuario: <?php echo $reg_usuario['id']; ?><br/>
			<input type="hidden" name="id_usuario"
			 value="<?php echo $reg_usuario['id']; ?>"> <!-- Valor que vai aparecer dentro da caixinha de texto -->
			Nome: 
			<input type="text" name="nome_usuario" 
			value="<?php echo $reg_usuario['nome']; ?>"><br/>
			ra: 
			<input type="text" name="ra" 
			value="<?php echo $reg_usuario['ra']; ?>"><br/>
			Usuário: 
			<input type="text" name="usuario"
			value="<?php echo $reg_usuario['usuario']; ?>"><br/>
			Senha: 
			<input type="password" name="senha"
			value="<?php echo $reg_usuario['senha']; ?>"><br/>
			E-Mail: 
			<input type="email" name="email"
			value="<?php echo $reg_usuario['email']; ?>"><br/>
			
			Data de Nascimento: 
			<input type="date" name="data_nascimento"
			 min="1900-01-01" max="2025-12-31"
			value="<?php echo $reg_usuario['data_nascimento']; ?>"><br/>
			<!-- Não formotou a data, pois o type=date sempre vai trabalhar no formato ano-mes-dia, porém o calendário gerado no type=data foi criado pro navegador, nisso o navegador vê a formatação que o sistema está usando e formata automaticamente -->
		
			<input type="submit" value="Enviar">
			<?php
				}
			?>
		</form>
	</body>
</html> 
