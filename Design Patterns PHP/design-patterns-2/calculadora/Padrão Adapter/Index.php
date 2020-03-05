<?php
	date_default_timezone_set("Brazil/East");
	
	require_once("CarregaClasses.php");
	
	$data = new Relogio();
	echo $data->getDia() . "/" . $data->getMes();
?>