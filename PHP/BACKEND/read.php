<?php
	include_once("conexao.php");
	
	$emailDigitado = $_POST['email'];
	$senhaDigitada = $_POST['senha'];

	$sql = "SELECT * FROM pessoa WHERE emailPessoa = '" . $emailDigitado . "' AND senhaPessoa = '" . $senhaDigitada. "'";
	var_dump($con->error);
	$consulta = $con->query($sql);
	$linha = $consulta->fetch_array();

	if(isset($linha)){
		$id = $linha['idPessoa'];
		$nome = $linha['nomePessoa'];
		$email = $linha['emailPessoa'];
		$frase = $linha['frasePessoa'];
		$img = $linha['imagemPessoa'];
		$senha = $linha['senhaPessoa'];


		session_start();
		
		$_SESSION['id'] = $id;	
		$_SESSION['nome'] = $nome;	
		$_SESSION['email'] = $email;
		$_SESSION['frase'] = $frase;
		$_SESSION['img'] = $img;
		$_SESSION['senha'] = $senha;


		header("Location: ../index_logado.php");
	}
	else{
		header("Location: ../tela_login.php?mensagem=2");
		//exit;
	}
?>