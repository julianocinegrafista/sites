<?php
// conecta no banco
   include "acessa_banco.php";
   // pega os dados do formulario e carrega em variaveis
   $titulo = trim($_POST['titulo']);
   $email = trim($_POST['email']);
   $mensagem = trim($_POST['mensagem']);

   
   
   // envia os dados do formulario, para o banco de dados
   $enviar = mysql_query("INSERT INTO tb_consulta (titulo, email, mensagem, data) VALUES ('$titulo','$email', '$mensagem', now())");
    if ($enviar){
		// se for enviado com sucesso ao banco, sera redirecionado para a pagina inicial
	    echo '<meta http-equiv="refresh" content="0;url=index.php">';
		}else{
			// se caso der erro, ira denovo para a pagina de consulta
		    echo 'erro ao enviar';
			echo '<meta http-equiv="refresh" content="0;url=consulta.php">';
			}
?>