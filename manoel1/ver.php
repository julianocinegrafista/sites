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
<?php
include "acessa_banco.php";
$meuid = $_GET['id'];


$sql = mysql_query("SELECT id, email, titulo, mensagem FROM `espirita`.`tb_consulta` where id='{$meuid}'" ) or trigger_error(mysql_error(),E_USER_ERROR); 

while($busca=mysql_fetch_array($sql)){


$titulo = $busca["titulo"];
$mensagem = $busca["mensagem"];
$email= $busca["email"];



echo "<table>";
echo "<tr><td witdh='500' align='center' bgcolor='#CCCCCC' valign='middle'>";
echo "<h2><b>$titulo</b></h2>";
echo "</td></tr><tr>";

echo "<td width='500' valign='top'>";
echo "<div align='justify'><font face='verdana' size=2px><b>$mensagem</b></font></div>";
echo "<p> Fim da mensagem!</p>";
echo "</td></tr><tr><td cols='6'>";
echo "<h3> Responder no email </h3>";
echo "<font face='verdana' size='5'><a href=\"mailto:$email\">$email</a></font>";
echo "</td></tr>";
echo "</table>";


}

?>
<a href="sair.php">Sair</a>
 
