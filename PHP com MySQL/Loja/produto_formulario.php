<?php
	require_once("cabecalho.php");
	require_once("banco_categoria.php");
	require_once("logica_usuario.php");
	
	verificaUsuario();
	
	/*Valor padrao nos campos*/
	$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
	$usado ="";
	
	$categorias = listaCategorias($conexao);
?>
	<h1>Formulario de produto</h1>
	<div class="formulario">
		<form action="adiciona_produto.php" method="post">
			<table class="table">
				<?php require_once("produto_formulario_base.php");?>
				<tr>
					<td>
						<button class="btn btn-primary" type="submit">Cadastrar</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
<?php require_once("rodape.php");?>