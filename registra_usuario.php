<?php

require_once ('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	$logar = $_POST['logar'];

	$obj_db = new db();
	$link = $obj_db->conecta_mysql();
	$sql = "insert into usuarios(usuario, email, senha) values ('$usuario', '$logar', '$senha')";
	//executar a query


	if ($cone = mysqli_query($link, $sql)){ //retorna o resultado da inserção.
		echo 'usuario cadastrado com sucesso';
	}else{
		echo 'usuario não cadastrado';
	}
?>
