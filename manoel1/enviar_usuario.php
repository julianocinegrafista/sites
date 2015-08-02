<?php
// conecta no banco
   include "acessa_banco.php";
   // pega os dados do formulario e carrega em variaveis
   $nome = trim($_POST['nome']);
   $email = trim($_POST['email']);
   $sexo = trim($_POST['sexo']);
   $telefone = trim($_POST['telefone']);
   $endereco = trim($_POST['endereco']);
   $cidade = trim($_POST['cidade']);
   $estado = trim($_POST['estado']);
   $bairro = trim($_POST['bairro']);
   $login = trim($_POST['login']);
   $senha = trim($_POST['senha']);
     
   
   // envia os dados do formulario, para o banco de dados
  $enviar = mysql_query("INSERT INTO usuario (nome, email,sexo, telefone, endereco, cidade, estado, bairro, login, senha, data, tipo_usuario, ativado) VALUES ('$nome','$email','$sexo', '$telefone', '$endereco', '$cidade', '$estado', '$bairro', '$login', '$senha', NOW(), 3, '1')");
  
  if ($enviar){
		// se for enviado com sucesso ao banco, sera redirecionado para a pagina inicial
	    echo '<meta http-equiv="refresh" content="0;url=index.php">';
		//echo 'sucesso ao enviar';
		}else{
			// se caso der erro, ira denovo para a pagina de consulta
		    //echo 'erro ao enviar';
			echo '<meta http-equiv="refresh" content="0;url=cadastro.php">';
			}
?>