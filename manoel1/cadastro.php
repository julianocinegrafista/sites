	<?php
// cabecalho do site
 
include "base.php";
?>

<script>
	<!--
	.style1 {
	color:#ff0000;
	<font-size: X-small;
	}
	.style3 {color: #0000ff; font-size: x-small;}
	</style>
	<script type="text/javascript">
	function validacampo()
	{
	if(document.cadastro.nome.value=="")
	{
	alert("o campo nome é obrigatório!");
	return false;
	}
	if(document.cadastro.email.value=="")
	{
	alert("o campo email é obrigatório!");
	return false;
	}
	else
	if(document.cadastro.endereco.value=="")
	{
	alert("o campo endereço é obrigatório!");
	return false;
	}
	else
	if(do99ment.cadastro.cidade.value=="")
	{
	alert("o campo cidade é obrigatório!");
	return false;
	}
	else
	if(document.cadastro.estado.value=="")
	{
	alert("o campo Estado é obrigatório!");
	return false;
	}
	else
	if(document.cadastro.bairro.value=="")
	{
	alert("o campo bairro é obrigatório!");
	return false;
	}
	else
	if(document.cadastro.pais.value=="")
	{
	alert("o campo pais é obrigatório!");
	return false;
	}
	else
	if(document.cadastro.login.value=="")
	{
	alert("o campo Login é obrigatório!");
	return false;
	}
	else
	if(document.cadastro.senha.value=="")
	{
	alert("Digite uma senha!");
	return false;
	}
	else
	return true;
	}
	<!--Fim do javaScript que validará os campos obrigatórios!-->
</script>
	<div class="conteudocad">
	   <font color="#fftttt"><!--cor do texto-->
	 
			<br size="1"color="#tttttt"></br>
		
							</font>
							
						
							
	</font>
			</div>
			</div>


 <div class="box_noticia5">
<form id="cadastro" name="cadastro" method="post"
action="enviar_usuario.php" onsubmit="return validaCampo();
return false;">
<table width="625" border="0">
<tr> <td width="69">Nome:</td>
<td width="546"><input name="nome" type="text"
 id="nome" size="70" maxlength="60"/>
 <span class="style1">*</span></td>
 </tr>
 <tr>
 <td>Email:</td>
 <td><input name="email" type="text" id="email"
 size="70" maxlength="60"/>
 <span class="style1">*</span><td>
 </tr>
 
 <tr>
 
<td> Sexo:</td>
  <td><input name="sexo" type="radio" 
  value="Masculino" checked="checked"/>
Masculino
<input name="sexo" type="radio"
value="Feminino"/>
Feminino <span class="style1">*</span></td>
</tr>
<td>
<td>

Telefone:
<input name="telefone" type="text"
id="telefone"/>
<span class="style3">Apenas numeros</span>
</td>
<tr>
<td>Endereco:</td>
<td><input name="endereco" type="text"
id="enderaco" size="70" maxlength="70"/>
<span class="style">*</span></td>
</tr>
<tr>
<TD>Cidade:</td>
<td><input name="cidade"type="text" id="cidade"
maxlength="20"/>
<span class="style">*</span></td>
</tr>
<tr>
<td>Estado:</td>
<td><select name="estado" id="estado">
<option>Selecione...</option>
<option value="AC">AC</option>
<option value="AL">AL</option>
<option value="AP">AP</option>
<option value="AM">AM</option>
<option value="BA">BA</option>
<option value="CE">CE</option>
<option value="ES">ES</option>
<option value="DF">DF</option>
<option value="MA">MA</option>
<option value="MT">MT</option>
<option value="MS">MS</option>
<option value="MG">MG</option>
<option value="PA">PA</option>
<option value="PB">PB</option>
<option value="PR">PR</option>
<option value="PE">PE</option>
<option value="PI">PI</option>
<option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RS">RS</option>
<option value="RO">RO</option>
<option value="RR">RR</option>
<option value="SC">SC</option>
<option value="SP">SP</option>
<option value="SE">SE</option>
<option value="TO">TO</option>
</select>
<span class="style1">*         </span></td>
</tr>
<tr>
<td>Bairro:</td>
<td><input name="bairro" type="text" id="bairro"
maxlength="20" />
<span class="style">*</span></td>
</tr>
<tr>
<td>Login:</td>
<td><input name="login" type="text" id="login"
maxlength="12"/>
</span class="style">*<span></td>
</tr>
<tr>
<td>Senha:</td>
<td><input name="senha" type="password"
id="senha" maxlength="12"/>
<span class="style">*</span></td>
</tr>
<tr>
<id colspan="2"><input name="news"
type="checkbox" id="news" value="ATIVO"
checked="checked"/>
Desejo receber novidades e informacoes sobre o conteudo deste site.</td>
</tr>

<tr>
<td colspan="2"<p>
<input name="cadastrar" type="submit"
id="cadastrar" value="concluir meu Cadastro!"/>

<input name="limpar" type="reset" id="limpar"
value="Limpar Campos preenchidos!"/>

<span class="style">* Campos com * sao obrigatorios!             </span></p>
 <div class="box_noticia5">
<p>          </p>     </td>
</table>

</form>
</br>
</br>
</br>
</br>
</br>
     </div>
			</div>
			</div>
			 <p>
				
				
			</p>
		</div>	
</body>
</html>