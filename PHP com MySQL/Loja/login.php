<?php
	require_once("banco_usuario.php");
	require_once("logica_usuario.php");
	
	/*
		email: administrador@email.com
		senha: 123456
	*/
	
	$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
	if($usuario == null){
		$_SESSION["danger"] = "Usuário ou senha inválida";
		header("Location: index.php");
	}
	else{
		$_SESSION["success"] = "Usuário logado.";
		logaUsuario($usuario["email"]);
		header("Location: index.php");
	}
	die();