<?php
    function cadastro($retorno){
        if(isset($retorno)){
            echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>Caro usuário!</strong> Email já cadastrado.
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>";
        }
    }

    function criar_guia($resposta){
        if(isset($resposta)){
            echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>Sucesso</strong> O guia foi salvo com sucesso!.
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>";
        }
    }

    function imprimeGuiasDescobrir($linha){
        function loop($linha){
            for($i = 0; $i < (sizeof($linha)); $i++){
                $t = "<div class='md-4'><div class='card'>";
                $t .= "<h5 class='card-header text-center text-light' id='navbar'>".$linha[$i][4]."</h5>";
                $t .= "<div class='card-body'><h5 class='card-title text-center text-muted'>Autor:".$linha[$i][3]."</h5>";
                $t .= "<p class='card-text'><span style='display: none; padding: 5px;'>". $linha[$i][0] . "</span>";	
                $t .= "<div class='text-center'>".$linha[$i][2]."</div>";
                $t .= "<div class='text-center'>". substr($linha[$i][2], 0, 50)."</div>";
                $t .= "<div class='like text-center'><button class='btn leia' id='botaoEnviar'><a style='color: white;' href='visualizaGuia.php?id=".$linha[$i][0]. "'>Leia Mais</a></button></div>";	
                $t .= "</p></div></div></div><hr>";
            
                echo $t;
            }
        }
    }

	function imprimeGuia($linha2){
		for($i = 0; $i < (sizeof($linha2)); $i++){
			$t = "<div class='mb-4'><div class='card'>";
			$t .= "<h5 class='card-header text-center text-light' id='navbar'>".$linha2[$i][4]."</h5>";
			$t .= "<div class='card-body'><h5 class='card-title text-center text-muted'>Autor:".$linha2[$i][3]."</h5>";
			$t .= "<p class='card-text'><span style='display: none; padding: 5px;'>". $linha2[$i][0] . "</span>";	
			$t .= "<div class='text-center'>".$linha2[$i][2]."</div>";
			$t .= "<div class='like text-center'><button type='button' class='btn'id='botaoEnviar'>Gostei</button></div>";	
			$t .= "</p></div></div></div><hr>";
		
			echo $t;
		}
	}

  function imprimeUsuarios($linha){
    for($i = 0; $i < (sizeof($linha)); $i++){
        echo "
            <form method='POST' action='visualizaPerfilUsuario.php'>
                <div class='form-group'>
                    <input style='display: none;' readonly='readonly' name='campo' value='" .  $linha[$i][0] . "'>
                </div>
                <div class='form-group text-center'>
                    <input class='btn botaoUsu' style='background-color: transparent;' type='submit' value='" . $linha[$i][1] . "'>
                </div>    
            </form>
        ";
    }    
}

  function tela_login($resposta){
    if(isset($resposta)){
      if($resposta == 0){
  
      }
  
      else if($resposta == 1){
  
        echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Sucesso</strong> A senha foi alterada!.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";	
      }
      else if($resposta == 2){
  
      echo "
          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Caro usuário!</strong> Email ou senha incorretas, por favor verifique!.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
      }	
    }	
  }

  function suporte($resposta){
    if(isset($resposta)){
      echo "
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Sucesso</strong> A mensagem foi enviada com sucesso, entraremos em contato o mais rápido possivel!.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
    }
  }

  function recuperaSenha($erro){
    if(isset($erro)){
      echo "
          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Caro usuário!</strong> Os emails não conferem, por favor verifique!.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
    }
  }

  function avaliar_guias($resposta){
    if(isset($resposta)){
      if($resposta == 0){
  
      }
  
      else if($resposta == 1){
  
        echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Sucesso</strong> O guia foi curtido com sucesso!.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";	
      }
      else if($resposta == 2){
  
      echo "
          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Erro</strong> Falha ao curtir o guia!.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
      }	
      else if($resposta == 3){
  
      echo "
          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Erro</strong> O usuário ja curtiu o guia.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
      }	
    }
  }

?>