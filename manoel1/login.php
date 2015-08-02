
	
	<?php
// cabecalho do site
 
include "base.php";
?>
<div class="box_noticia">

	<br/><br/><h2>Para acessar este conteudo, você precisa realizar o login no site!</h2><br/><br/>
	<form method="POST" action="fazer_login.php">
	      <label>Usuario:</label><input type="text" name="login" id="login"><br><br><br/>
	      <label>Senha:</label><input type="password" name="senha" id="senha"><br>    <br><br/>
	      <input type="submit" value="entrar" id="entrar" name="entrar"><br><br/>
	      
	</form>
</div>
<div class="box_noticia">
		<h4> se não tem login, <a href="cadastro.php">Cadastre-se</a></h4><br/>
</div>
<div class="clear"> </div>
      </div>
      </div>
 <div class="rodape">
      <p>Site Espirita</br>Todos Direitos Reservados</p>
</div>
	</body>
</html>	   
