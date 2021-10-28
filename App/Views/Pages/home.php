<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 my-5">
				<div class="page-header">
					<h3>Cadastrar Usuário.</h3>
				</div>
				<div class="card my-4">
					<div class="card-header d-flex justify-content-between">
						<span class="text-dark d-flex align-self-center">Formulário de Cadastro de Usuário</span>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Informacoes">Informações</button>
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
<!-- Modal Informações -->
<div class="modal fade" id="Informacoes" tabindex="-1" role="dialog" aria-labelledby="MyModal" aria-controls="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Informações</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<span class="mb-0">Preencha os campos abaixo corretamente perante o formulário de cadastro, realizando seu cadastro como usuário(a). OBS: Caso não seja definida uma senha específica diante seu cadastro por padrão será assumida sua data de nascimento como senha padrão.</span>
				<hr>
				<div class="accordion" id="accordionInfo">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#CollapseOne">
								Visualizar um exemplo ?
							</button>
						</h2>
						<div class="accordion-collapse collapse" id="CollapseOne" aria-labelledby="headingOne" aria data-bs-parent="#accordionInfo">
							<div class="accordion-body">
								teste
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Fechar</button>
			</div>
		</div>
	</div>
</div>
<!-- Fim -->