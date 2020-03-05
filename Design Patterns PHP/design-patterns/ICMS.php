<?php
	class ICMS extends TemplateDeImpostoCondicional{
		function __construct($imposto = null){
			parent::__construct($imposto);/*Chama construtor da classe imposto*/
		}
		
		public function deveUsarOMaximo(Orcamento $Orcamento){
			return $Orcamento->getValor() > 500;
		}
		
		public function taxacaoMinima(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.05;
		}
		
		public function taxacaoMaxima(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.15;
		}
	}
?>