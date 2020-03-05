<?php
	require_once("cabecalho.php");
	require_once("banco_categoria.php");
	require_once("banco_produto.php");
	
	$id = $_GET['id'];
	$produto = buscaProduto($conexao, $id);
	$categorias = listaCategorias($conexao);
	
	$usado = $produto['usado'] ? "checked='checked'" : "";
	/*Operador ternario(if else resumido), se verdadeiro é o valor antes de :,
	se é falso é o valor depois de :*/
?>
	<h1>Alterando produto</h1>
	<div class="formulario">
		<form action="altera_produto.php" method="post">
			<input type="hidden" name="id" value="<?=$produto['id']?>">
			<table class="table">
				<?php require_once("produto_formulario_base.php");?>
				<tr>
					<td>
						<button class="btn btn-primary" type="submit">Alterar</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
<?php require_once("rodape.php");?>