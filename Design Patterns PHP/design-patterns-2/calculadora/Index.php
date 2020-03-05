<?php
	date_default_timezone_set("Brazil/East");
	
	require_once("CarregaClasses.php");
	
	$esquerdo = new Soma(new Numero(1), new Numero(3));
	$direito = new Subtracao(new Numero(2), new Numero(2));
	
	$impressora = new Impressora();
	$soma = new Soma($esquerdo, $direito);
	
	$data = new Relogio();
	echo $data->getDia() . "/" . $data->getMes();
	
	echo "<br>";
	
	$soma->aceita($impressora);
	
	echo " = ";
	
	echo $soma->avalia();
	
	echo "<br>";
	
	$mapa = new ServicoMapas1();
	echo $mapa->getMapa() . "<br>";
	
	$mapa2 = new ServicoMapas2();
	echo $mapa2->getMapa() . "<br>";
?>