<?php
class db{
	
		private $host = 'localhost';//host.
		private $usuario = 'root';//usuario.
		private $senha = 'usbw';//senha.
		private $database = 'twitter_clone';//nome do banco.

		public function conecta_mysql(){
			
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);//cria a conexão inserindo os atributos descrito na classe.
			mysqli_set_charset($con, 'utf8');//ajusta o charset de comunicação com o banco.

			if(mysqli_connect_errno()){
				echo 'Erro ao tentar se conectar com BD MySQL: ' . mysqli_connect_error();
			}
			
			return $con; //retona a conexão com o banco de dados.
		}
		
	}
	?>