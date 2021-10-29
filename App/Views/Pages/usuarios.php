<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 my-5">
				<div class="page-header">
					<h3>Usuário(as) Cadastrados. <small><a href="#" data-bs-toggle="modal" data-bs-target="#Informacoes">[?]</a></small></h3>
				</div>
				<div class="card my-4">
					<div class="card-header d-flex justify-content-between">
						<span class="text-dark d-flex align-self-center">Listagem de usuário(as) cadastrados</span>
						<div class="btn-group">
							<a class="btn btn-primary" href="<?=BASE_URL;?>home">Cadastrar Novo Usuário(a)</a>
						</div>
					</div>
					<div class="card-body">
						<div class="card-text">
							<?php if(!empty($usuarios)): ?>
							<div class="table-responsive">
								<table class="table table-striped table-hover table-bordered">
									<caption>Usuário(as)</caption>
									<thead>
										<tr>
											<th scope="col">Id</th>
											<th scope="col">Nome</th>
											<th scope="col">Sobrenome</th>
											<th scope="col">E-Mail</th>
											<th scope="col">Data Nascimento</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($usuarios as $usuario): ?>
										<tr>
											<td><?=$usuario["id"];?></td>
											<td><?=$usuario["nome"];?></td>
											<td><?=$usuario["sobrenome"];?></td>
											<td><?=$usuario["email"];?></td>
											<td><?=date("d/m/Y", strtotime($usuario["data_nascimento"]));?></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<ul class="pagination d-flex justify-content-center">
									<?php for($p=1; $p<=$total_paginas; $p++): ?>
									<li class="page-item <?=($pagina_atual == $p)?'active':'';?>">
										<a class="page-link" href="<?=BASE_URL;?>usuarios?p=<?=$p;?>"><?=$p;?></a>
									</li>
									<?php endfor; ?>
								</ul>
							</div>
							<?php else: ?>
							<div class="alert alert-warning fade show alert-dismissible mb-0" role="alert">
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								Não foram encontrados nenhum registro para serem obtidos
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>