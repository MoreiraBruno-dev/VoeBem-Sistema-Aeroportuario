<h1>Cadastrar Viagens</h1>
<form action="?page=salvar-viagem" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Local de Partida
            <input type="text" name="partida_viagem" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Local de Destino
            <input type="text" name="destino_viagem" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Data de Partida
            <input type="date" name="data_viagem" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Valor R$
            <input type="number" name="valor_viagem" step="0.01" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Passageiro
            <select name="passageiro_id_passageiro" class="form-control" required>
                <option>-= Escolha =-</option>
                <?php
                    $sql = "SELECT * FROM passageiro";
                    $res = $conn->query($sql);
                    $qtd = $res->num_rows;
                    if($qtd> 0){
                        while($row = $res->fetch_object()){
                            print "<option value='{$row->id_passageiro}'>
                                {$row->nome_passageiro}</option>";
                    }
                    }else{
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
                    $sql = "SELECT * FROM funcionario";
                    $res = $conn->query($sql);
                    $qtd = $res->num_rows;
                    if($qtd> 0){
                        while($row = $res->fetch_object()){
                            print "<option value='{$row->id_funcionario}'>
                                {$row->nome_funcionario}</option>";
                    }
                    }else{
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
                    $sql = "SELECT * FROM aviao";
                    $res = $conn->query($sql);
                    $qtd = $res->num_rows;
                    if($qtd> 0){
                        while($row = $res->fetch_object()){
                            print "<option value='{$row->id_aviao}'>
                                {$row->nome_aviao}</option>";
                    }
                    }else{
                        print "<option>Não há aviões registrados</option>";
                    }
                    ?>
            </select>
        </label>
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </form>