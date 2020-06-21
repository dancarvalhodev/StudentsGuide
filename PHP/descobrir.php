<?php
	include_once("bd_functions.php");
	include_once("functions.php");
	include_once("BACKEND/conexao.php");

	$pesquisa = $_GET['pesquisa'];
	$tag = $_GET['tag'];
	$linha = consultaGuiasSistema($con, $tag, $pesquisa);
	imprimeGuiasDescobrir($linha);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Descobrir</title>
	<?php include_once('../HTML/cabecalho.html');?>
</head>
<body class="corpo">
	<?php include_once('navbar.php');?>
	<div class="container">
		<span style="padding: 20px;"></span>		
		<h1 class="text-center">Resultados</h1>
		<h5 class="text-center text-muted">Veja os resultados da pesquisa com a palavra chave <?php echo $pesquisa;?>.</h5>
			
		<?php
			loop($linha);
		?>
		
	</div>	
	
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

