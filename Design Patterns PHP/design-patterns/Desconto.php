<?php
	interface Desconto{
		/*As classes que implementam a interface Desconto vão 
		ter que implementar as funções da interface Desconto*/
		public function desconto(Orcamento $Orcamento);
		public function setProximo(Desconto $proximo);
	}
?>