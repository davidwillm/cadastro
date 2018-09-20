	<?php
		session_start();
		include_once("conexao.php");
	?>
<html>
	<head>
		<title>Sistema de Cadastro - Cliente</title>
			<meta charset="UTF-8"/>
	</head>
	<body>
	<?php
			$id=$_POST['id'];
			$nome=$_POST['nome'];
			$cpf=$_POST['cpf'];
			$endereco=$_POST['endereco'];
			$telefone=$_POST['telefone'];
			$email=$_POST['email'];
			$dominio=$_POST['dominio'];
			$contratacao=$_POST['contratacao'];
			$renovacao=$_POST['renovacao'];
			$valor=$_POST['valor'];
			$user=$_POST['user'];
			$senha=$_POST['senha'];
			$sql = mysqli_query($conn, "UPDATE cadastrocliente set nome='$nome', cpf='$cpf', endereco='$endereco', telefone='$telefone', email='$email', dominio='$dominio', contratacao='$contratacao', renovacao='$renovacao', valor='$valor', user='$user', senha='$senha' WHERE idcadastrocliente='$id' ");
					echo "<script>window.alert('Edição efetuada com sucesso')</script><script>window.location.href='consultacliente.php'</script>";

	?>



	</body>
</html>