<?php
session_start();
include_once("seguranca.php");
include_once("conexao.php");

$id = intval($_GET['id']);

$sql_code = "SELECT * FROM cadastro WHERE idcadastro = '$id' LIMIT 1";
$sql_query = mysqli_query($conn,$sql_code) or die (mysqli_error());
while ($registro = mysqli_fetch_array($sql_query)){
	$ids=$registro['idcadastro'];
	$nome = $registro['nome'];
	$email = $registro['email'];
	$user = $registro['user'];
	$senha = $registro['senha'];
	$nivel = $registro['nivel'];



}

mysqli_close($conn);
?>
<html>
<head>
<title>Sistema de Cadastro </title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="shortcut icon" href="imagens/jamal4.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="_css/estilocadastro.css">
<meta charset = "UTF-8"/>
</head>
<body>
	<div class="cadastro">
			<div class="cadastro2">
		<img src="imagens/adduser2.png">
	<span>Editar Usuário</span>

	<form method="POST" action="editandouser.php">
		<input type="hidden" name="id" value="<?php echo $ids; ?>"/>

			<div class="form-row">
    			<div class="form-group col-md-5">
     					<label for="inputname">Nome</label>
      						<input type="text" class="form-control" name="nome" id="inputname" required="required" value="<?php echo $nome; ?>">
      			</div>

				<div class="form-group col-md-5">
     					<label for="inputname">Email</label>
      						<input type="email" class="form-control" name="email" id="inputname" required="required" value="<?php echo $email; ?>">
      			</div>
      			<div class="form-group col-md-4">
      					<label for="inputname">Usuário</label>
      						<input type="text" class="form-control" name="user" id="inputname" required="required" value="<?php echo $user; ?>">
      			</div>
      			<div class="form-group col-md-3">
      					<label for="inputname">Senha</label>
      						<input type="text" class="form-control" name="senha" id="inputname" required="required" value="<?php echo $senha; ?>">
    			</div>
    			<div class="form-group col-md-3">
    					<label for="inputname">Nível de Acessso</label>
    						<select class="custom-select" name="nivel" required="required" value="<?php echo $nivel; ?>">
     							<option value="">Escolha..</option>
      							<option value="admin">Admin</option>
      							<option value="user">User</option>
    						</select>
    			</div>
 			</div>
 		</div>
		

<div class="botao">
						  <input type="submit" class="btn btn-outline-success" value="Salvar"/>
						<a href= "javascript: location.href='consulta.php'">
  						<button type="button" class="btn btn-outline-success">Voltar</button>
  				</a>
  				<a href= "javascript: location.href='home.php'">
  						<button type="button" class="btn btn-outline-success">Home</button>
  				</a>
				</div>
				</div>
		
</div>
</div>
</form>
</body>
</html>