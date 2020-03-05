<?php
	class EmpresaFacade{
		private static $instance = null;
		
		private function EmpresaFacade(){
			/*Impede que a casse seja instanciada*/
		}
		
		public static function getInstance(){
			/*Padrão de projeto Singleton*/
			if(is_null($this->instance)){
				$this->instance = new Empresa();
			}
			return $this->instance;
		}
		
		public function criarContrato($nome, $valor){
			return new Contrato($nome, $valor);
		}
		
		public function criaItem($nomeItem, $valor){
			return new Item($nomeItem, $valor);
		}
		
		public function criaPedido($nome, $valor){
			return new Pedido($nome, $valor);
		}
		
		public function finalizaPedido(Pedido $pedido){
			//Diversas classes são usadas
		}
	}
?>