<h1>Listar Passageiros</h1>
<?php
    $sql = "SELECT * FROM passageiro";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultados(s)</p>";
        print "<table class='table table-bordred table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>CPF</th>";
        print "<th>E-mail</th>";
        print "<th>Telefone</th>";
        print "<th>Endereço</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_passageiro."</td>";
            print "<td>".$row->nome_passageiro."</td>";
            print "<td>".$row->cpf_passageiro."</td>";
            print "<td>".$row->email_passageiro."</td>";
            print "<td>".$row->telefone_passageiro."</td>";
            print "<td>".$row->endereco_passageiro."</td>";
            print "<td>".$row->dt_nasc_passageiro."</td>";
            print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-passageiro&id_passageiro={$row->id_passageiro}';\">
            Editar</button>

        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){
            location.href='?page=salvar-passageiro&acao=excluir&id_passageiro={$row->id_passageiro}';
        }else{false;}\">
            Excluir</button>
      </tr>";
print "</tr>";
            }
            print "</table>";
    }else{
        print "<p>Não encontrou resultados</p>";
    }