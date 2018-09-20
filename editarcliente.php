		<?php
			session_start();
				include_once("seguranca.php");
				include_once("conexao.php");

				$id = intval($_GET['id']);

				$sql_code = "SELECT * FROM cadastrocliente WHERE idcadastrocliente = '$id' LIMIT 1";
				$sql_query = mysqli_query($conn,$sql_code) or die (mysqli_error());
			while ($registro = mysqli_fetch_array($sql_query))
				{
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



				}

			mysqli_close($conn);
		?>
<html>
	<head>
		<title>Sistema de Cadastro </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
			<link rel="shortcut icon" href="imagens/jamal4.png" type="image/x-icon" />
				<meta charset = "UTF-8"/>
			<link rel="stylesheet" type="text/css" href="_css/estilocliente.css">
	</head>
	<body>
  		<div class="cadastro">
  			<div class="cadastro2">
    			<img src="imagens/adduser.png">
					<span> Editar Cliente</span>
						<form method="POST" action="editandocliente.php">

			<input type="hidden" name="id" value="<?php echo $id; ?>"/>

      <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputname">Nome</label>
          <input type="text" class="form-control" name="nome" id="inputname" required="required"value="<?php 
            echo $nome;
          ?>" >
      </div>
      <div class="form-group col-md-4">
        <label for="inputname">CNPJ/CPF</label>
          <input type="text" class="form-control" name="cpf" id="inputname" placeholder="xxxxxxx" required="required"value="<?php 
            echo $cpf;
          ?>">

          </div>
           <div class="form-group col-md-4">
        <label for="inputname">Telefone</label>
          <input type="text" class="form-control" name="telefone" id="inputname" placeholder="(  )     -    " required="required"
           value="<?php 
                            echo $telefone; 
                        ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="inputname">Endereço</label>
          <input type="text" class="form-control" name="endereco" id="inputname" placeholder="Rua/Nº" required="required"
          value="<?php 
                    echo $endereco; 
                  ?>"/>
      </div>
      <div class="form-group col-md-6">
        <label for="inputname">E-mail</label>
          <input type="email" class="form-control" name="email" id="inputname" placeholder="exemple@exemple.com" required="required"value="<?php 
            echo $email; 
               ?>"/>
      </div>

      <div class="form-group col-md-4">
        <label for="inputname">Dominio</label>
          <input type="text" class="form-control" name="dominio" id="inputname" placeholder="exemple.com.br" required="required" value="<?php echo $dominio; 
              ?>">
      </div>
      <div class="form-group col-md-4">
        <label for="inputname">Contratação</label>
          <input type="date" class="form-control" name="contratacao" id="inputname"  required="required"
          value="<?php 
              echo $contratacao; 
            ?>">
      </div>  
      <div class="form-group col-md-4">
        <label for="inputname">Renovação<label>
          <input type="date" class="form-control" name="renovacao" id="inputname"  required="required" value="<?php 
              echo $renovacao; 
            ?>">
      </div>  
      <div class="form-group col-md-4">
        <label for="inputname">Valor</label>
          <input type="text" class="form-control" name="valor" id="inputname" placeholder="R$" required="required" value="<?php 
                echo $valor; 
              ?>">
      </div>
      <div class="form-group col-md-4">
        <label for="inputname">Usuário padrão</label>
          <input type="text" class="form-control" name="user" id="inputname" placeholder="user" required="required" value="<?php 
                  echo $user; 
                ?>">
      </div>
       <div class="form-group col-md-4">
        <label for="inputname">Senha</label>
          <input type="text" class="form-control" name="senha" id="inputname" placeholder="********" required="required" value="<?php
                echo $senha;
                ?>"/>
      </div> 
</div>
         <div class="botao">
                    <input type="submit" class="btn btn-outline-success" value="Salvar"/>
                      <a href= "javascript: location.href='consultacliente.php'">
                          <button type="button" class="btn btn-outline-success">Voltar
                          </button>
                        </a>
                        <a href= "javascript: location.href='home.php'">
                          <button type="button" class="btn btn-outline-success">Home
                          </button>
                        </a>
                  </div>
		</div>
					</form>
	</body>
</html>