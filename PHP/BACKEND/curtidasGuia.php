<?php
	include_once("conexao.php");
	session_start();

	$idGuia = $_GET['idGuia'];
	$idPessoa = $_SESSION['id'];

	$sql = "SELECT * FROM curtidas WHERE idPessoa = '" . $idPessoa . "' AND idGuia = '" . $idGuia. "'";
	$consulta = $con->query($sql);
	$linha = $consulta->fetch_array();	

	if($linha == 0){

		$curtidaGuia = 1;

		$sql = "INSERT INTO curtidas(idGuia, idPessoa, curtidaGuia) VALUES (?, ?, ?)";
		
		$consulta = $con->prepare($sql);
		var_dump($con->error);
		$consulta->bind_param("sss", $idGuia, $idPessoa, $curtidaGuia);
		$consulta->execute();
		$resultado = $consulta->affected_rows;		
			
		if($resultado == 1){
			header('Location: ../index_logado.php?resposta=1');
		}
		else if($resultado == 0){
			header('Location: ../index_logado.php?resposta=0');	
		}
	}
	else{

		$sql = "DELETE FROM curtidas WHERE idPessoa = ? AND idGuia = ?";
		$consulta = $con->prepare($sql);
		$consulta->bind_param("ss", $idPessoa, $idGuia);
		$consulta->execute();
		$resultado = $consulta->affected_rows;

		header('Location: ../index_logado.php?resposta=3');	
	}
?>

