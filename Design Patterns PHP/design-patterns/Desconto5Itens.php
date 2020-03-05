<?php
	class Desconto5Itens implements Desconto{
		private $proximoDesconto;
		public function desconto(Orcamento $Orcamento){
			if(count($Orcamento->getItens()) >= 5){
				/*count() usado na contagem de itens*/
				return $Orcamento->getValor() * 0.1;
			}
			else{
				/*return 0;*/
				return $this->proximoDesconto->desconto($Orcamento);
			}
		}
		public function setProximo(Desconto $proximo){
			$this->proximoDesconto = $proximo;
		}
	}
?>