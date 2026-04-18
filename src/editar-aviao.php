<h1>Editar Aviões</h1>
<?php
    $sql = "SELECT * FROM aviao WHERE id_aviao =" . $_REQUEST["id_aviao"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-aviao" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_aviao" value="<?php print $row->id_aviao; ?>">

    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_aviao" class="form-control"
                   value="<?php print $row->nome_aviao; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Cor
            <input type="text" name="cor_aviao" class="form-control"
                   value="<?php print $row->cor_aviao; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Ano
            <input type="number" name="ano_aviao" class="form-control"
                   value="<?php print $row->ano_aviao; ?>">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>