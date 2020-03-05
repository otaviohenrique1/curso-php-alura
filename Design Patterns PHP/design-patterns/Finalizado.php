<?php
	class Finalizado implements EstadoDeUmOrcamento{
		public function aplica(Orcamento $Orcamento){
			throw new Exception("Um orcamento finalizado não pode receber descontos");
		}
		
		public function aprova(Orcamento $Orcamento){
			throw new Exception("Apenas orçamentos em aprovação podem ser aprovados");
		}
		
		public function reprova(Orcamento $Orcamento){
			throw new Exception("Este orçamento ja se encontra reprovado");
		}
		
		public function finaliza(Orcamento $Orcamento){
			throw new Exception("Apenas orçamentos aprovados podem ser finalizados");
		}
	}
?>