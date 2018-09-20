<?php
session_start();
?>
<html>
<head>
<title>Sistema de Cadastro - Login </title>
<link rel="shortcut icon" href="imagens/jamal4.png" type="image/x-icon" />
<link rel="stylesheet" href="_css/estilologin.css">
<meta charset = "UTF-8"/>
</head>
<body>
	<?php
		unset($_SESSION['user'],
			$_SESSION['senha']);

	?>
		<div class="login">
			<img src="imagens/jamal2.png">
	<form method="POST" action="autentica.php">
	<label>Usuário:
	 <input type="text" class="nome" name="user" id="user"required="required" placeholder="User" /></label>
	<label>Senha:
	 <input type="password" class="senha" name="senha" id="senha" required="required" placeholder="*******" />
</label>
	<input type="submit" class="entrar" nome="entrar" value="Entrar"/>
	</form>

<script>
	function mostrarSenha()
		var tipo = document.getElementById("senha");
			if(tipo.type =="password"){
				tipo.type = "text";
			}
			else{
				tipo.type = "password";
			}

</script>
</div>


</body>
</html>
