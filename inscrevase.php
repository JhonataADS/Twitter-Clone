<?php

$erro_usuario = isset ($_GET['erro_usuario']) ? $_GET['erro_usuario']	: 0;
$erro_email = isset ($_GET['erro_email']) ? $_GET['erro_email']		: 0;

?>


<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Twitter clone</title>
	
	<!-- jquery - local -->
	<script src="jquery/jquery-2.2.0.min.js"></script>

	<!-- bootstrap - local -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
</head>

<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="imagens/icone_twitter.png" />
			</div>
			
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Voltar para Home</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<div class="container">
		
		<br /><br />

		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3>Inscreva-se já.</h3>
			<br />
			<form method="post" action="registra_usuario.php" id="formCadastrarse">
				<div class="form-group">
					<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required>
					<?php
					if ($erro_usuario) {
						echo'<font color= "#FF0000"> Usuario já cadastrado </font>';
					}
					?>
				</div>

				<div class="form-group">
					<input type="email" class="form-control" id="logar" name="email" placeholder="email" required>
					<?php
					if ($erro_email) {
						echo'<font color= "#FF0000"> Email já cadastrado </font>';
					}
					?>

				</div>
				
				<div class="form-group">
					<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
				</div>
				
				<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
			</form>
		</div>
		<div class="col-md-4"></div>

		<div class="clearfix"></div>
		<br />
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>

	</div>


</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>