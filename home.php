<?php 
session_start();

	if(!isset($_SESSION['usuario'])){// verifica se a variavel em questão está preenchida ou não.
		header('Location: index.php?erro=1');//impede a mudança de pagina via url, retornando a pagina index.
	}

	?>

	<!DOCTYPE HTML>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Home Twitter</title>
		
		<!-- jquery - local -->
		<script src="jquery/jquery-2.2.0.min.js"></script>

		<!-- bootstrap - local -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<script type="text/javascript">
			$(document).ready(function (){
				$('#btn_tweet').click( function(){
					if ($('#texto_tweet').val().length > 0) {
				//	alert($('#texto_tweet').val());
				$.ajax({
								url: 'inclui_tweet.php', // script de destino
								method: 'post', // metodo de transferencia
								data: $('#form_tweet').serialize(), //serialize funciona com o "name" recuperando os dados do formulário.
								success: function(data){
									$('#texto_tweet').val('');
									atualizaTweet();

								}
							})
			}
		});

				function atualizaTweet(){

					$.ajax({
						url: 'get_tweet.php',
						success: function(data){
							$('#tweets').html(data);
						}
					});
				}

				atualizaTweet();

			});


		</script>
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
						<li><a href="sair.php">Sair</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>


		<div class="container">
			<!--  painel esquerdo -->
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><?= $_SESSION['usuario'] ?></h4>
						<hr>
						<div class="col-md-6">TWEETS <br> 1.500 </div>
						<div class="col-md-6">SEGUIDORES<br> 2.500.60</div>
					</div>
				</div>

			</div>
			<!--  fim do painel esquerdo -->

			
			<div class="col-md-6"> <!-- INCLUSÃO DE TWEETS -->
				<div class="panel panel-default">
					<div class="panel-body">
						<form id='form_tweet' class="input-group">
							<input type="text" id='texto_tweet' name='texto_tweet' class="form-control" placeholder="oque está acontecendo agora?" maxlength="140">
							<span class="input-group-btn"> 
								<button class="btn btn-default" id='btn_tweet' type="button" >Tweet</button>
							</span>
						</form>
					</div>
				</div>

				<div id="tweets" class="list-group">
					
				</div>


			</div> <!-- FIM DA INCLUSÃO DE TWEETS -->

			
			

			<!-- COLUNA DIREITA-->
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><a href="#">Procurar pessoas</a> </h4>
					</div>
				</div>
			</div><!-- COLUNA DIREITA-->

		</div>
		
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
	</body>
	</html>