<?php
session_start();
include_once("seguranca.php");
include_once("conexao.php");


?>
<html>
<head>
<title>Sistema de Cadastro - Usuário </title>
<meta charset = "UTF-8"/>
</head>
<body>
	<?php 
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$user=$_POST['user'];
	$senha=$_POST['senha'];
	$nivel=$_POST['nivel'];

	$sql = mysqli_query($conn, "INSERT INTO cadastro (nome, email, user, senha,nivel) VALUES ('$nome', '$email', '$user', '$senha','$nivel' ) "); 
	echo "<script>window.alert('Cadastro efetuado com sucesso')</script>
			<script>window.location='home.php';
			 </script>";


	?>
</body>
</html>
