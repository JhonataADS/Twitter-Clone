<?php

session_start();

	if(!isset($_SESSION['usuario'])){// verifica se a variavel em questão está preenchida ou não.
		header('Location: index.php?erro=1');//impede a mudança de pagina via url, retornando a pagina index.
	}

	require_once ('db.class.php'); 

	$id_usuario = $_SESSION['id_usuario'];
	$seguir_id_usuario = $_POST['seguir_id_usuario'];

	if($id_usuario == '' || $seguir_id_usuario == ''){
		die();
	}

	$obj_db = new db(); // cria uma nova conexão com o banco de dados chamando a classe 'bd'.
	$link = $obj_db->conecta_mysql();

	$sql = " INSERT INTO usuarios_seguidores(id_usuario, seguindo_id_usuario)values($id_usuario, $seguir_id_usuario)";

	mysqli_query($link, $sql);
	
	?>
