<?php
	header('Refresh: 1; URL=index.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Saindo...</title>
	<?php include_once('../HTML/cabecalho.html');?>
</head>
<body class="corpo">
	<?php 
		include_once('navbar.php');
		$nome = $_SESSION['nome'];
	?>
	<div class="container">
		<span style="margin: 20px;"></span>

		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="text-center" style="color: #2c3e50">PUXA...</h1>
				<h3 class="text-muted text-center">Sentiremos sua falta <?php echo $nome; ?>.</h3>
				<h4 class="text-muted text-center">Esperamos que a experiência tenha sido agradável e volte sempre ^^</h4>		
			</div>

			<span style="padding: 20px;"></span>

			<?php include_once('../HTML/rodape.html');?>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</div>
	</div>
</body>
</html>

<?php 
	// Finally, destroy the session.
	session_destroy(); 
?>