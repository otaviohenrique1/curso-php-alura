<?php
	date_default_timezone_set("Brazil/East");/*Define a data local*/
	require_once("CarregaClases.php");
	
	$geradorDeNotas = new NotaFiscalBuilder();
	
	$geradorDeNotas->comEmpresa("Alura");
	$geradorDeNotas->comCnpj("1234");
	$geradorDeNotas->addItem(new Item("Tijolo", 250));
	$geradorDeNotas->addItem(new Item("Cimenmto 1kg", 250));
	$geradorDeNotas->comObservacoes("Tijolos Amarelos");
	$geradorDeNotas->naData();
	
	$geradorDeNotas->addAcao(new Impressora());
	$geradorDeNotas->addAcao(new NotaFiscalDao());
	$geradorDeNotas->addAcao(new EnviadorSms());
	
	$notaFiscal = $geradorDeNotas->build();
	
	echo "<pre>";
	
	var_dump($notaFiscal);/*Imprime*/
?>