<!-- arquivo usuario_consulta.php -->
<?php
  require("configBanco.php")
?>

<html>
	<head>
		<style>
			td{
				padding:5px;
			}
		</style>
	</head>
	<body>

<?php   
$consulta = "select * from tbAlunos";
$obj_consulta = mysqli_query($conexao, $consulta) or die ( mysqli_error($conexao));
?>
			
<table border="1" cellspacing="0"  >
	<tr>
    <th>RA</th>
		<th>Nome</th>
		<th>Data de Nascimento</th>
		<th>Usuário</th>
		<th>Senha</th>
		<th>E-mail</th>
	</tr>		
<?php
while($reg_consulta = 
mysqli_fetch_array($obj_consulta)){

echo "<tr>";
echo "<td>". $reg_consulta["RAAluno"] . "</td>";
echo "<td>". $reg_consulta["nomeAluno"] . "</td>";
echo "<td>";

	$data = new DateTime($reg_consulta["dataNascimentoAluno"]);
	echo $data->format('d/m/Y'); // Y = ano em 4 caracteres(2024) | y = ano em 2 caracteres(24)
echo "</td>";

echo "<td>". $reg_consulta["usuarioAluno"] . "</td>";

echo "<td>". str_repeat("*",strlen($reg_consulta["senhaAluno"]) ) . "</td>";
echo "<td>". $reg_consulta["emailAluno"] . "</td>";
echo "</tr>";
}									
						
?>
			</table>
	</body>
</html>
          
