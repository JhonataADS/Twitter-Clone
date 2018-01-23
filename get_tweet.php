<?php
session_start();

	if(!isset($_SESSION['usuario'])){// verifica se a variavel em questão está preenchida ou não.
		header('Location: index.php?erro=1');//impede a mudança de pagina via url, retornando a pagina index.
	}

	require_once ('db.class.php'); 

	$id_usuario = $_SESSION['id_usuario'];

	$obj_db = new db(); // cria uma nova conexão com o banco de dados chamando a classe 'bd'.
	$link = $obj_db->conecta_mysql();

	$sql = "SELECT date_format(t.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, t.tweet, u.usuario FROM tweet AS t JOIN usuarios AS u ON (t.id_usuario = u.id)";
	$sql.= " WHERE id_usuario = $id_usuario ORDER BY data_inclusao DESC";

	$resultado_id = mysqli_query($link, $sql);

	if ($resultado_id) {
		
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) { // APENAS INDICES ASSOCIATIVOS.
			echo '<a href="" class="list-group-item">';
			echo '<h4 class="list-group-item-heading"> '.$registro['usuario'].' <small> - '.$registro ["data_inclusao_formatada"].' </small></h4>';
			echo '<p class="list-group-item-text">'.$registro["tweet"].'</p>';
			echo '</a>';
		}

	}else{
		echo 'Erro na consulta ao banco de dados';
	}

	?>