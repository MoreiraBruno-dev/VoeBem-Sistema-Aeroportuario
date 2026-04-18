<?php
	switch ($_REQUEST['acao']) {
		case "cadastrar":
			$nome = $_POST['nome_passageiro'];
            $cpf = $_POST['cpf_passageiro'];
			$email = $_POST['email_passageiro'];
			$telefone = $_POST['telefone_passageiro'];
            $endereco = $_POST['endereco_passageiro'];
            $dt_nasc = $_POST['dt_nasc_passageiro'];

			$sql = "INSERT INTO passageiro (nome_passageiro, cpf_passageiro, telefone_passageiro, email_passageiro, endereco_passageiro, dt_nasc_passageiro) VALUES ('{$nome}', '{$cpf}', '{$email}', 
			'{$telefone}', '{$endereco}', '{$dt_nasc}')";
			
   			$res = $conn->query($sql);

   			if ($res == true) {
   				print "<script>alert('Cadastrou com sucesso');</script>";
   				print "<script>location.href='?page=listar-passageiro';</script>";
   			}else{
   				print "<script>alert('Não cadastrou');</script>";
   				print "<script>location.href='?page=listar-passageiro';</script>";
   			}
			break;
	case 'editar':
			$nome = $_POST['nome_passageiro'];
            $cpf = $_POST['cpf_passageiro'];
			$email = $_POST['email_passageiro'];
			$telefone = $_POST['telefone_passageiro'];
            $endereco = $_POST['endereco_passageiro'];
            $dt_nasc = $_POST['$dt_nasc_passageiro'];

            $sql = "UPDATE passageiro SET nome_passageiro='{$nome}', cpf_passageiro= '{$cpf}', email_passageiro='{$email}',telefone_passageiro='{$telefone}', endereco_passageiro='{$endereco}', 
			dt_nasc_passageiro='{$dt_nasc}' WHERE id_passageiro=".$_REQUEST['id_passageiro'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso');</script>";
                print "<script>
                        location.href='?page=listar-passageiro';
                       </script>";
            }else{
                print "<script>alert('Não editou');</script>";
                print "<script>
                        location.href='?page=listar-passageiro';
                       </script>";
            }
		
		break;
	
	case 'excluir':
		$sql = "DELETE FROM passageiro WHERE id_passageiro=".$_REQUEST['id_passageiro'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>
                        location.href='?page=listar-passageiro';
                       </script>";
            }else{
                print "<script>alert('Não excluiu');</script>";
                print "<script>
                        location.href='?page=listar-passageiro';
                       </script>";
            }
		
		break;
}