<?php

	require_once ('db.class.php'); //faz a requisição do arquivo de conexão com o banco de dados.

	$usuario = $_POST['usuario']; //atribui a variavel usuario retornados da seção cadastro.
	$senha = md5($_POST['senha']); //atribui a variavel senha retornados da seção cadastro.
	$email = $_POST['email']; //atribui a variavel email retornados da seção cadastro.

	$obj_db = new db(); // cria uma nova conexão com o banco de dados chamando a classe 'bd'.
	$link = $obj_db->conecta_mysql(); //atribui a variavel '$link' a classe conecta_mysql.

	$usuario_existe = false;
	$email_existe = false;


	//usuario
		$sql = "select * from usuarios where usuario = '$usuario'";
		if ($resultado_id = mysqli_query($link, $sql)){

		$dados_usuario = mysqli_fetch_array($resultado_id);
		
		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
		}

	}else{
			echo ' erro ao tentar localizar o usuario';
	}
	//email
		$sql = "select * from usuarios where email = '$email'";
		if ($resultado_id = mysqli_query($link, $sql)){

		$dados_usuario = mysqli_fetch_array($resultado_id);
		
		if(isset($dados_usuario['email'])){
			$email_existe = true;
		}

	}else{
			echo 'erro ao tentar localizar o email';
	}


	if($usuario_existe || $email_existe){

		$retorno_get = '';

		if ($usuario_existe) {
			$retorno_get.='erro_usuario=1&';
		}

		if ($email_existe) {
			$retorno_get.='erro_email=1&';
		}

		header('Location: inscrevase.php?'.$retorno_get);
		die();
	}

	$sql = "insert into usuarios(usuario, email, senha) values ('$usuario', '$email', '$senha')"; // insere os dados digitados pelo usuário no banco de dados.

	if ($cone = mysqli_query($link, $sql)){ //atribui a variavel o retorno da consulta no banco.
		echo 'usuario cadastrado com sucesso'; //retorna o resultado da inserção.
	}else{
		echo 'usuario não cadastrado';
	}
?>
