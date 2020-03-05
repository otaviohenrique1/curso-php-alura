<?php
	require_once("CarregaClasses.php");
	
	/*Padrão de projeto Command*/
	
	$pedido1 = new Pedido("Cliente1", 250);
	$pedido2 = new Pedido("Cliente2", 350);
	$pedido3 = new Pedido("Cliente3", 50);
	$pedido4 = new Pedido("Cliente4", 550);
	$pedido5 = new Pedido("Cliente5", 750);
	
	$fila = new FilaDeExecucao();
	$fila->add(new ComandoPagar($pedido1));
	$fila->add(new ComandoPagar($pedido2));
	$fila->add(new ComandoPagar($pedido3));
	$fila->add(new ComandoPagar($pedido4));
	$fila->add(new ComandoPagar($pedido5));
	$fila->add(new ComandoFinalizar($pedido3));
	
	$fila->processa();
?>