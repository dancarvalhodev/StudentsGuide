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

    function consultaPessoa($con, $id){
        $sql = "SELECT * FROM pessoa WHERE idPessoa = $id";
        $consulta = $con->query($sql);
        $linha = $consulta->fetch_array();

        return $linha;
    }

    function consultaAutorGuia($con, $id){
        $sql2 = "SELECT * FROM guias WHERE idAutor = $id";
        $consulta2 = $con->query($sql2);
        $linha2 = $consulta2->fetch_all();	

        return $linha2;
    }

    function selecionarGuiaEspecifico($con, $idG){
        $sql = "SELECT * FROM guias WHERE idGuia = '$idG'";
        $consulta = $con->query($sql);
        $linha2 = $consulta->fetch_all();

        return $linha2;
    }

    function consultaUsuarios($con){
        $sql = "SELECT * FROM pessoa";
        $consulta = $con->query($sql);
        $linha = $consulta->fetch_all();
    }

    function contaCurtidasGuias($con){
        $sql = "SELECT COUNT(curtidaGuia)  AS SomaGuia, idGuia AS ID FROM curtidas GROUP BY IdGuia ORDER BY SomaGuia DESC LIMIT 10";
        $consulta = $con->query($sql);
        $linha = $consulta->fetch_all();  
    }

    function imprimeDezGuiasRanking($con){
        for($i = 0; $i < 10; $i++){
                                    
            $b = $linha[$i][1];

            $sql2 = "SELECT * FROM guias WHERE idGuia = $b";
            $consulta2 = $con->query($sql2);
            $linha2 = $consulta2->fetch_array();

            $titulo = $linha2['tituloGuia'];
        
            echo '<tr class="text-center">'.'<td>' . $titulo .'</td>'.'<td>'. $linha[$i][0] .'</td>'.'</tr>';                
        } 
    }

    function perfil($resposta){
        if(isset($resposta)){
            echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>Sucesso</strong> O guia foi atualizado com sucesso!.
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>";
        }
    }

    function selecionarTodosOsGuias($con){
        $sql = "SELECT * FROM guias";
        $consulta = $con->query($sql);
        $linha2 = $consulta->fetch_all();

        return $linha2;

    }



?>