<?php

session_start();


	if(!isset($_SESSION['usuario'])){// verifica se a variavel em questão está preenchida ou não.
		header('Location: index.php?erro=1');//impede a mudança de pagina via url, retornando a pagina index.
	}

	require_once ('db.class.php'); 

	$texto_tweet = $_POST['texto_tweet'];
	$id_usuario = $_SESSION['id_usuario'];


	if($texto_tweet == '' && $id_usuario == ''){
		die();
	}

	$obj_db = new db(); // cria uma nova conexão com o banco de dados chamando a classe 'bd'.
	$link = $obj_db->conecta_mysql();

	$sql = "INSERT INTO tweet(id_usuario, tweet) values($id_usuario, '$texto_tweet')";

	mysqli_query($link, $sql);
	
	?>
