<h1>Cadastrar Passageiros</h1>
<form action="?page=salvar-passageiro" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_passageiro" class="form-control">
		</label>
	</div>
    <div class="mb-3">
		<label>CPF
			<input type="text" name="cpf_passageiro" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>E-mail
		<input type="email" name="email_passageiro" class="form-control"> 
		</label>
	</div>
	<div class="mb-3">
		<label>Telefone
		<input type="text" name="telefone_passageiro" class="form-control"> 
		</label>
	</div>
    <div class="mb-3">
		<label>Endereço
		<input type="text" name="endereco_passageiro" class="form-control"> 
		</label>
	</div>
    <div class="mb-3">
		<label>Data de Nascimento
		<input type="date" name="dt_nasc_passageiro" class="form-control"> 
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>