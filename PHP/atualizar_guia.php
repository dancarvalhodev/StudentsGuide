<?php
	include_once("bd_functions.php");
	$id = $_GET['id'];
	selecionaGuiaUsuario($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar um guia</title>
	<?php include_once('../HTML/cabecalho.html');?>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="corpo">
	<?php include_once('navbar.php');?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<span style="padding: 20px;"></span>	
				<div class="text-center ">
					<h1>Editar um Guia</h1>
						<input required="required" class="form-control" type="text" maxlength=45 id="myText" placeholder="Digite o Titulo do Guia" value="<?php echo $tituloGuia;?>">
						<select required="required" class="tag form-control" name="selecao">
							<option value="sem_tag" selected="selected">Escolha um tipo de inteligência</option>
							<option value="linguistica">Inteligência Linguistica</option>
							<option value="visual">Inteligência Visual</option>
							<option value="logico-matematica">Inteligência Lógico-matemática</option>
							<option value="espacial">Inteligência Espacial</option>
							<option value="musical">Inteligência Musical</option>
							<option value="exercicios">Exercicios</option>
							<option value="tutoriais">Tutoriais</option>
						</select>
						<hr>
						<div class="col-sm-12" style="display: inline;">

							<button class="btn negrito"><i class="material-icons">format_bold</i></button>

							<button class="btn italico"><i class="material-icons">format_italic</i></button>

							<button class="btn sublinhado"><i class="material-icons">format_underlined</i></button>

							<button class="btn paragrafo" ><i class="material-icons">format_align_right</i></button>	

							<button class="btn titulo" ><i class="material-icons">title</i></button>	

							<button class="btn subTitulo"><i class="material-icons">subtitles</i></button>

							<button class="btn subTituloMenor" ><i class="material-icons">subtitles</i></button>

							<button class="btn imagem" ><i class="material-icons">photo</i></button>

							<button class="btn video" ><i class="material-icons">video_label</i></button>

							<button class="btn musica" ><i class="material-icons">music_note</i></button>

						</div>
						<hr>
						<textarea class="form-control" id="cont" rows="3"><?php echo $conteudoGuia; ?></textarea>
						<div class="oi"></div>
						<hr>
						<div class="form-group">
							<input class="btn botao" type="submit" id="botaoEnviar" value="Enviar">
						</div>
				</div>	
			</div>
		</div>
	</div>

	<?php include_once('../HTML/rodape.html');?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../JS/main.js" type="module"></script>
	<script src="../JS/functions.js" type="module"></script>

</body>
</html>
