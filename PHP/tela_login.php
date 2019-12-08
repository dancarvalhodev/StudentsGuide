<?php

	$resposta = $_GET['mensagem'];

	if(isset($resposta)){
		if($resposta == 0){

		}

		else if($resposta == 1){

			echo "
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
					  <strong>Sucesso</strong> A senha foi alterada!.
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";	
		}
		else if($resposta == 2){

		echo "
				<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				  <strong>Caro usuário!</strong> Email ou senha incorretas, por favor verifique!.
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
		}	
	}	

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login - Student's Guide</title>
	<?php include_once('../HTML/cabecalho.html');?>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body class="corpo">
	<?php include_once('navbar2.php');?>
	<div class="container">
		<span style="padding: 20px;"></span>
		<div class="row">
			<div class="col-sm-12">
				<div class="card" style="width:  65%; height: auto; margin:0 auto;">
					<h5 class="card-header text-center text-light" id="navbar">Login</h5>
					<div class="card-body">
						<p class="card-text">
							<form method="POST" action="BACKEND/read.php">
								<div class="form-group">
									<input type="email" maxlength="45" class="form-control" id="email" name="email" placeholder="Digite o seu email">
								</div>
								<div class="form-group">
									<input type="password" maxlength=45 class="form-control" name="senha" placeholder="Digite a sua senha">
								</div>
								<div class="form-group text-center">
									<input type="submit" class="btn" id="botaoEnviar" name="enviar" value="Enviar">
								</div>
							</form>
							<div class="form-group text-center">
								<button class="btn recuperaSenha" id="botaoEnviar">Esqueci a senha</button>
							</div>
						</p>
					</div>
				</div>
			</div>
			<span style="padding: 10px;"></span>
		</div>
	</div>

	<?php include_once('../HTML/rodape.html');?>

	<script>
		let recupera = document.querySelector(".recuperaSenha");
		recupera.addEventListener("click", function(){
			window.location = "recuperaSenha.php";
		});


	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
