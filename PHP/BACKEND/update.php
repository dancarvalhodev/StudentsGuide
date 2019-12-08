<?php
	include_once("conexao.php");
	session_start();

	$id = $_SESSION['id'];
	$nome = $_POST['nomePerfil'];
	$frase = $_POST['bioPerfil'];
	$senha = $_POST['senhaPerfil'];

	$nomeImagem = $_SESSION['id'];
	$pastaImagem =  "../../Imagens/".$nomeImagem .".jpg";
	var_dump($pastaImagem);
	 
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $pastaImagem)){
		echo "Imagem Inserida";	
	} else {
		echo "Erro ao inserir imagem!";
	}	

	$arr2 = str_split($pastaImagem);
	unset($arr2[0]);
	unset($arr2[1]);
	unset($arr2[2]);
	$str = implode("", $arr2);

	$img = $str;

	if(isset($id, $nome, $frase, $senha, $img)){
		$sql = "UPDATE pessoa SET nomePessoa = ?, frasePessoa = ?, senhaPessoa = ?,  imagemPessoa = ? WHERE idPessoa = ?";
		
		$consulta = $con->prepare($sql);
		var_dump($con->error);
		$consulta->bind_param("sssss", $nome, $frase, $senha, $img, $id);
		$consulta->execute();
		$resultado = $consulta->affected_rows;

		$_SESSION['nome'] = $nome;
		$_SESSION['frase'] = $frase;
		
		
		$_SESSION['img'] = $str;

		
		header('Location: ../index_logado.php');
	
	}

?>