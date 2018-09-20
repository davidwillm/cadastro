<?php
include_once("conexao.php");
?>
<html>
<head>
<title>Sistema de Cadastro - Login </title>
<meta charset = "UTF-8"/>
</head>
<body>
	<?php 
	$user=$_POST['user'];
	$senha=$_POST['senha'];

	$sql = mysqli_query($conn, "SELECT * FROM cadastro WHERE user='$user' and senha='$senha'") or die (mysqli_error());
	$row = mysqli_num_rows($sql);
	if ($row > 0){
		session_start();
		$_SESSION['user']=$_POST['user'];
		$_SESSION['senha']=$_POST['senha'];
		echo "<script>setTimeout(window.location='home.php')</script>";
	}
		else{
			echo "<script>window.alert('Usuário ou senha invalidos')
			window.location='login.php';
			 </script>";
		}
		


	?>
</body>
</html>
