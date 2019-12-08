<?php
	include_once("conexao.php");
	session_start();
	
	$tituloGuia = $_GET['titulo'];
	$tag = $_GET['tag'];
	$temp = $_GET['texto'];



	$conteudo = str_replace('"', "", $temp);
	
	$nomeAutor = $_SESSION['nome'];
	$idAutor = $_SESSION['id'];	
	
	if(isset($conteudo, $nomeAutor, $idAutor, $tituloGuia, $tag)){
		$sql = "INSERT INTO guias(idAutor, conteudoGuia, nomeAutor, tituloGuia, tagGuia) VALUES (?, ?, ?, ?, ?)";
			
		$consulta = $con->prepare($sql);
		var_dump($con->error);
		$consulta->bind_param("sssss", $idAutor, $conteudo, $nomeAutor, $tituloGuia, $tag);
		$consulta->execute();
		$resultado = $consulta->affected_rows;

		if($resultado == 1){
			header('Location: ../criar_guia.php?resposta=1');
		}
	}
	
	else{
		echo "Ocorreu um erro ao gravar o guia, tente novamente mais tarde !!!";
	}

?>