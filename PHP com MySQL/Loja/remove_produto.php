<?php 
	require_once("cabecalho.php");
	require_once("banco_produto.php");
	require_once("logica_usuario.php");
	
	$id = $_POST['id'];
	removeProduto($conexao, $id);
	
	$_SESSION["success"] = "Produto removido com sucesso.";
	
	header("Location: produto_lista.php");
	die();/*Para a execução de comandos*/
	
	require_once("rodape.php");
?>