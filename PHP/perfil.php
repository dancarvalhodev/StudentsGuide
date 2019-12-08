<?php

	if(isset($_GET['resposta'])){
		echo "
				<div class='alert alert-success alert-dismissible fade show' role='alert'>
				  <strong>Sucesso</strong> O guia foi atualizado com sucesso!.
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
	}
	
?>	
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('navbar.php');?>
	<title>Perfil do <?php echo $_SESSION['nome']; ?></title>
	<?php include_once('../HTML/cabecalho.html');?>
	<style>
		#fundo_perfil{
			background-image: url(../Imagens/fundo.jpg);
			height: 100%;
			width: 100%
		}		
	</style>
</head>
<body class="corpo">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<span style="padding: 20px;"></span>
				<div  class="card">
					<div id="fundo_perfil" class="card-header">
					<!-- gravar o cam da img na session -->
	
						<div class="text-center" ><img style="border-radius: 100%; width: 200px; height: 200px;" src="<?php echo $_SESSION['img']; ?>" ></div>
					</div>
					<div class="card-body">
				    	<div>
				    		<h5 class="text-center text-dark"><?php echo $_SESSION['nome']; ?></h5>
				    		<p class="text-center text-dark"><?php echo $_SESSION['frase']; ?></p>
						</div>
						<div style="display: inline-block;" class="text-center col-sm-12">	
							<?php include_once('dados_perfil.php');?>  
							<div style="display: inline-block; padding: 5px;"><a id="botaoEnviar" class="btn nav-link" style="color: white;" href="guias_criados.php">Guias Criados</a></div>	
							<div style="display: inline-block; padding: 5px;"><button type="button" id="botaoEnviar" class="btn nav-link" data-toggle="modal" data-target="#dados">Alterar dados do perfil</button></div>	
						</div>
			 		</div>
				</div>	
			</div>
		</div>	
	</div>	
	
	<?php include_once('../HTML/rodape.html');?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>
