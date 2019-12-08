<?php
	include_once("conexao.php");
	session_start();

	$id = $_SESSION['id'];
	
	if(isset($id)){
		$sql = "DELETE FROM pessoa WHERE idPessoa = ?";
		
		$consulta = $con->prepare($sql);
		//var_dump($con->error);
		$consulta->bind_param("s", $id);
		$consulta->execute();
		$resultado = $consulta->affected_rows;

		if($resultado == 1){
			header('Location: ../tela_login.php');
		}

	}




?>