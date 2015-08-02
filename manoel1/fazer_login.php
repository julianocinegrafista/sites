  <?php
  include "acessa_banco.php";

  session_start(); // Inicia a session



  $login = $_POST['login'];
  $senha = $_POST['senha'];

	if ((!$login) || (!$senha)){

	    echo "Por favor, todos campos devem ser preenchidos! <br /><br />";

	    include "login.php";

	}else{

	// $senha = md5($senha);

	$consulta = mysql_query("SELECT * FROM usuario WHERE login='{$login}' AND senha='{$senha}' AND ativado='1'");

	$login_check = mysql_num_rows($consulta);

	    if ($login_check > 0){

	      while ($row = mysql_fetch_array($consulta)){

	      foreach ($row AS $key => $val){

	      $$key = stripslashes( $val );

	}

	      $_SESSION['id'] = $id;
	      $_SESSION['login'] = $login;	      
	      $_SESSION['tipo_usuario'] = $tipo_usuario;

	  
	      
	      if ($_SESSION['tipo_usuario'] == 1){

		  echo "- <strong>Forum</strong><br />Administração -
		  Acesso total <br /><br />";
		  header("Location: admin.php");

	      } elseif ( $_SESSION['tipo_usuario'] == 2 ) {
		   echo "- <strong>Forum</strong><br />Administração -
		  Acesso total <br /><br />";		  
		  header("Location: ver_consulta.php");
		  
	      } elseif ( $_SESSION['tipo_usuario'] == 3 ) {
		   echo "- <strong>Forum</strong><br />Administração -
		  Acesso total <br /><br />";
		  header("Location: consulta.php");	      
	      }

	  

	}

	}else{

	    echo "Você não pode logar-se! Este usuário e/ou senha não são válidos!<br />
	    Por favor tente novamente!<br />";

	    include "login.php";

	}

	}

  ?>