<?php 

	include_once("BACKEND/conexao.php");
	include_once("bd_functions.php");
	include_once("functions.php");

    $idG  = $_GET['id'];
	$linha2 = selecionarGuiaEspecifico($con, $idG);
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
				imprimeGuia($linha2);
			?>
		</div>
	</div>	
	
	<?php include_once('../HTML/rodape.html');?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
	<script src="../JS/main.js" type="module"></script>
	<script src="../JS/functions.js" type="module"></script>
	
</html>



























