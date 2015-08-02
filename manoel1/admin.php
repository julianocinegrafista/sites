<?php 
	session_start();
	if (!isset($_SESSION['login'])){
		  header("Location: login.php");
		
		
	}

?>

	
	<?php
// cabecalho do site
 
include "base.php";
?>

		


<div class="box_noticia">
	<h2>Administracao do site | <a href="sair.php">Sair</a></h2>
	


 <?php
 

?>
<?php

// definições de host, database, usuário e senha
$host = "localhost";
$db   = "espirita";
$user = "root";
$pass = "";
// conecta ao banco de dados
$consulta = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $consulta);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT id, email, titulo, mensagem FROM `espirita`.`tb_consulta`");
// executa a query
$dados = mysql_query($query, $consulta) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

	<table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" width="60%">
 
		<tr>
		 
			 <td>Titulo</td>
			   
			  <td>Mensagem</td>
			   
			 <td>E-mail</td>
		 
		</tr>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
	
		  <tr>
  
			<td><ul><a href='ver.php?id=<?=$linha['id']?>' target='_blanck'><?=$linha['titulo']?><a/></td>
			
			<td><?=$linha['mensagem']?></td>
			
			<td><?=$linha['email']?></td>
  
		</tr>
		 
			 
			 
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if 
	}
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>

</div>

	</body>
</html>	   
