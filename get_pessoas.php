<?php

session_start();

	if(!isset($_SESSION['usuario'])){// verifica se a variavel em questão está preenchida ou não.
		header('Location: index.php?erro=1');//impede a mudança de pagina via url, retornando a pagina index.
	}

	require_once ('db.class.php'); 

	$nome_pessoa = $_POST['nome_pessoa'];
	$id_usuario = $_SESSION['id_usuario'];


	$obj_db = new db(); // cria uma nova conexão com o banco de dados chamando a classe 'bd'.
	$link = $obj_db->conecta_mysql();

	$sql = "SELECT * FROM usuarios WHERE usuario like '%$nome_pessoa%' AND id <> $id_usuario";

	$resultado_id = mysqli_query($link, $sql);

	if ($resultado_id) {
		
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) { // APENAS INDICES ASSOCIATIVOS.
			echo '<a href="" class="list-group-item">';
			echo '<strong> '.$registro['usuario'].' </strong> <small> '.$registro['email'].' </small>';
			echo '<p class="list-group-item-text pull-right">';
				echo '<button type="button" class="btn btn-default btn-seguir" data-id_usuario="'.$registro['id'].'">Seguir</button>';
			echo '</p>';
			echo '<div class="clearfix"></div>';
			echo '</a>';
		}

	}else{
		echo 'Erro na consulta ao banco de dados';
	}

	?>