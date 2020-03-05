<?php
	class SemDesconto implements Desconto{
		public function desconto(Orcamento $Orcamento){
			/*Retorna 0 caso não tenha desconto*/
			return 0;
		}
		public function setProximo(Desconto $proximo){
			/*
				Não ha proximo desconto, metodo esta na 
				classe para apenas cumprir obrigações com a 
				estrutura da interface Desconto,
				metodo vazio
			*/
		}
	}
?>