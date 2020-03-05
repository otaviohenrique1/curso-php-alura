<?php
	class ImpostoMuitoAlto extends Imposto{
		function __construct($imposto = null){
			parent::__construct($imposto);/*Chama construtor da classe imposto*/
		}
		
		public function calcula(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.2  + $this->calculaOutroImposto($Orcamento);/*20%*/
		}
	}
?>