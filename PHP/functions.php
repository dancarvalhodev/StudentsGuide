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
                $t .= "<div class='like text-center'><button class='btn leia' id='botaoEnviar'><a style='color: white;' href='visualizaGuia.php?id=".$linha[$i][0]. "'>Leia Mais</a></button></div>";	
                $t .= "</p></div></div></div><hr>";
            
                echo $t;
            }
        }
    }







?>