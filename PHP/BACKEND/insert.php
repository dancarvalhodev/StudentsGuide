<?php
	include_once("conexao.php");
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$frase = $_POST['frase'];
	$senha = $_POST['senha'];
	$img = "../Imagens/usu.jpg";

	$sql2 = "SELECT * FROM pessoa WHERE emailPessoa = '" . $email . "'";
	var_dump($con->error);
	$consulta2 = $con->query($sql2);
	$linha2 = $consulta2->fetch_array();
	$emailSQL = $linha2['emailPessoa'];

	if($emailSQL == $email){
		header('Location: ../cadastro.php?erro=1');
	}	
	else{
		if(isset($nome, $email, $frase, $senha, $img)){

			$sql = "INSERT INTO pessoa(nomePessoa, emailPessoa, senhaPessoa, frasePessoa, imagemPessoa) VALUES (?, ?, ?, ?, ?)";
			$consulta = $con->prepare($sql);
			var_dump($con->error);
			$consulta->bind_param("sssss", $nome, $email, $senha, $frase, $img);
			$consulta->execute();
			$resultado = $consulta->affected_rows;

			if($resultado == 1){
				header('Location: ../tela_login.php');
			}
		}
	}
?>
