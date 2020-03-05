<?php
	date_default_timezone_set("Brazil/East");
	
	require_once("CarregaClasses.php");
	
	$mapa = new ServicoMapas1();
	echo $mapa->getMapa() . "<br>";
	
	$mapa2 = new ServicoMapas2();
	echo $mapa2->getMapa() . "<br>";
?>