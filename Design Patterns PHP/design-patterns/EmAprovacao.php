<?php
	class EmAprovacao implements EstadoDeUmOrcamento{
		public function aplica(Orcamento $Orcamento){
			//$Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.02);
			$Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.05);
		}
		
		public function aprova(Orcamento $Orcamento){
			$Orcamento->setEstado(new Aprovado());
		}
		
		public function reprova(Orcamento $Orcamento){
			$Orcamento->setEstado(new Reprovado());
		}
		
		public function finaliza(Orcamento $Orcamento){
			throw new Exception("Apenas orçamentos aprovados podem ser finalizados");
		}
	}
?>