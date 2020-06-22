<?php
	include_once("functions.php");
	$resposta = $_GET['resposta'];
	
	suporte($resposta);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Suporte</title>
	<?php include_once('../HTML/cabecalho.html');?>
</head>
<body class="corpo">
	<?php include_once('navbar.php');?>
	<div class="container">
		<span style="padding: 20px;"></span>		
		<h1 class="text-center">Suporte</h1>
		<h6 class="text-center text-muted">Precisa de uma mão? Mande sua dúvida no formulário de contato abaixo.</h6>
		<div class="row">
			<!-- Site de referencia https://www.hostinger.com.br/tutoriais/como-enviar-emails-usando-php/-->
			<div class="col-md-6 offset-md-3">
				<form method="POST" action="../email.php">

					<div class="form-group">
						<input type="text" maxlength=25 required="required" class="form-control" value="<?php echo $_SESSION['email'];?>" name="emailUsuario" placeholder="Digite um email válido">
					</div>
					<div class="form-group">
						<input class="form-control" maxlength=45 required="required" type="text" placeholder="Assunto" name="assunto">
					</div>						
					<div class="form-group">
						<input class="form-control" maxlength=150 required="required" type="text" placeholder="Mensagem" name="mensagem">
					</div>	
					<div class="col-sm-12 text-center">
						<div class="form-group">
							<input type="submit" class="btn" id="botaoEnviar" name="enviar" value="Enviar">
						</div>					
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include_once('../HTML/rodape.html');?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>
