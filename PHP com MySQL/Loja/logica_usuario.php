<?php
	session_start();
	
	function usuarioEstaLogado(){
		/*Retorna o usuario logado*/
		return isset($_SESSION["usuario_logado"]);
	}
	
	function verificaUsuario(){
		/*Verifica se o usuario fez ou não o login*/
		if(!usuarioEstaLogado()){
			$_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
			/*header("Location:index.php?falhaDeSeguranca=true");*/
			header("Location:index.php");
			die();
		}
	}
	
	function usuarioLogado(){
		/*Retorna o nome do usuario que esta logado*/
		return $_SESSION["usuario_logado"];
	}
	
	function logaUsuario($email){
		/*Cria cookie*/
		/*setcookie("usuario_logado", $email , time() + 60);*/
		/*Cria cookie e coloca o tempo em que o cookie expira*/
		$_SESSION["usuario_logado"] = $email;
	}
	
	function logout(){
		/*unset($_SESSION["usuario_logado"]);*/
		session_destroy();
		session_start();
	}