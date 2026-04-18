<h1>Listar Aviões</h1>
   <?php
    $sql = "SELECT * FROM aviao";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultados(s)</p>";
        print "<table class='table table-bordred table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Cor</th>";
        print "<th>Ano</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_aviao."</td>";
            print "<td>".$row->nome_aviao."</td>";
            print "<td>".$row->cor_aviao."</td>";
            print "<td>".$row->ano_aviao."</td>";
            print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-aviao&id_aviao={$row->id_aviao}';\">
            Editar</button>

        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){
            location.href='?page=salvar-aviao&acao=excluir&id_aviao={$row->id_aviao}';
        }else{false;}\">
            Excluir</button>
      </tr>";
print "</tr>";
            }
            print "</table>";
    }else{
        print "<p>Não encontrou resultados</p>";
    }