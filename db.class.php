<?php
	class db{
		
		private $host = 'localhost';//host
		private $usuario = 'root';//usuario
		private $senha = 'usbw';//senha
		private $database = 'twitter_clone';

		public function conecta_mysql(){
			//criar a conexão
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
			//ajusta o charset de comunicação
			mysqli_set_charset($con, 'utf8');
			//verifica´possiveis erros

			return $con;
		}
		
	}
?>