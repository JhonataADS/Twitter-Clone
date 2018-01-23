<?php

	session_start();//indica ao script que ele tera acesso as variaveis de seção.
	
	require_once ('db.class.php'); //faz a requisição do arquivo de conexão com o banco de dados.

	$usuario = $_POST['usuario']; //atribui a variavel usuario retornados da seção login.
	$senha = md5($_POST['senha']);//atribui a variavel senha retornados da seção login.


	$sql = "SELECT * from usuarios where usuario = '$usuario' AND senha = '$senha'"; //seleciona do banco o usuario e a senha.

	$obj_db = new db(); // cria uma nova conexão com o banco de dados chamando a classe 'bd'.
	$link = $obj_db->conecta_mysql(); //atribui a variavel '$link' a classe conecta_mysql.

	$resultado_id = mysqli_query($link, $sql); //atribui a variavel o retorno da consulta no banco.

	if($resultado_id){

		$dados_usuario =  mysqli_fetch_array($resultado_id); //atribui a um array o retorno dos dados do banco.

		if(isset($dados_usuario['usuario'])){ //verifica se o retorno contem algum registro

			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];
			
			header('Location: home.php');//direciona para a home.
		}else{
			header('Location: index.php?erro=1'); //força o retorno para a pagina principal com mensagem de erro "via location: url".
		}

	}else{
		echo 'Erro na consulta de tabelas'; //caso a consulta tenha dado falha.
	}
	?>