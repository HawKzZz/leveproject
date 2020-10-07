<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Home</h1>			
	</div>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Lista dos Usuarios</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Telefone celular</th>
                    <th>CPF</th>                    					
				</tr>
			</thead>
			<tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['Id']?></td>
                        <td><?= $user['Nome']?></td>
                        <td><?= $user['Telefone']?></td>
                        <td><?= $user['Cpf']?></td>                        
                    </tr>
                <?php endforeach;?>
			</tbody>
		</table>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Lista dos Cursos</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Matrícula</th>					
					<th>Nome</th>															
				</tr>
			</thead>
			<tbody>
			<?php foreach ($cursos as $curso) : ?>
                    <tr>
                        <td><?= $curso['Matricula']?></td>
                        <td><?= $curso['Nome']?></td>                                             
                    </tr>
                <?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>
