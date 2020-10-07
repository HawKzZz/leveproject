<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastro</h1>        
      </div>
			<div class="col-md-12">
				<?php if(isset($user)) : ?>
					<form action="<?= base_url() ?>users/update/<?=$user['Id']?>" method="post" name="myForm" onsubmit="return validateForm()">
				<?php else : ?>
					<form action="<?= base_url() ?>users/store" method="post" name="myForm" onsubmit="return validateForm()">
				<?php endif; ?>
					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome Completo</label>
							<input type="text" class="form-control" name="nome" id="nomeid" placeholder="Ex.: Matheus Souza" require value="<?= isset($user) ? $user["Nome"] : "" ?>">
						</div>
					</div>		

					<div class="form-group">
						<label class="col-md-2 control-label" for="telefone">Telefone</label>
						<div class="col-md-2">
							<div class="input-control">								
								<input id="telefoneId" name="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX"
								  value="<?= isset($user) ? $user["Telefone"] : "" ?>" type="text" maxlength="15" title="apenas numeros" require > 									
							</div>
						</div>
					</div>
					

					<div class="col-md-6">
						<div class="form-group">
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" name="cpf" id="cpfId" placeholder="Ex.: 111.111.111-11" require value="<?= isset($user) ? $user["Cpf"] : "" ?>">
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
							<a href="<?= base_url()?>users" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
						</div>
					</div>
				</form>			
			</div>
	</main>  
	<div><?php include('application\views\script\validacao.php')?></div>
	
