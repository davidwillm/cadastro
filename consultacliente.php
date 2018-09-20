	<?php
		session_start();
			include_once("seguranca.php");
			include_once("conexao.php");
	?>

<html>
	<head>
			<title>Sistema de Cadastro - Consulta Cliente </title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
				<link rel="shortcut icon" href="imagens/jamal4.png" type="image/x-icon" />
					<link rel="stylesheet" href="_css/estiloconsulta.css"/>
						<meta charset = "UTF-8"/>
							<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js">
							</script>
							<script type="text/javascript" src="script.js">
							</script>
	</head>
		<body>
				<div class="cadastro">
					<div class="cadastro2">
					<img src="imagens/consultar4.png">
						<span>Consulta de Cliente</span>
						
				<div class="tabela">
						<table class="table table-striped table-dark">
    						<thead>
    							<tr>
     								<th scope="col">Id</th>
      								<th scope="col">Nome</th>
      								<th scope="col">Ação</th>
      							</tr>
				
	<?php
				$sql = "SELECT * FROM cadastrocliente ORDER BY 'id'";
				$resultado = mysqli_query ($conn,$sql) or die ("Erro ao tentar cadastrar registro");

		while ($registro = mysqli_fetch_array($resultado)){
				$id = $registro['idcadastrocliente'];
				$nome = $registro['nome'];
				$cpf = $registro['cpf'];
				$endereco = $registro['endereco'];
				$telefone = $registro['telefone'];
				$email = $registro['email'];
				$dominio = $registro['dominio'];
				$contratacao = $registro['contratacao'];
				$renovacao = $registro['renovacao'];
				$valor = $registro['valor'];
				$user = $registro['user'];
				$senha = $registro['senha'];


?>
    							<tr>
								<td><?php echo $id ?></td>
     			 				<td> <?php echo $nome ?></td>
     			 				<td>
						<a href='visualizarcliente.php?id=
							<?php echo $registro['idcadastrocliente'];?>'>
								<button type="button" class="btn btn-outline-primary">Visualizar</button>
						</a>
						

						<a href='editarcliente.php?id=
							<?php echo $registro['idcadastrocliente'];?>'>
								<button type="button" class="btn btn-outline-warning">Editar</button>
						</a>

						<a href= "javascript: if(confirm('Tem certeza que deseja deletar o usuário 
							<?php echo $registro['nome'];?> ?')) location.href='deletarcliente.php?id=
							<?php echo $registro['idcadastrocliente'];?>'">
								<button type="button" class="btn btn-outline-danger">Exluir</button>
						</a>
					</td>
					<?php
}

	mysqli_close($conn);
?>

</table>

				</div>
				<div class="botao">
						<a href= "javascript: location.href='home.php'">
  						<button type="button" class="btn btn-outline-success">Voltar</button>
  				</a>
  				<a href= "javascript: location.href='login.php'">
  						<button type="button" class="btn btn-outline-success">Sair</button>
  				</a>
				</div>
				</div>
		
	</body>
</html>