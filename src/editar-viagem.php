<h1>Editar Viagens</h1>
<?php
$sql = "SELECT * FROM viagem WHERE id_viagem = " . $_REQUEST["id_viagem"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar-viagem" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_viagem" value="<?php print $row->id_viagem; ?>">

    <div class="mb-3">
        <label>Local de Partida
            <input type="text" name="partida_viagem" class="form-control"
                   value="<?php print $row->partida_viagem; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Local de Destino
            <input type="text" name="destino_viagem" class="form-control"
                   value="<?php print $row->destino_viagem; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Data de Partida
            <input type="date" name="data_viagem" class="form-control"
                   value="<?php print $row->data_viagem; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Valor R$
            <input type="number" name="valor_viagem" step="0.01" class="form-control"
                   value="<?php print $row->valor_viagem; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Passageiro
            <select name="passageiro_id_passageiro" class="form-control" required>
                <option>-= Escolha =-</option>
                <?php
                    $sql_2 = "SELECT * FROM passageiro";
                    $res_2 = $conn->query($sql_2);

                    if ($res_2->num_rows > 0) {
                        while ($cli = $res_2->fetch_object()) {
                            if ($row->passageiro_id_passageiro == $cli->id_passageiro) {
                                print "<option value='{$cli->id_passageiro}' selected>
                                        {$cli->nome_passageiro}
                                      </option>";
                            } else {
                                print "<option value='{$cli->id_passageiro}'>
                                        {$cli->nome_passageiro}
                                      </option>";
                            }
                        }
                    } else {
                        print "<option>Não há passageiros registrados</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Funcionário
            <select name="funcionario_id_funcionario" class="form-control" required>
                <option>-= Escolha =-</option>
                <?php
                    $sql_3 = "SELECT * FROM funcionario";
                    $res_3 = $conn->query($sql_3);

                    if ($res_3->num_rows > 0) {
                        while ($fun = $res_3->fetch_object()) {
                            if ($row->funcionario_id_funcionario == $fun->id_funcionario) {
                                print "<option value='{$fun->id_funcionario}' selected>
                                        {$fun->nome_funcionario}
                                      </option>";
                            } else {
                                print "<option value='{$fun->id_funcionario}'>
                                        {$fun->nome_funcionario}
                                      </option>";
                            }
                        }
                    } else {
                        print "<option>Não há funcionários registrados</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Avião
            <select name="aviao_id_aviao" class="form-control" required>
                <option>-= Escolha =-</option>
                <?php
                    $sql_4 = "SELECT * FROM aviao";
                    $res_4 = $conn->query($sql_4);

                    if ($res_4->num_rows > 0) {
                        while ($mod = $res_4->fetch_object()) {
                            if ($row->aviao_id_aviao == $mod->id_aviao) {
                                print "<option value='{$mod->id_aviao}' selected>
                                        {$mod->nome_aviao}
                                      </option>";
                            } else {
                                print "<option value='{$mod->id_aviao}'>
                                        {$mod->nome_aviao}
                                      </option>";
                            }
                        }
                    } else {
                        print "<option>Não há aviaos registrados</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>