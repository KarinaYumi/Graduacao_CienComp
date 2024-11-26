	<!-- arquivo usuario_consulta.php -->
<?php

require("config.php"); //includ - se não encontrar o arquivo, segue a vida e nn para
// require -> requisita uma pagina e da erro
// caso a pagina não carregue
//require oned -> mesmo que o require mas só executa uma vez
//includ -> requisita a pagina porem
  
  
?>
<html>
	<head>
		<style>
			td{
				padding:3px;
			}
		</style>
	</head>
	<body>
	
	
	<?php
      
      $consulta = "select * from alunos";
	  $obj_consulta = mysqli_query($con,$consulta) or die( mysqli_error($con));

      
      
	?>
			
<table border="1" cellspacing="0"  >
	<tr>
		<th>RA</th>
		<th>Nome</th>
		<th>Usuario</th>
		<th>Data de nascimento</th>
		<th>Senha</th>
		<th>email</th>
		
	</tr>
				
<?php
while($reg_consulta = 
mysqli_fetch_array($obj_consulta)){ // pega essa caixinha abre e transferorma em awey = vetor 
echo "<tr>";
echo "<td>". $reg_consulta["ra"] . "</td>";
echo "<td>". $reg_consulta["nome"] . "</td>";
echo "<td>". $reg_consulta["usuario"] . "</td>";
echo "<td>";
	$data = new DateTime($reg_consulta["data_nascimento"]);
	echo $data->format('d/m/Y');
echo "</td>";

echo "<td>". str_repeat("*",strlen($reg_consulta["senha"]) ) . "</td>";
echo "<td>". $reg_consulta["email"] . "</td>";
echo "</tr>";
}									
				
		
				?>
			</table>
	</body>
</html>
