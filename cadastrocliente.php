<?php
session_start();
include_once("seguranca.php");
?>
<html>
  <head>
    <title>Sistema de Cadastro </title>
      <meta charset = "UTF-8"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
      <link rel="shortcut icon" href="imagens/jamal4.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="_css/estilocliente.css">
  </head>
  <body>
      <div class="cadastro">
        <div class="cadastro2">
          <img src="imagens/adduser2.png">
	         <span> Cadastro de Cliente</span>
	            <form method="POST" action="cadastrandocliente.php">
  

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputname">Nome</label>
                      <input type="text" class="form-control" name="nome" id="inputname" placeholder="Seu Nome" required="required">
                  </div>
                  <div class="form-group col-md-4">
                  <label for="inputname">CNPJ/CPF</label>
                    <input type="text" class="form-control" name="cpf" id="inputname" placeholder="xxxxxxx" required="required">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputname">Telefone</label>
                      <input type="text" class="form-control" name="telefone" id="inputname" placeholder="(  )     -    " required="required">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputname">Endereço</label>
                      <input type="text" class="form-control" name="endereco" id="inputname" placeholder="Rua/Nº" required="required">
                  </div>
     
                  <div class="form-group col-md-6">
                    <label for="inputname">E-mail</label>
                      <input type="email" class="form-control" name="email" id="inputname" placeholder="exemple@exemple.com" required="required">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputname">Dominio</label>
                      <input type="text" class="form-control" name="dominio" id="inputname" placeholder="exemple.com.br" required="required">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputname">Contratação</label>
                      <input type="date" class="form-control" name="contratacao" id="inputname"  required="required">
                  </div>    
                  <div class="form-group col-md-4">
                    <label for="inputname">Renovação<label>
                      <input type="date" class="form-control" name="renovacao" id="inputname"  required="required">
                  </div>       

                  <div class="form-group col-md-4">
                    <label for="inputname">Valor</label>
                      <input type="text" class="form-control" name="valor" id="inputname" placeholder="R$" required="required">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputname">Usuário padrão</label>
                      <input type="text" class="form-control" name="user" id="inputname" placeholder="user" required="required">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputname">Senha</label>
                      <input type="password" class="form-control" name="senha" id="inputname" placeholder="********" required="required">
                  </div>
                </div>
                <div class="botao">
                    <input type="submit" class="btn btn-outline-success" value="Cadastrar"/>
                      <a href= "javascript: location.href='home.php'">
                          <button type="button" class="btn btn-outline-success">Voltar
                          </button>
                        </a>
                        <a href= "javascript: location.href='login.php'">
                          <button type="button" class="btn btn-outline-success">Sair
                          </button>
                        </a>
                  </div>
                  </form>
        </div>

</body>
</html>