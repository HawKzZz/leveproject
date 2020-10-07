<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Users</h1>		
			<div class="btn-group mr-2">
				<a href="<?= base_url()?>users/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Cadastrar</a>
			</div>
		
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Telefone celular</th>
                    <th>CPF</th>
                    <th>Actions</th>					
				</tr>
			</thead>
			<tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['Id']?></td>
                        <td><?= $user['Nome']?></td>
                        <td><?= $user['Telefone']?></td>
                        <td><?= $user['Cpf']?></td>
                        <td>
							<a href="<?= base_url() ?>users/edit/<?= $user['Id'] ?>" class="btn btn-sm btn-warning">
								<i class="fas fa-pencil-alt"></i>								
							</a>
							<a href="Javascript:goDelete(<?= $user['Id'] ?>)" class="btn btn-sm btn-danger">
								<i class="fas fa-trash-alt"></i>								
							</a>
						</td>
                    </tr>
                <?php endforeach;?>				
			</tbody>
		</table>
	</div>
</main>

<script>

	function goDelete(id){
        var myUrl = 'users/delete/'+id
        if(confirm("Deseja realmente apagar esse registro?")){
            window.location.href = myUrl;
        }else{
            alert("Registro nao alterado");
            return false;
        }
    }

</script>
