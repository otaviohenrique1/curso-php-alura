<?php
	require_once("CarregaClases.php");
	
	class CalculadoraDeDescontos{
		public function desconto(Orcamento $Orcamento){
			/*
				$desconto = new Desconto5Itens();
				$valorDoDesconto = $desconto->desconto($Orcamento);
				if($valorDoDesconto == 0){
					$desconto = new Desconto5Itens();
					$valorDoDesconto = $desconto->desconto($Orcamento);
				}
				return $valorDoDesconto;
			*/
			
			$desconto5itens = new Desconto5Itens();
			/*Se a lista de itens do orcamento tem mais de 5 itens*/
			
			$desconto500reais = new Desconto500Reais();
			/*Se o orcamento tem um valor total de mais que 500,00*/
			
			$desconto300reais = new Desconto300Reais();
			/*Se o orcamento tem um valor total de mais que 300,00*/
			
			$semDesconto = new SemDesconto();
			/*Se a lista de itens do orcamento tem menos que 5 itens e se é menor que 500,00*/
			
			/*Verifica se a lista tem mais que 5 itens, se não
			verifica se o valor do orcamento é maior que 500,00*/
			$desconto5itens->setProximo($desconto500reais);
			
			/*Verifica se o valor é maior que 500,00, se não
			verifica se o valor do orcamento é maior que 300,00*/
			$desconto500reais->setProximo($desconto300reais);
			
			/*Verifica se o valor é maior que 300,00, se não
			não coloca desconto no valor*/
			$desconto300reais->setProximo($semDesconto);
			
			$valorDoDesconto = $desconto5itens->desconto($Orcamento);
			
			return $valorDoDesconto;
		}
	}
?>