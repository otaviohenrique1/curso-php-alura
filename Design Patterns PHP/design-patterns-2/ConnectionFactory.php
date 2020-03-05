<?php
	class ConnectionFactory{
		/*Exemplo de classe Factory*/
		public function getConnection(){
			$host = "localhost";
			$user = "root";
			$pass = "123";
			$banco = "alura";
			
			$con = mysqli_connect($host, $user, $pass, $banco);
			
			return $con;
		}
	}
?>