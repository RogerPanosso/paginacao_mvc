<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 my-5">
				<div class="page-header">
					<h3>Usuários Cadastrados.</h3>
				</div>
				<div id="resultExclusao">
					<!--html-->
				</div>
				<div class="card my-4">
					<div class="card-header bg-primary text-light d-flex justify-content-between">
						<span>Listagem de Usuários Cadastrados</span>
						<div class="btn-group">
							<a class="btn btn-dark" href="<?=BASE_URL;?>home">Cadastrar Novo Uusuário</a>
						</div>
					</div>
					<div class="card-body">
						<?php if(!empty($usuarios)): ?>
						<div class="table-responsive">
							<table class="table table-striped table-hover table-bordered">
								<caption>Usuários</caption>
								<thead>
									<tr>
										<th scope="col">Id</th>
										<th scope="col">Nome</th>
										<th scope="col">Sobrenome</th>
										<th scope="col">E-Mail</th>
										<th scope="col">Data Nascimento</th>
										<th scope="col">Ações</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($usuarios as $usuario): $data_nascimento = new DateTime($usuario["data_nascimento"]);?>
									<tr>
										<td><?=$usuario["id"];?></td>
										<td><?=$usuario["nome"];?></td>
										<td><?=$usuario["sobrenome"];?></td>
										<td><?=$usuario["email"];?></td>
										<td><?=$data_nascimento->format("d/m/Y");?></td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-success editar" data-id="<?=$usuario["id"];?>" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
												<button type="button" class="btn btn-danger excluir" data-id="<?=$usuario["id"];?>" onclick="excluir();">Excluir</button>
											</div>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<ul class="pagination d-flex justify-content-center">
							<?php for($i = 1; $i <= $total_paginas; $i++): ?>
							<li class="page-item <?=($pagina_atual == $i)?'active':'';?>">
								<a class="page-link" href="<?=BASE_URL;?>usuarios?p=<?=$i;?>"><?=$i;?></a>
							</li>
							<?php endfor; ?>
						</ul>
						<?php else: ?>
						<div class="alert alert-warning fade show alert-dismissible" role="alert">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							Não foram encontrados nenhum registro para serem obtidos
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Modal editar -->
<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="MyModal" aria-expanded="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Editar Usuário</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div id="resultEditarMsg">
					<!--html-->
				</div>
				<form id="form_editar" method="POST">
					<div id="resultEditar">
						<!--html-->
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Salvar</button>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			</div>
			</form>
		</div>
	</div>
</div>