<h1>Cadastrar Aviões</h1>
<form action="?page=salvar-aviao" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Avião
			<input type="text" name="nome_aviao" class="form-control">
		</label>
	</div>
    <div class="mb-3">
		<label>Cor
			<input type="text" name="cor_aviao" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Ano
		<input type="number" name="ano_aviao" class="form-control"> 
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>