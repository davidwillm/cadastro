<?php
session_start();
include_once("seguranca.php");
include_once("conexao.php");
?>
<html>
	<head>
		<title>Sistema de Cadastro - Consulta Usuário </title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
				<link rel="shortcut icon" href="imagens/jamal4.png" type="image/x-icon" />
					<link rel="shortcut icon" href="imagens/jamal4.png" type="image/x-icon" />
						<link rel="stylesheet" href="_css/visualizaruser.css"/>
							<meta charset = "UTF-8"/>
								<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js">
								</script>
									<script type="text/javascript" src="script.js">
									</script>
	</head>
	<body>
		<div class="cadastro">
			<div class="cadastro2">
				<img src="imagens/consultar3.png">
					<span>Consulta de Usuários</span>
			<div class="tabela">
				<table class="table table-striped table-dark">
   					 <thead>
    					<tr>
     						 <th scope="col">Id</th>
     						 <th scope="col">Nome</th>
     						 <th scope="col">E-mail</th>
     						 <th scope="col">Usuário</th>
     						 <th scope="col">Senha</th>
     						 <th scope="col">Acesso</th>
     						 <th scope="col">Ação</th>
    					<tr>
		<?php

$id = intval($_GET['id']);

$sql_code = "SELECT * FROM cadastro WHERE idcadastro = '$id' LIMIT 1";
$sql_query = mysqli_query($conn,$sql_code) or die (mysqli_error());
while ($registro = mysqli_fetch_array($sql_query)){
	$nome = $registro['nome'];
	$email = $registro['email'];
	$user = $registro['user'];
	$senha = $registro['senha'];
	$nivel = $registro['nivel'];

	?>
		 						<td><?php echo $id ?>
		 						</td>
      							<td> <?php echo $nome ?>
      							</td>
      							<td><?php echo $email ?>
		 						</td>
		 						<td><?php echo $user ?>
		 						</td>
		 						<td><?php echo $senha ?>
		 						</td>
		 						<td><?php echo $nivel ?>
		 						</td>
		 						<td> <a href='editarusuario.php?id=<?php echo $registro['idcadastro'];?>'>
			<button type="button" class="btn btn-outline-warning">Editar</button>
		</a>
	</td>

						</tr>

	<?php
}

	mysqli_close($conn);
?>
</table>
	<div class="botao">
						<a href= "javascript: location.href='consulta.php'">
  						<button type="button" class="btn btn-outline-success">Voltar</button>
  				</a>
  				<a href= "javascript: location.href='login.php'">
  						<button type="button" class="btn btn-outline-success">Sair</button>
  				</a>
				</div>
</div>
</div>
</form>
</body>
</html>