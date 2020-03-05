<?php
	class ICCC extends Imposto{
		function __construct($imposto = null){
			parent::__construct($imposto);/*Chama construtor da classe imposto*/
		}
		
		public function calcula(Orcamento $Orcamento){
			if($Orcamento->getValor() < 1000){
				return $Orcamento->getValor() * 0.05 + $this->calculaOutroImposto($Orcamento);
			}
			else if($Orcamento->getValor() >= 1000 && $Orcamento->getValor() <= 3000){
				return $Orcamento->getValor() * 0.07 + $this->calculaOutroImposto($Orcamento);
			}
			else if($Orcamento->getValor() > 3000){
				return $Orcamento->getValor() * 0.08 + 30 + $this->calculaOutroImposto($Orcamento);
			}
		}
	}
?>