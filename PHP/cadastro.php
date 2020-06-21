<?php
	include_once("functions.php");
	$retorno = $_GET['erro'];
	cadastro($retorno);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página de Cadastro  - Student's Guide</title>
	<?php include_once('../HTML/cabecalho.html');?>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">	
</head>
<body class="corpo">
	<?php include_once('navbar2.php');?>
	<div class="container">
		<span style="padding: 20px;"></span>		
		<h1 class="text-center">Cadastro</h1>
		<h6 class="text-center text-muted">Todos os campos são obrigatórios</h6>	
		
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="POST" action="BACKEND/insert.php">
					<div class="form-group">
						<input type="text" maxlength=45 required="required" class="form-control" name="nome" placeholder="Digite o seu nome">
					</div>
					<div class="form-group">	
						<input type="email" maxlength="45" required="required" class="form-control" id="email" name="email" placeholder="Digite o seu email">
					</div>
					<div class="form-group">
						<input class="form-control" maxlength=45 required="required" type="text" placeholder="Nova Frase" name="frase">
					</div>						
					<div class="form-group">
						<input type="password"  maxlength=45 required="required" class="form-control" name="senha" placeholder="Digite uma senha">
					</div>									
					<div class="col-sm-12 text-center">
						<div class="form-group">
							<input type="submit" class="btn" id="botaoEnviar" name="enviar" value="Cadastrar">
						</div>					
					</div>
				</form>
			</div>
		</div>

	<?php include_once('../HTML/rodape.html');?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>
