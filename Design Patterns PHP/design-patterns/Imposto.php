<?php
	abstract class Imposto{
		protected $outroImposto;
		
		function __construct($imposto = null){
			$this->outroImposto = $imposto;
		}
		
		public abstract function calcula(Orcamento $Orcamento);/*Metodo abstrato*/
		
		public function calculaOutroImposto(Orcamento $Orcamento){
			if(is_null($this->outroImposto)){
				return 0;
			}
			return $this->outroImposto->calcula($Orcamento);
		}
	}
?>