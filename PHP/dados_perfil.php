<div class="modal fade" id="dados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Alterar Perfil</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<form method="POST" action="BACKEND/update.php" enctype="multipart/form-data">
							<div class="form-group">
								<input class="form-control" required="required" type="text" placeholder="Novo Nome" name="nomePerfil" value="<?php echo $_SESSION['nome'];?>">
							</div>
							<div class="form-group">
								<input class="form-control" required="required" type="text" placeholder="Nova Frase" name="bioPerfil" value="<?php echo $_SESSION['frase'];?>">
							</div>
							<div class="form-group">
								<input class="form-control" required="required"  type="password" placeholder="Nova Senha" name="senhaPerfil" value="<?php echo $_SESSION['senha'];?>">
							</div>
							<p>Escolha uma foto de perfil (caso queira alterar): </p>
							<div class="form-group">
								<input class="form-control" type="file" name="arquivo" id="fileToUpload">
							</div>
							<div class="form-group">
								<input type="submit" class="btn" id="botaoEnviar" name="enviarPerfil" value="Alterar">
							</div>                
						</form>
					</div>
					<div class="col-sm-12">
						<div class="form-group"><a class="btn btn-danger" href="BACKEND/delete.php">Excluir Conta</a></div>
					</div>            
				</div>
			</div>
		</div>
	</div>
</div>

