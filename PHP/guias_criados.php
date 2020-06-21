<?php
	include_once("BACKEND/conexao.php");
	include_once("bd_functions.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('navbar.php');?>
	<title>StudentGuider - O seu portal de guias</title>
	<?php include_once('../HTML/cabecalho.html');?>
</head>
<body class="corpo">
	<div class="container">
		<span style="padding: 20px;"></span>		
		<h1 class="text-center">Meus Guias</h1>
		<h5 class="text-center text-muted">Confira abaixo o seu ultimo guia.</h5>
		<h6 class="text-center text-danger">Atenção, somente o ultimo guia pode ser editado.</h6>
		<span style="padding: 10px;"></span>		
		<div class="row">

		<div class="col-sm-12">
				<div class="card">
					<h5 class="card-header text-center text-light" id="navbar"><?php um($con); echo $_SESSION['titulo1'];?></h5>
					<div class="card-body">
				    	<h5 class="card-title text-center text-muted">Autor: <?php echo $_SESSION['autor1'];?></h5>
				    	<p class="card-text">
							<h6 class="text-muted text-center"></h6>
							<div class="text-center"><div style="padding: 5px;"></div></div>	
							<div style="padding: 5px;"></div>
							<div class="text-center"><div><?php echo $_SESSION['conteudo1'];?></div></div>
						</p>
						<div class="text-center col-sm-12">
							<input class="btn botao1" type="submit" id="botaoEnviar" value="Editar">
						</div>	
				  	</div>
				</div>
			</div>
		</div>
	</div>	
	
	<?php include_once('../HTML/rodape.html');?>

	
	<script>
		var a = <?php echo $_SESSION['id1']; ?>;
		console.log(a);
		var botao1 = document.querySelector(".botao1");
		console.log(botao1);

		botao1.addEventListener("click", function(){
			var id = a;
			window.location = "atualizar_guia.php?id=" + id;	
		});	
	</script>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>
