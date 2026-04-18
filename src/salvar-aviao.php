<?php
	switch ($_REQUEST['acao']) {
		case "cadastrar":
			$nome  = $_POST['nome_aviao'];
            $cor   = $_POST['cor_aviao'];
            $ano   = $_POST['ano_aviao'];
			
            $sql = "INSERT INTO aviao (nome_aviao, cor_aviao, ano_aviao) 
            VALUES ('{$nome}', '{$cor}', {$ano})";

            $res = $conn->query($sql);
            
   			if ($res == true) {
   				print "<script>alert('Cadastrou com sucesso');</script>";
   				print "<script>location.href='?page=listar-aviao';</script>";
   			}else{
   				print "<script>alert('Não cadastrou');</script>";
   				print "<script>location.href='?page=listar-aviao';</script>";
   			}
			break;

		case 'editar':
			$nome  = $_POST['nome_aviao'];
            $cor   = $_POST['cor_aviao'];
            $ano   = $_POST['ano_aviao'];
			
			$sql = "UPDATE aviao SET nome_aviao='{$nome}', cor_aviao='{$cor}', ano_aviao='{$ano}'
			WHERE id_aviao = " .$_REQUEST['id_aviao'];

            $res = $conn->query($sql);
            
   			if ($res == true) {
   				print "<script>alert('Editou com sucesso');</script>";
   				print "<script>location.href='?page=listar-aviao';</script>";
   			}else{
   				print "<script>alert('Não Editou');</script>";
   				print "<script>location.href='?page=listar-aviao';</script>";
   			}
			break;
	
	case 'excluir':
			$sql = "DELETE FROM aviao WHERE id_aviao=".$_REQUEST['id_aviao'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>
                        location.href='?page=listar-aviao';
                       </script>";
            }else{
                print "<script>alert('Não excluiu');</script>";
                print "<script>
                        location.href='?page=listar-aviao';
                       </script>";
            }
        break;
	}
?>