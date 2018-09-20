<?php
include_once("conexao.php");

?>
<html>
<head>
<title>Sistema de Cadastro - Cliente </title>
<meta charset = "UTF-8"/>
</head>
<body>


	<?php 
	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$endereco=$_POST['endereco'];
	$telefone=$_POST['telefone'];
	$email=$_POST['email'];
	$dominio=$_POST['dominio'];
	$contratacao=$_POST['contratacao'];
	$renovacao=$_POST['renovacao'];$nome=$_POST['nome'];
	$valor=$_POST['valor'];
	$user=$_POST['user'];
	$senha=$_POST['senha'];
	$sql = mysqli_query($conn, "INSERT INTO cadastrocliente (nome, cpf, endereco, telefone, email, dominio, contratacao, renovacao, valor, user, senha) VALUES ('$nome','$cpf', '$endereco', '$telefone', '$email','$dominio', '$contratacao', '$renovacao', '$valor', '$user', '$senha' ) ");

	echo "<script>window.alert('Cadastro efetuado com sucesso')
			window.location='home.php';
			 </script>";


	?>
</body>
</html>