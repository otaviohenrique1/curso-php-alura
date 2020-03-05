<?php
	error_reporting(0);/*Esconde warnings*/
	
	require_once("CarregaClasses.php");
	
	$factory = new ConnectionFactory();
	
	$conexao = $factory->getConnection();
	
	$select = "select * from cursos";
	
	var_dump($conexao);
?>