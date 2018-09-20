<?php
session_start();
include_once("seguranca.php");
echo "Bem Vindo " .$_SESSION['user'];
?>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
						<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
							<script type="text/javascript" src="script.js"></script>
								<link rel="shortcut icon" href="imagens/jamal4.png" type="image/x-icon" />
									<link rel="stylesheet" href="_css/estilo.css"/>
										<title>Sistema de Cadastro </title>
								
											<meta charset = "UTF-8"/>

	</head>
	<body>
	<div class="home">
		<h1>Sistema de Cadastro</h1>
		</div>
		<div class="pagina">
			 <div class="container">
			 	<div class="linha"> 
			 		<div class="tile tileLargo azul"onClick="window.location ='cadastro.php';"/>
			 			<img src="imagens/user2.png" alt = "Cadastrar Usuário"/>
			 			<span>Cadastrar Usuário</span>
			 				</div>
			 			<div class="tile tileLargo laranja"onClick="window.location ='cadastrocliente.php';"/>
			 			<img src="imagens/clinte2.png" alt = "Cadastrar Cliente"/>
			 			<span>Cadastrar Cliente</span>

			 		</div>
			 		<div class="tile tileLargo verde" onClick="window.location ='consulta.php';">
			 			<img src="imagens/consultar3.png" alt = "Consultar Usuário"/>
			 			<span>Consultar Usuário</span>
			 		</div>
			 		<div class="tile tileLargo amarelo" onClick="window.location ='consultacliente.php';">
			 			<img src="imagens/consultar4.png" alt = "Consultar Cliente"/>
			 			<span>Consultar Cliente</span>
					 </div>
					 
			 		
			 		<div class="tile tileLargo vermelho" onClick="window.location ='login.php';">
						 <img src="imagens/out2.png" class="sair" alt = "Sair"/>
						 <div class="teste">
							 <span >Sair</span>
						</div>
			 		
			 		</div>
				</div>

			</div>

		</div>

</body>

</html>
