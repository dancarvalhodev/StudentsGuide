export function validarECriarGuia(){
    var botao = document.querySelector(".botao");
            let paragrafo = document.querySelector(".paragrafo");
            let titulo = document.querySelector(".titulo");
            let sublinhado = document.querySelector(".sublinhado");
            let subTitulo = document.querySelector(".subTitulo");
            let subTituloMenor = document.querySelector(".subTituloMenor");
            let negrito = document.querySelector(".negrito");
            let italico = document.querySelector(".italico");
            let imagem = document.querySelector(".imagem");
            let video = document.querySelector(".video");
            let musica = document.querySelector(".musica");
            
            let s = document.querySelector("#cont");
            
            paragrafo.addEventListener("click", function(){
                s.value += "<p></p>"
            });	

            titulo.addEventListener("click", function(){
                s.value += "<h1></h1>"
            });

            subTitulo.addEventListener("click", function(){
                s.value += "<h2></h2>"
            });

            sublinhado.addEventListener("click", function(){
                s.value += "<u></u>"
            });

            subTituloMenor.addEventListener("click", function(){
                s.value += "<h3></h3>"
            });	

            negrito.addEventListener("click", function(){
                s.value += "<b></b>"
            });

            italico.addEventListener("click", function(){
                s.value += "<em></em>"
            });

            imagem.addEventListener("click", function(){
                s.value += '<img src=""></img>';
            });

            video.addEventListener("click", function(){
                s.value += '<iframe src=""></iframe>';
            });

            musica.addEventListener("click", function(){
                s.value += '<iframe src=""></iframe>';
            });

            botao.addEventListener("click", function(){
                var titulo = document.getElementById("myText").value;
                var tag = document.getElementById("mySelect").value;

                if(titulo == ""){
                    alert("Por favor insira um titulo!");
                }
                else{
                    let conteudo = s.value;
                    var tam = conteudo.length -1;

                    var div = document.querySelector(".oi");
                    div.innerHTML = tam + " caracteres.";

                    window.location = "BACKEND/processaGuia.php?texto=" + conteudo + "&titulo=" + titulo + "&tag=" + tag;					
                }
            });
    };        

    export function curtirGuia(){
        let likes = document.querySelectorAll(".like");

	    likes.forEach(function(like){
			like.addEventListener("click", function(){
				let cardTeste = this.parentElement.children;
				let idProBack = cardTeste[1].innerHTML;
				let idPessoaProBack = <?php echo $_SESSION['id']; ?>;			
				window.location = "BACKEND/curtidasGuia.php?idGuia=" + idProBack + "&idPessoa=" + idPessoaProBack;
			});
	    }); 		
    }

    