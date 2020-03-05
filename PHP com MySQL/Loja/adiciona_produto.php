<?php 
	require_once("cabecalho.php");/*Adiciona uma unica vez*/
	require_once("banco_produto.php");
	require_once("logica_usuario.php");
	
	verificaUsuario();
?>	
	<div class="formulario-reposta">
		<?php
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
			
			if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){
		?>
				<p class="text-success">Produto <?php echo $nome;?>, preço: R$ <?php echo $preco;?>, adicionado com sucesso!</p>
		<?php
			}			
			else{
				$mensagem_erro = mysqli_error($conexao);
		?>
				<script>alert("Adicione um produto para poder continuar");</script>
				<p class="text-danger">Produto <?php echo $nome;?>, não foi adicionado!<br>
				<?= $mensagem_erro; ?></p>
		<?php 
			}
			mysqli_close($conexao);
			
		?>
	</div>
<?php require_once("rodape.php");?>