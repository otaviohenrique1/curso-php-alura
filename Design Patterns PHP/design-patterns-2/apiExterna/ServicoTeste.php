<?php
	class ServicoTeste{
		private static $instance = null;
		public static function getInstance(){
			if(is_null($this->instance)){
				$this->instance = new Servico();
			}
			return $this->instance;
		}
	}
?>