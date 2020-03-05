<?php
	class FilaDeExecucao{
		private $listaDeComandos;
		
		function __construct(){
			$this->listaDeComandos = array();
		}
		
		public function add(Comando $Comando){
			$this->listaDeComandos[] = $Comando;
		}
		
		public function processa(){
			foreach($this->listaDeComandos as $comando){
				$comando->executa();
			}
		}
	}
?>