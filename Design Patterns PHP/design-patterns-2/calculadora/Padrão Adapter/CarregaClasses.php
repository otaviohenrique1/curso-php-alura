<?php
	function CarregaClasses($carregaClasse){
		require_once($carregaClasse . ".php");
	}
	spl_autoload_register("CarregaClasses");
?>