<?php
	include_once("conexao.php");
	
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	$senha = $_POST['senha'];

	if($email1 == $email2){

		$sql2 = "SELECT * FROM pessoa WHERE emailPessoa = '" . $email1 . "'";
		var_dump($con->error);
		$consulta2 = $con->query($sql2);
		$linha2 = $consulta2->fetch_array();
		$emailSQL = $linha2['emailPessoa'];
		$idSQL = $linha2['idPessoa'];

		if(isset($email1, $emailSQL)){
			if($emailSQL == $email1){
				$sql = "UPDATE pessoa SET emailPessoa = ?, senhaPessoa = ? WHERE idPessoa = ?";
				$consulta = $con->prepare($sql);
				var_dump($con->error);
				$consulta->bind_param("sss", $email1,$senha,$idSQL);
				$consulta->execute();
				$resultado = $consulta->affected_rows;			
				
				if($resultado == 1){
					header('Location: ../tela_login.php?mensagem=1');
				}
			}	
		}
	}
	else{
		header('Location: ../recuperaSenha.php?erro=0');
	}	
	
?>
