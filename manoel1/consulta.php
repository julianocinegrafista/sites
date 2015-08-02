<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta charset="uft-8"/>
			<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
				</head>
	<body BGCOLOR="#000f00">
	 <font color="#bbbttt"><!--cor do texto-->
	<?php
// cabecalho do site
 
include "base.php";
?>

			<br size="1"color="#tttttt">
		
							<div class="box_noticia3">
					<a href=""><img src="img/muro.jpg"width=400 height=313 border=1 align="right" alt="0 foto1"> </a>
					<a href="">
					<p></p></a>
				</div> 
						
					</br>
					

							
							
							
							
							        
				<form method="POST" action="enviar_consulta.php">
					titulo:<br/>
					<input type="text" name="titulo" />
					<br/>
					email:<br/> 
					<input type="text" name="email"/></br>
                                      </br>
				
                                <textarea name="mensagem" rows=14 cols=58> </textarea></br></br>
                                 		<input name="limpar" type="reset" id="limpar"
                           value="Limpar Campos preenchidos!"/>
                                <input type="submit" value="Enviar"/></br>
					
															</br>
															
						
							
	
		
			</div>
		     <p>
				
				
			</p>
		</div>	 
	</body>			
</html>