<?php
	if(isset($_GET['erro'])){
		echo "
				<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				  <strong>Atenção!</strong> Para o ranking funcionar, é necessário no minimo <strong>dez curtidas em dez guias</strong> diferentes. Tente novamente mais tarde...
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
	}
	
	include_once('navbar.php');	
	include_once("BACKEND/conexao.php");

	function pesquisaGuiasMaisCurtidos($con){
		
		$sql = "SELECT COUNT(curtidaGuia)  AS SomaGuia, idGuia AS ID FROM curtidas GROUP BY IdGuia ORDER BY SomaGuia DESC LIMIT 10";
		$consulta = $con->query($sql);
		$linha = $consulta->fetch_all();  
	
		for($i = 0; $i < sizeof($linha); $i++){
			$guiaID = $linha[$i][1];

			$sql2 = "SELECT * FROM guias WHERE idGuia = '$guiaID'";
			$consulta2 = $con->query($sql2);
			$linha2 = $consulta2->fetch_array();

			$conteudoGuia = $linha2['conteudoGuia'];
			$idG = $linha2['idGuia'];
			$nomeAutor = $linha2['nomeAutor'];
			$tituloGuia = $linha2['tituloGuia'];
	
			$t = "<div class='md-4'><div class='card'>";
			$t .= "<h5 class='card-header text-center text-light' id='navbar'>".$tituloGuia."</h5>";
			$t .= "<div class='card-body'><h5 class='card-title text-center text-muted'>Autor:".$nomeAutor."</h5>";
			$t .= "<p class='card-text'><span style='padding: 5px;'></span>";	
			$t .= "<div class='text-center'>".$conteudoGuia."</div>";
			$t .= "<div class='like text-center'><button class='btn leia' id='botaoEnviar'><a style='color: white;' href='visualizaGuia.php?id=".$idG. "'>Leia Mais</a></button></div>";	
			$t .= "</p></div></div></div><hr>";
		
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
				<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				  <strong>Atenção!</strong> O usuário ja curtiu o guia.
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
	<title>Página Inicial do Student's Guide</title>
	<?php include_once('../HTML/cabecalho.html');?>
</head>
<body class="corpo">
	<div class="container">
		<span style="padding: 20px;"></span>		
		<h1 class="text-center">Bem-Vindo(a) <?php echo $_SESSION['nome']; ?></h1>
		<h5 class="text-center text-muted">Sinta-se a vontade para navegar e confira abaixo os guias do dia</h5>
		<h6 class="text-center text-muted"></h6>	
		<div class="col-sm-12">
			<?php pesquisaGuiasMaisCurtidos($con);?>
		</div>
	<?php include_once('../HTML/rodape.html');?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>