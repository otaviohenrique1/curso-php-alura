<?php
	require_once("cabecalho.php");
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$mensagem = $_POST["mensagem"];
		$_SESSION["success"] = "Menssagem enviada com sucesso.";
		header("Location: contato.php");
	require_once("rodape.php");
?>