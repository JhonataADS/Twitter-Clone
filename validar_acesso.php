<?php
	
	require_once ('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);


	$sql = "SELECT * from usuarios where usuario = '$usuario' AND senha = '$senha'";

	$obj_db = new db();
	$link = $obj_db->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql); // pegando a informação que retornou do select

	if($resultado_id){
		$dados_usuario =  mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){ //testa se existe esse usuario no banco de dados
			echo 'usuario existe';
		}else{
			header('Location: index.php?erro=1'); //força o retorno para a pagina principal com mensagem de erro "via url".
		}

	}else{
		echo 'Erro na consulta de tabelas'; //caso a consulta tenha dado falha.
	}
	 

	
?>