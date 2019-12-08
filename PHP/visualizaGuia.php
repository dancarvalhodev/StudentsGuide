<?php 

    include_once("BACKEND/conexao.php");

    $idG  = $_GET['id'];

	$sql = "SELECT * FROM guias WHERE idGuia = '$idG'";
	$consulta = $con->query($sql);
	$linha = $consulta->fetch_all();

	/*
	Ordem do vetor linha
		00 ID Guia
		01 ID Autor
		02 Conteudo Guia
		03 Autor
		04 Titulo Guia
		05 Tag
	*/

	function loop($linha){
		for($i = 0; $i < (sizeof($linha)); $i++){
			$t = "<div class='col-sm-12'><div class='card'>";
			$t .= "<h5 class='card-header text-center text-light' id='navbar'>".$linha[$i][4]."</h5>";
			$t .= "<div class='card-body'><h5 class='card-title text-center text-muted'>Autor:".$linha[$i][3]."</h5>";
			$t .= "<p class='card-text'><span style='padding: 5px;'>". $linha2[$i][0] . "</span>";
			$t .= "<div class='text-center'>".$linha[$i][2]."</div>";
			$t .= "<div class='like text-center'><button type='button' class='btn'id='botaoEnviar'>Gostei</button></div>";	
			$t .= "</p></div></div></div><hr>";
		
			echo $t;
		}
	}
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
		<h1 class="text-center">Visualização do Guia Escolhido</h1>
		<span style="padding: 20px;"></span>		
		<div class="col-sm-12">	
			<?php
				loop($linha);
			?>
		</div>
		
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



























