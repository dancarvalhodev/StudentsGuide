<?php
	include_once("conexao.php");
	session_start();
	
    $tituloGuia = $_GET['titulo'];
    $idGuia = $_GET['idGuia'];
    $tag = $_GET['tag'];
	$temp = $_GET['texto'];
	$conteudo = str_replace('"', "", $temp);

	if(isset($conteudo, $idGuia, $tituloGuia, $tag)){
        $sql = "UPDATE guias SET conteudoGuia = ?, tituloGuia = ?, tagGuia = ? WHERE idGuia = ?";
			
		$consulta = $con->prepare($sql);
		var_dump($con->error);
		$consulta->bind_param("ssss", $conteudo, $tituloGuia, $tag, $idGuia);
		$consulta->execute();
		$resultado = $consulta->affected_rows;

		if($resultado == 1){
			header('Location: ../perfil.php?resposta=1');
		}
	}
	
	else{
		echo "Ocorreu um erro ao gravar o guia, tente novamente mais tarde !!!";
	}

?>