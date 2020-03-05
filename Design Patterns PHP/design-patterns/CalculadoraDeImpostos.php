<?php
	class CalculadoraDeImpostos{
		public function calcula(Orcamento $Orcamento, Imposto $imposto){
			/*Recebe o objeto e o valor e retorna o objeto*/
			return $imposto->calcula($Orcamento);
		}
	}
?>