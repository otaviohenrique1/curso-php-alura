<?php 
	require_once("cabecalho.php");
	require_once("conecta.php");
	require_once("banco_produto.php");
?>	
	<div class="formulario-reposta">
		<?php
			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$preco = $_POST['preco'];
			$descricao = $_POST['descricao'];
			$categoria_id = $_POST['categoria_id'];
			if(array_key_exists('usado', $_POST)){
				$usado = "true";
			}
			else{
				$usado = "false";
				/*Entre aspas para enviar o valor corretamente,
				senão envia o valor vazio(não envia o dado)*/
			}
			
			if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)){
		?>
				<p class="text-success">Produto <?php echo $nome;?>, preço: R$ <?php echo $preco;?>, alterado com sucesso!</p>
		<?php
			}			
			else{
				$mensagem_erro = mysqli_error($conexao);
		?>
				<script>alert("Adicione um produto para poder continuar");</script>
				<p class="text-danger">Produto <?php echo $nome;?>, não foi alterado!<br>
				<?= $mensagem_erro; ?></p>
		<?php 
			}
			mysqli_close($conexao);
			
		?>
	</div>
<?php require_once("rodape.php");?>