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
<link rel="stylesheet" href="_css/estiloconsulta2.css"/>
<meta charset = "UTF-8"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="cadastro">
		<div class="cadastro2">
	<img src="imagens/consultar3.png">
	<span>Consulta de Cliente</span>
	<div class="tabela">
				<table class="table table-striped table-dark">
   					 <thead>
    					<tr>
     						 <th scope="col">Id</th>
     						 <th scope="col">Nome</th>
     						 <th scope="col">CPF</th>
     						  <th scope="col">Telefone</th>
     						 <th scope="col">Endereço</th>
     						 <th scope="col">E-mail</th>
     						  <th scope="col">Domínio</th>
     						 <th scope="col">Contratação</td>
     						 	<th scope="col">Renovação</th>
     						 	<th scope="col">Valor</th>
     						 <th scope="col">Usuário</th>
     						 <th scope="col">Senha</th>
     						 <th scope="col">Ação</th>
     						 
    					<tr>
<?php
$id = intval($_GET['id']);

$sql_code = "SELECT * FROM cadastrocliente WHERE idcadastrocliente = '$id' LIMIT 1";
$sql_query = mysqli_query($conn,$sql_code) or die (mysqli_error());
while ($registro = mysqli_fetch_array($sql_query)){
	$ids = $registro['idcadastrocliente'];
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
								<td><?php echo $ids ?>
		 						</td>
      							<td> <?php echo $nome ?>
      							</td>
      							<td><?php echo $cpf ?>
		 						</td>
      							<td> <?php echo $endereco ?>
      							</td>
      							<td><?php echo $telefone ?>
		 						</td>
      							<td> <?php echo $email ?>
      							</td>
      							<td><?php echo $dominio ?>
		 						</td>
		 						<td><?php echo $contratacao ?>
		 						</td>
		 						<td><?php echo $renovacao ?>
		 						</td>
		 						<td><?php echo $valor ?>
		 						</td>
		 						<td><?php echo $user ?>
		 						</td>
		 						<td><?php echo $senha ?>
		 						</td>
		 						<td> <a href='editarcliente.php?id=<?php echo $registro['idcadastrocliente'];?>'>
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
						<a href= "javascript: location.href='consultacliente.php'">
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