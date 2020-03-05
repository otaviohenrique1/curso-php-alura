<?php require_once("cabecalho.php");?>
	<form action="envia_contato.php" method="post">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input type="text" name="nome" class="form-control"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" class="form-control"></td>
			</tr>
			<tr>
				<td>Menssagem</td>
				<td><textarea class="form-control" name="nome"></textarea></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Enviar</td>
			</tr>
		</table>
	</form>
<?php require_once("rodape.php");?>