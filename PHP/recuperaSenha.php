<?php
	if(isset($_GET['erro'])){
		echo "
				<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				  <strong>Caro usuário!</strong> Os emails não conferem, por favor verifique!.
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Esqueci a Senha  - Student's Guide</title>
	<?php include_once('../HTML/cabecalho.html');?>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">	
</head>
<body class="corpo">
	<?php include_once('navbar2.php');?>
	<div class="container">
		<span style="padding: 20px;"></span>		
		<h1 class="text-center">Esqueci a minha senha</h1>
		<h6 class="text-center text-muted">Não tem problema, digite o seu email abaixo.</h6>	
		
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="POST" action="BACKEND/recupera.php">
					<div class="form-group">	
						<input type="email" maxlength="45" required="required" class="form-control" id="email1" name="email1" placeholder="Digite o seu email">
					</div>	
					<div class="form-group">	
						<input type="email" maxlength="45" required="required" class="form-control" id="email2" name="email2" placeholder="Confirme o seu email">
					</div>					
					<div class="form-group">
						<input type="password"  maxlength=45 required="required" class="form-control" name="senha" placeholder="Digite a nova senha">
					</div>													
					<div class="col-sm-12 text-center">
						<div class="form-group">
							<input type="submit" class="btn" id="botaoEnviar" name="enviar" value="Recuperar">
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
