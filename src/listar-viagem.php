<h1>Listar Viagens</h1>
<?php
    $sql = "SELECT ve.id_viagem, ve.partida_viagem, ve.destino_viagem, ve.data_viagem, ve.valor_viagem, cli.nome_passageiro, fun.nome_funcionario, mo.nome_aviao
            FROM viagem AS ve
            INNER JOIN passageiro AS cli
            ON cli.id_passageiro = ve.passageiro_id_passageiro
            INNER JOIN funcionario AS fun
            ON fun.id_funcionario = ve.funcionario_id_funcionario
            INNER JOIN aviao AS mo
            ON mo.id_aviao = ve.aviao_id_aviao";
            
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultados(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Local de Partida</th>";
        print "<th>Local de Destino</th>";
        print "<th>Data de Partida</th>";
        print "<th>Valor R$</th>";
        print "<th>Passageiro</th>";
        print "<th>Funcionário</th>";
        print "<th>Avião</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>{$row->id_viagem}</td>";
            print "<td>{$row->partida_viagem}</td>";
            print "<td>{$row->destino_viagem}</td>";
            print "<td>{$row->data_viagem}</td>";
            print "<td>{$row->valor_viagem}</td>";
            print "<td>{$row->nome_passageiro}</td>";
            print "<td>{$row->nome_funcionario}</td>";
            print "<td>{$row->nome_aviao}</td>";
            print "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=editar-viagem&id_viagem={$row->id_viagem}';\">
            Editar</button>

        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){
            location.href='?page=salvar-viagem&acao=excluir&id_viagem={$row->id_viagem}';
        }else{false;}\">
            Excluir</button>
      </tr>";
print "</tr>";
            }
            print "</table>";
    }else{
        print "<p>Não encontrou resultados</p>";
    }