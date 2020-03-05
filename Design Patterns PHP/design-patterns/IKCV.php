<?php
	class IKCV extends TemplateDeImpostoCondicional{
		function __construct($imposto = null){
			parent::__construct($imposto);/*Chama construtor da classe imposto*/
		}
		
		public function deveUsarOMaximo(Orcamento $Orcamento){
			return $Orcamento->getValor() > 500  && $this->temItemMaiorQue100ReaisNo($orcamento);
		}
		
		public function taxacaoMinima(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.10;
		}
		
		public function taxacaoMaxima(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.06;
		}
		
		private function temItemMaiorQue100ReaisNo(Orcamento $orcamento) {
			foreach ($orcamento->getItens() as $item) {
				if($item->getValor() > 100) return true;
			}
			return false;
		}
	}
?>