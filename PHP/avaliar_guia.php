
<?php
	include_once("BACKEND/conexao.php");

	$sql = "SELECT * FROM guias";
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
		//echo substr($conteudo_2, 0, 50);

	function loop($linha){
		for($i = 0; $i < (sizeof($linha)); $i++){
			$t = "<div class='col-sm-12'><div class='card'>";
			$t .= "<h5 class='card-header text-center text-light' id='navbar'>".$linha[$i][4]."</h5>";
			$t .= "<div class='card-body'><h5 class='card-title text-center text-muted'>Autor:".$linha[$i][3]."</h5>";
			$t .= "<p class='card-text'><span style='padding: 5px;'></span>";	
			$t .= "<div class='text-center'>". substr($linha[$i][2], 0, 50)."</div>";
			
			$t .= "<div class='like text-center'><button type='button' 		class='btn'id='botaoEnviar'>Gostei</button></div>";			



			$t .= "</p></div></div></div><hr>";

			//$t .= "<div class='like text-center'><button type='button' class='btn'id='botaoEnviar'>Gostei</button></div>";
			//$t .= "<hr>";

			echo $t;
		}
	}

	$resposta = $_GET['resposta'];

	if(isset($resposta)){
		if($resposta == 0){

		}

		else if($resposta == 1){

			echo "
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
					  <strong>Sucesso</strong> O guia foi curtido com sucesso!.
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";	
		}
		else if($resposta == 2){

		echo "
				<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				  <strong>Erro</strong> Falha ao curtir o guia!.
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
		}	
		else if($resposta == 3){

		echo "
				<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				  <strong>Erro</strong> O usuário ja curtiu o guia.
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
	<title>Avaliar Guias</title>
	<?php include_once('../HTML/cabecalho.html');?>
</head>
<body class="corpo">
	<?php include_once('navbar.php');?>
	<div class="container">
		<span style="padding: 20px;"></span>		
		<h1 class="text-center">Avaliar guias</h1>
		<h5 class="text-center text-muted">Veja os guias do sistema e avalie os que mais agradarem clicando no gostei</h5>
			
		<?php
			loop($linha);
		?>
		
	</div>	
	
	<?php include_once('../HTML/rodape.html');?>

	<script>

		let likes = document.querySelectorAll(".like");

	    likes.forEach(function(like){
			like.addEventListener("click", function(){
				let cardTeste = this.parentElement.children;
				let idProBack = cardTeste[1].innerHTML;
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

