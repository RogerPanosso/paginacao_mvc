<input type="hidden" name="id" class="form-control" value="<?=$usuario["id"];?>" id="id"/>
<div class="mb-3">
	<label for="nome_e" class="form-label">Nome</label>
	<input type="text" name="nome_e" class="form-control" value="<?=$usuario["nome"];?>" id="nome_e"/>
</div>
<div class="mb-3">
	<label for="sobrenome_e" class="form-label">Sobrenome</label>
	<input type="text" name="sobrenome_e" class="form-control" value="<?=$usuario["sobrenome"];?>" id="sobrenome_e"/>
</div>
<div class="mb-3">
	<label for="email_e" class="form-label">E-Mail</label>
	<input type="email" name="email_e" class="form-control" value="<?=$usuario["email"];?>" id="email_e"/>
</div>
<div class="mb-3">
	<label for="data_nascimento_e" class="form-label">Data de Nascimento</label>
	<?php $data_nascimento_e = new DateTime($usuario["data_nascimento"]); ?>
	<input type="datetime" name="data_nascimento" class="form-control" value="<?=$data_nascimento_e->format('d/m/Y');?>" id="data_nascimento_e"/>
</div>