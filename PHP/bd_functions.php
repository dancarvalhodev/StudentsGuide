<?php

	/*
	Ordem do vetor linha
		00 ID Guia
		01 ID Autor
		02 Conteudo Guia
		03 Autor
		04 Titulo Guia
		05 Tag
    */
    
    function selecionaGuiaUsuario($id){
        include_once("BACKEND/conexao.php");
	
        $sql = "SELECT * FROM guias WHERE idGuia = $id";
        $consulta = $con->query($sql);
        $linha = $consulta->fetch_array();
    
        $conteudoGuia = $linha['conteudoGuia'];
        $tituloGuia = $linha['tituloGuia'];
    }

    function consultaGuiasSistema($con, $tag, $pesquisa){
        if($tag == "palavra"){

            $sql = "SELECT * FROM guias WHERE tituloGuia LIKE  '%$pesquisa%'";
            $consulta = $con->query($sql);
            $linha = $consulta->fetch_all();
    
        }
        else if($tag == "filtro"){
            $sql = "SELECT * FROM guias WHERE tagGuia ='$pesquisa'";
            $consulta = $con->query($sql);
            $linha = $consulta->fetch_all();
        }
        return $linha;
    }

	function geraCard($con){

		$a = $_SESSION['id'];
		$sql = "SELECT * FROM guias WHERE idAutor = $a ORDER BY idGuia DESC LIMIT 1";
		$consulta = $con->query($sql);
		$linha = $consulta->fetch_array();
		
		$idGuia = $linha['idGuia'];
		$conteudoGuia = $linha['conteudoGuia'];
		$nomeAutor = $linha['nomeAutor'];
		$tituloGuia = $linha['tituloGuia'];
		$tagGuia = $linha['tagGuia'];

		return array('conteudo' => $conteudoGuia, 'autor' => $nomeAutor, 'titulo' => $tituloGuia, 'id' => $idGuia, 'tag' => $tagGuia);
	}

	function um($con){
		$array1 = geraCard($con);
		$_SESSION['conteudo1'] = $array1['conteudo'];
		$_SESSION['autor1'] = $array1['autor'];	
		$_SESSION['titulo1'] = $array1['titulo'];
		$_SESSION['tag1'] = $array1['tag'];	
		$_SESSION['id1'] = $array1['id'];	
	}





?>