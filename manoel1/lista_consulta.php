<?php
include "acessa_banco.php";

$sql = "SELECT titulo FROM tb_consulta";//clausula sql
$consulta = mysql_query($sql)or die("Falha na execução da instrução SQL!");//executa a clausula sql




while($registro = mysql_fetch_assoc($consulta)){
  echo '<p>'.$registro["usuario"].'</p>';
    }


//mysql_close($link);//fecha a conexão com o mysql
?>