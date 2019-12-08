<?php
	session_start();

	function session_exists(){
		if($_SESSION['id'] == null){
			header('Location: tela_login.php?mensagem=0');
		}
	}

	session_exists();

?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
  	<a class="navbar-brand" href="index_logado.php?resposta=0">Student's Guide</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item active">
	        	<a class="nav-link" href="index_logado.php?resposta=0">Inicio<span class="sr-only">(current)</span></a>
	      	</li>
	      	<li class="nav-item active">
	        	<a class="nav-link" href="criar_guia.php">Criar</a>
	      	</li>      	
	      	<li class="nav-item active">
	       		<a class="nav-link" href="ranking.php">Ranking</a>
	      	</li>
	      	<li class="nav-item active">
	       		<a class="nav-link" href="usuarios.php">Usuários</a>
	      	</li>				  
	      	<li class="nav-item active">
	       		<a class="nav-link" href="#" data-toggle="modal" data-target="#sobre">Sobre</a>
	      	</li>
	      	<li class="nav-item active">
	       		<a class="nav-link" href="suporte.php">Suporte</a>
	      	</li>	      		      	
		</ul>
		<span style="padding: 0.5px;"></span>
		<div class="navbar-nav ml-auto">
	    	<input class="form-inline form-control mr-sm-2 pesquisa" type="search" placeholder="Digite para pesquisar" aria-label="Search">
			
			<select required="required" class="tag form-control" name="selecao">
				<option value="sem_tag" selected="selected">Escolha</option>
				<option value="palavra">Palavra Chave</option>
				<option value="filtro">Filtro de Inteligências</option>
			</select>
			<span style="padding: 6px;"></span>
	    	<button  class="botaoPesquisa btn btn-outline-light pesquisa" type="submit">Pesquisar</button>
		</div>  		
		<span style="padding: 0.5px;"></span>
		<li class="test" style="list-style-type: none;">
			<ul class="test navbar-nav">
				<li class="test nav-item active dropdown">
					<a class="test align-middle nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nome']; ?><span>  </span><img style=" border-radius: 100%; width: 30px; height: 30px;" src="<?php echo $_SESSION['img']; ?>"></a>
					<div class=" test dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="navi dropdown-item" href="perfil.php">Meu Perfil</a>
						<a class="navi dropdown-item" href="sair.php">Sair</a>
					</div>
				</li>
			</ul>
		</li>
  	</div>
</nav>

<?php include_once('sobre.php');?>

<script>
	var botao = document.querySelector(".botaoPesquisa");

	botao.addEventListener("click", function(){
		var pesquisa = document.querySelector(".pesquisa").value;
		let tag = document.querySelector(".tag").value;
		window.location = "descobrir.php?pesquisa=" + pesquisa + "&tag=" + tag;	
	});
</script>