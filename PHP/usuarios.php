
<?php
    include_once("BACKEND/conexao.php");
    include_once("functions.php");
    include_once("bd_functions.php");

    consultaUsuarios($con);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Usuarios</title>
	<?php include_once('../HTML/cabecalho.html');?>
</head>
<body class="corpo">
	<?php include_once('navbar.php');?>
	<div class="container">
		<span style="padding: 20px;"></span>		
		<h1 class="text-center">Lista de Usuários</h1>
		<h5 class="text-center text-muted">Veja os usuarios que fazem parte do sistema</h5>
        <div class="row">
            <div class="col-sm-12">
                <?php
                    imprimeUsuarios($linha);
                ?>
            </div>    
        </div>

	</div>	
	
	<?php include_once('../HTML/rodape.html');?>
    

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>

