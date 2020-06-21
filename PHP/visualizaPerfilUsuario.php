<?php 

    include_once("BACKEND/conexao.php");
	include_once("bd_functions.php");
	include_once("functions.php");

	$id = $_POST['campo'];
	
	consultaPessoa($con, $id);
	consultaAutorGuia($con, $id);
	imprimeGuia($linha2);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('navbar.php');?>
	<title>Perfil do <?php echo $linha['nomePessoa']; ?></title>
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
						<div class="text-center" ><img style="border-radius: 100%; width: 200px; height: 200px;" src="<?php echo $linha['imagemPessoa']; ?>" ></div>
					</div>
					<div class="card-body">
				    	<div>
				    		<h5 class="text-center text-dark"><?php echo $linha['nomePessoa']; ?></h5>
				    		<p class="text-center text-dark"><?php echo $linha['frasePessoa']; ?></p>
						</div>
			 		</div>
				</div>	
			</div>
			<span style="padding: 40px;"></span>
			<div class="col-sm-12 text-center">
				<h6>Confira todos os guias criados pelo <?php echo $linha['nomePessoa']; ?></h6>
				<span style="padding: 10px;"></span>
				<?php imprimeGuia($linha2);?>
			</div>			
		</div>	
	</div>	

	</div>	
	
	<span style="padding: 20px;"></span>

	<?php include_once('../HTML/rodape.html');?>

	<script>

		let likes = document.querySelectorAll(".like");
		console.log(likes);

	    likes.forEach(function(like){
			like.addEventListener("click", function(){
				let cardTeste = this.parentElement.children;
				let idProBack = cardTeste[1].textContent;
				let idPessoaProBack = <?php echo $_SESSION['id']; ?>;			
				window.location = "BACKEND/curtidasGuia.php?idGuia=" + idProBack + "&idPessoa=" + idPessoaProBack;
			});
	    }); 		

	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>



























