<! DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Minha loja</title>
		<link href="css/bootstrap.css" rel="stylesheet"/>
		<link href="css/loja.css" rel="stylesheet"/>
		<?php
			/*Mostra todos os erros exeto os do E_NOTICE*/
			error_reporting(E_ALL ^ E_NOTICE);
			require_once("mostra_alerta.php");
		?>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Minha Loja</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li><a href="produto_formulario.php">Adiciona produto</a></li>
						<li><a href="produto_lista.php">Produtos</a></li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="sobre.php">Sobre</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="principal">
				<?php
					/*Tipo de alerta que sera exibido*/
					mostraAlerta("success");
					mostraAlerta("danger");
				?>