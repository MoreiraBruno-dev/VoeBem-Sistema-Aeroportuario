<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
            $partida     = $_POST['partida_viagem'];
            $destino     = $_POST['destino_viagem'];
            $data        = $_POST['data_viagem'];
            $valor       = $_POST['valor_viagem'];
            $passageiro  = $_POST['passageiro_id_passageiro'];
            $funcionario = $_POST['funcionario_id_funcionario'];
            $aviao       = $_POST['aviao_id_aviao'];
			
            $sql = "INSERT INTO viagem (partida_viagem, destino_viagem, data_viagem, valor_viagem, passageiro_id_passageiro, funcionario_id_funcionario, aviao_id_aviao) 
            VALUES ('{$partida}', '{$destino}', '{$data}', '{$valor}', '{$passageiro}', '{$funcionario}', {$aviao})";

            $res = $conn->query($sql);
            
   			if ($res == true) {
   				print "<script>alert('Cadastrou com sucesso');</script>";
   				print "<script>location.href='?page=listar-viagem';</script>";
   			}else{
   				print "<script>alert('Não cadastrou');</script>";
   				print "<script>location.href='?page=listar-viagem';</script>";
   			}
			break;

		case 'editar':
			$partida     = $_POST['partida_viagem'];
            $destino     = $_POST['destino_viagem'];
            $data        = $_POST['data_viagem'];
            $valor       = $_POST['valor_viagem'];
            $passageiro  = $_POST['passageiro_id_passageiro'];
            $funcionario = $_POST['funcionario_id_funcionario'];
            $aviao       = $_POST['aviao_id_aviao'];
			
			$sql = "UPDATE viagem SET partida_viagem='{$partida}', destino_viagem='{$destino}', data_viagem='{$data}', valor_viagem='{$valor}', passageiro_id_passageiro='{$passageiro}',
             funcionario_id_funcionario='{$funcionario}', aviao_id_aviao={$aviao}
			WHERE id_viagem = " .$_REQUEST['id_viagem'];

            $res = $conn->query($sql);
            
   			if ($res == true) {
   				print "<script>alert('Editou com sucesso');</script>";
   				print "<script>location.href='?page=listar-viagem';</script>";
   			}else{
   				print "<script>alert('Não Editou');</script>";
   				print "<script>location.href='?page=listar-viagem';</script>";
   			}
			break;
	
	case 'excluir':
			$sql = "DELETE FROM viagem WHERE id_viagem=".$_REQUEST['id_viagem'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>
                        location.href='?page=listar-viagem';
                       </script>";
            }else{
                print "<script>alert('Não excluiu');</script>";
                print "<script>
                        location.href='?page=listar-viagem';
                       </script>";
            }
        break;
	}
?>