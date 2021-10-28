<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 my-5">
				<div class="page-header">
					<h3>Cadastrar Usuário.</h3>
				</div>
				<div id="resultCadastro">
					<!--html retornado diante requisição-->
				</div>
				<div class="card my-4">
					<div class="card-header d-flex justify-content-between">
						<span class="text-dark d-flex align-self-center">Formulário de Cadastro de Usuário</span>
						<div class="btn-group">
							<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Informacoes">Informações</button>
							<a class="btn btn-primary" href="<?=BASE_URL;?>usuarios">Visualizar Usuários</a>
						</div>
					</div>
					<div class="card-body">
						<div class="card-text">
							<form id="formCadastroUser" method="POST">
								<div class="mb-3">
									<label for="nome" class="form-label">Nome</label>
									<input type="text" name="nome" class="form-control" autocomplete="off" autofocus placeholder="Nome" id="nome"/>
								</div>
								<div class="mb-3">
									<label for="sobrenome" class="form-label">Sobrenome</label>
									<input type="text" name="sobrenome" class="form-control" autocomplete="off" placeholder="Sobrenome" id="sobrenome"/>
								</div>
								<div class="mb-3">
									<label for="email" class="form-label">E-Mail</label>
									<input type="email" name="email" class="form-control" autocomplete="off" placeholder="exemplo@hotmail.com" id="email"/>
								</div>
								<div class="mb-3">
									<label for="senha" class="form-label">Senha</label>
									<input type="password" name="senha" class="form-control" autocomplete="off" placeholder="Senha" id="senha"/>
								</div>
								<div class="mb-3">
									<label for="data_nascimento" class="form-label">Data de Nascimento</label>
									<input type="date" name="data_nascimento" class="form-control" autocomplete="off" id="data_nascimento"/>
								</div>
								<button type="submit" class="btn btn-success">Cadastrar</button>
								<button type="reset" class="btn btn-danger">Cancelar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Modal informações -->
<div class="modal fade" id="Informacoes" tabindex="-1" role="dialog" aria-labelledby="MyModal" aria-expanded="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Informações</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				Preencha os campos abaixo corretamente realizando o cadastro de usuário(a) perante o formulário. Obs: Caso não seja definida uma senha específica diante o cadastro, por padrão será assumida a data de nascimento cadastrada.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
<!-- Fim -->