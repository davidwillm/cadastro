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
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$user=$_POST['user'];
	$senha=$_POST['senha'];
	$nivel=$_POST['nivel'];

	$sql = mysqli_query($conn, "UPDATE cadastro set nome ='$nome', email='$email', user='$user', senha='$senha', nivel='$nivel' WHERE idcadastro='$id'"); 
	echo "<script>window.alert('Edição efetuada com sucesso')</script>
			<script>window.location='consulta.php';
			 </script>";


	?>
</body>
</html>
