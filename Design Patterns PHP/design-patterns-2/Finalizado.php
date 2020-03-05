<?php
	class Finalizado implements TipoDeContrato{
		public function avanca(Contrato $Contrato){
			throw new Exception("Este contrato ja se encontra finalizado");
		}
	}
?>