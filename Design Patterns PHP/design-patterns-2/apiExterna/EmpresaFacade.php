<?php
	class EmpresaFacade{
		/*Padrão de projeto Façade*/
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