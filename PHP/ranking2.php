<?php 

    include_once("BACKEND/conexao.php");

    $sql = "SELECT COUNT(curtidaGuia)  AS SomaGuia, idGuia AS ID FROM curtidas GROUP BY IdGuia ORDER BY SomaGuia DESC LIMIT 10";
    $consulta = $con->query($sql);
    $linha = $consulta->fetch_all();  

    /*
    SELECT COUNT(curtidaGuia)  AS SomaGuia, idGuia AS ID
    FROM curtidas 
    GROUP BY IdGuia
    ORDER BY SomaGuia DESC
    LIMIT 10;
    */

    //Fazer uma página para ver o guia quando clicar no nome

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Ranking</title>
    <?php include_once('../HTML/cabecalho.html');?>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body class="corpo">
    <?php include_once('navbar2.php');?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span style="padding: 20px;"></span>    
                <div class="text-center ">
                    <h1 >Ranking</h1>
                    <div>
                        <table class="table">
                            <thead class="tabela">
                                <tr class="text-center">
                                    <th scope="col">Guia</th>
                                    <th scope="col">Curtidas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for($i = 0; $i < 10; $i++){
                                    
                                    $b = $linha[$i][1];

                                    $sql2 = "SELECT * FROM guias WHERE idGuia = $b";
                                    $consulta2 = $con->query($sql2);
                                    $linha2 = $consulta2->fetch_array();

                                    $titulo = $linha2['tituloGuia'];
                                
                                    /*
                                    Ordem do vetor linha
                                        00 ID Guia
                                        01 ID Autor
                                        02 Conteudo Guia
                                        03 Autor
                                        04 Titulo Guia
                                        05 Tag
                                    */

                                    echo '<tr class="text-center">'.'<td>' . $titulo .'</td>'.'<td>'. $linha[$i][0] .'</td>'.'</tr>';                
                                }               

                                ?>
                            </tbody>
                        </table>
                    </div>  
                </div>  
            </div>
        </div>
    </div>

    <?php include_once('../HTML/rodape.html');?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</body>
</html>


























