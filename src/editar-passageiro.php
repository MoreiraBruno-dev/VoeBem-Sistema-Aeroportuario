<h1>Editar Paassageiros</h1>
<?php
    $sql = "SELECT * FROM passageiro WHERE id_passageiro =" . $_REQUEST["id_passageiro"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-passageiro" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_passageiro" value="<?php print $row->id_passageiro; ?>">

    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_passageiro" class="form-control"
                   value="<?php print $row->nome_passageiro; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>CPF
            <input type="text" name="cpf_passageiro" class="form-control"
                   value="<?php print $row->cpf_passageiro; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_passageiro" class="form-control"
                   value="<?php print $row->email_passageiro; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Telefone
            <input type="text" name="telefone_passageiro" class="form-control"
                   value="<?php print $row->telefone_passageiro; ?>">
        </label>
    </div>

     <div class="mb-3">
        <label>Endereço
            <input type="text" name="endereco_passageiro" class="form-control"
                   value="<?php print $row->endereco_passageiro; ?>">
        </label>
    </div>

     <div class="mb-3">
        <label>Data de Nascimento
            <input type="date" name="$dt_nasc_passageiro" class="form-control"
                   value="<?php print $row->dt_nasc_passageiro; ?>">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>