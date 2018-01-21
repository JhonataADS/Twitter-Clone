<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0; // caso erro ocorra get apresenta o erro... senão atribuir valor '0'

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
	
		<script>

			$(document).ready( function(){
				// verificar se os campos usuario e senha foram preenchidos
				

				$('#btn_login').click(function(){

					var campo_vazio = false;

					if($('#campo_usuario').val() == ''){
						$('#campo_usuario').css({'border-color': '#FF0000'}); //caso o compo esteja vazio seta a borda com a cor vermelha.
						campo_vazio = true;
					}else{
						$('#campo_usuario').css({'border-color': '#CCC'});
					} // CASO PREENCHDO A BORDA RETORNA A COR CINZA

					if($('#campo_senha').val() == ''){
						$('#campo_senha').css({'border-color': '#FF0000'})
						campo_vazio = true;
					}else{
						$('#campo_senha').css({'border-color': '#CCC'});
					}

					if(campo_vazio) return false; //valor padrao da variavel é false.
				});			
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
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <li class="<?= $erro == 1 ? 'open' : ''; ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
							<form method="post" action="validar_acesso.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />
								
							</form>

							<?php
								if($erro == 1){
									echo'<font color= "#FF0000"> usuario ou senha estão invalidos</font>'; // caso login errado abre o dropdown com mensagem de erro em destaque
								}
							?>
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao twitter clone</h1>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>