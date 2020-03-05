<?php
	require_once("CarregaClases.php");
	
	$reforma = new Orcamento(490);
	
	echo $reforma->getValor() . "<br>";
	
	$reforma->aplicaDesconto();
	
	echo $reforma->getValor() . "<br>";
	
	$reforma->aprova();
	
	$reforma->aplicaDesconto();
	
	echo $reforma->getValor() . "<br>";
	
	$calculadora = new CalculadoraDeImpostos();
	
	echo "ICMS com ISS: " . $calculadora->calcula($reforma, new ICMS(new ISS())) . "<br>";
	echo "ICMS: " . $calculadora->calcula($reforma, new ICMS()) . "<br>";
	echo "ISS: " . $calculadora->calcula($reforma, new ISS()) . "<br>";
	echo "KCV: " . $calculadora->calcula($reforma, new KCV()) . "<br>";
	echo "ICPP: " . $calculadora->calcula($reforma, new ICPP()) . "<br>";
	echo "IKCV: " . $calculadora->calcula($reforma, new IKCV()) . "<br>";
	echo "IKCV com ICPP: " . $calculadora->calcula($reforma, new IKCV(new ICPP())) . "<br>";
	echo "ICPP com IKCV: " . $calculadora->calcula($reforma,  new ICPP(new IKCV())) . "<br>";
	echo "ImpostoMuitoAlto com ICMS: " . $calculadora->calcula($reforma, new ImpostoMuitoAlto(new ICMS())) . "<br>";
	echo "<br>";
	$reforma2 = new Orcamento(800);
	echo "ICCC Resultado 1: ".$calculadora->calcula($reforma2, new ICCC()) . "<br>";
	$reforma3 = new Orcamento(2000);
	echo "ICCC Resultado 2: ".$calculadora->calcula($reforma3, new ICCC()) . "<br>";
	$reforma4 = new Orcamento(4000);
	echo "ICCC Resultado 3: ".$calculadora->calcula($reforma4, new ICCC()) . "<br>";
	echo "<br>";
	echo "Testes de descontos<br>";
	$calculadoraDeDescontos = new CalculadoraDeDescontos();
	echo "Desconto<br>";
	$reforma->addItem(new Item("Tijolo", 250));
	$reforma->addItem(new Item("Cimento 1kg", 250));
	$reforma->addItem(new Item("Cimento 1kg", 250));
	$reforma->addItem(new Item("Cimento 1kg", 250));
	//$reforma->addItem(new Item("Cimento 1kg", 250));
	echo $calculadoraDeDescontos->desconto($reforma) . "<br>";
?>