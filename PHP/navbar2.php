<?php session_start(); ?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
	<a class="navbar-brand" href="/PHP/index.php">Student's Guide</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
	      	<li class="nav-item active">
	       		<a class="nav-link" href="/PHP/ranking2.php">Ranking</a>
	      	</li>  
	      	<li class="nav-item active">
	       		<a class="nav-link" href="/PHP/suporte2.php">Suporte</a>
	      	</li>  	      				
	      	<li class="nav-item active">
	       		<a class="nav-link" href="#" data-toggle="modal" data-target="#sobre">Sobre</a>
	      	</li>      	      			      	
		</ul> 	
		<div class="navbar-nav ml-auto">
			<li style="list-style-type: none;" class="nav-item active">		
				<ul class="navbar-nav">
        			<a style="border-color: white; color:white;" class="btn" href="/PHP/cadastro.php">Cadastro</a>
				</ul>				
			</li>
			<span style="padding: 3px;"></span>
			<li style="list-style-type: none;" class="nav-item active">		
				<ul class="navbar-nav">
        			<a style="border-color: white; color:white;" class="btn" href="/PHP/tela_login.php?mensagem=0">Fazer Login</a>
				</ul>				
			</li>			
		</div>	
				
  	</div>
</nav>

<?php include_once('sobre.php');?>

<script>
	var botao = document.querySelector(".botaoPesquisa");

	botao.addEventListener("click", function(){
		var tag = document.querySelector(".pesquisa").value;
		window.location = "descobrir.php?tag=" + tag;	
	});
</script>

<?php include_once('sobre.php');?>
