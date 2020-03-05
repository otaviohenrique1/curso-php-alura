<tr>
	<td>
		<p>Nome:</p>
	</td>
	<td>
		<input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>">
	</td>
</tr>
<tr>
	<td>
		<p>Preço:</p>
	</td>
	<td>
		<input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>">
	</td>
</tr>
<tr>
	<td>
		<p>Descrição</p>
	</td>
	<td>
		<textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea>
	</td>
</tr>
<tr>
	<td></td>
	<td>
		<input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
	</td>
</tr>
<tr>
	<td>
		<p>Categoria</p>
	</td>
	<td>
		<select name="categoria_id" class="form-control">
			<?php foreach($categorias as $categoria):
				$essaeaCategoria = $produto['categoria_id'] == $categoria['id'];
				$selecao = $essaeaCategoria ? "selected='selected'" : "";
			?>
				<option value="<?=$categoria['id']?>" <?=$selecao?> >
					<?=$categoria['nome']?>
				</option>
			<?php endforeach?>
		</select>
	</td>
</tr>