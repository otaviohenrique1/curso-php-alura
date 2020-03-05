<?php
	date_default_timezone_set("Brazil/East");
	
	require_once("CarregaClasses.php");
	
	$historico = new Historico();
	$contrato = new Contrato("Caelum", date("Y-m-d"));
	
	echo "<pre>";/*formada o resultado exibido*/
	
	var_dump($contrato);
	
	$historico->addEstado($contrato->salvaEstado());
	$contrato->avanca();
	var_dump($contrato);
	
	$historico->addEstado($contrato->salvaEstado());
	$contrato->avanca();
	var_dump($contrato);
	
	$contratoAntigo = $historico->getEstado(0);
	var_dump($contratoAntigo);
	
	$contratoAntigo = $historico->getEstado(1);
	var_dump($contratoAntigo);
?>