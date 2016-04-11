<!DOCTYPE html>
<html>
<head>
	<title>teste cadastro</title>
	<style type="text/css">
	input, select {
		display: block;
	}

	</style>
</head>
<body>
<form name="envio" method="post" action='cadastrar.php'>
	<script>
/*	function selecionaTipoPessoa(tipo)*/
/*	{
		if(tipo=="F")
		{
			document.getElementById('lblNome').innerHTML = "Nome";
			document.getElementById('lblCpfcnpj').innerHTML = "CPF";
			document.getElementById('lnEscolaridade').style.display = "";
			document.getElementById('lnProfissao').style.display = "";
		}
		else
		{
			document.getElementById('lblNome').innerHTML = "Razão Social";
			document.getElementById('lblCpfcnpj').innerHTML = "CNPJ";
			document.getElementById('lnEscolaridade').style.display = "none";
			document.getElementById('lnProfissao').style.display = "none";
		}
	}*/
	</script>	
<label for="tipopessoa">Tipo Pessoa:</label><input type="radio" name="tipopessoa" id="tipopessoa" value="F" checked="" onclick="selecionaTipoPessoa('F');">Física
<input type="radio" name="tipopessoa" id="tipopessoa" value="J" onclick="selecionaTipoPessoa('J');">Jurídica
<label for="nome">Nome: </label><input type="text" name="nome" value="">
<label for="cpfcnpj">CPF:</label><input type="text" name="cpfcnpj" value="" maxlength="14">
<label for="idfaixaetaria">Faixa Etária: </label>
<select name="idfaixaetaria" id="idfaixaetaria">
	<option value="">----</option>		
	<option value="4">acima de 59 anos</option>
	<option value="1">Até 20 anos</option>
	<option value="2">de 21 a 40 anos</option>
	<option value="3">de 41 a 59 anos</option>
</select>
<label for="idescolaridade">Escolaridade: </label>
<select name="idescolaridade" id="idescolaridade">
	<option value="">----</option>		
	<option value="2">Ensino fundamental</option>
	<option value="3">Ensino Medio</option>
	<option value="4">Ensino Superior</option>
	<option value="6">Mestrado/Doutorado</option>
	<option value="5">Pós-graduação</option>
	<option value="1">Sem instrução formal</option>
</select>
<label for="profissao">Profissão: </label><input type="text" name="profissao" value=""> 
<label for="idtipotelefone">Tipo Telefone</label>
<select name="idtipotelefone" id="idtipotelefone">
	<option value="">----</option>		
	<option value="4">Celular</option>
	<option value="5">Comercial</option>
	<option value="3">Fixo</option>
	<option value="2">Residencial</option>
</select>
<label for="telefone">Telefone:</label>
<input type="text" name="dddtelefone" value="" maxlength="2">
<input type="text" name="telefone" value="" maxlength="15">
<label for="email">E-mail:</label>
<input type="text" name="email"  id="email" value="" maxlength="150">
<label for="confirmeemail">Confirma E-mail:</label>
<input type="text" name="confirmeemail" id="confirmeemail" value="" maxlength="150">
<label for="cep">CEP:</label>
<input type="text" name="cep" id="cep" value="" maxlength="8">
<label for="endereco">Endereço</label>
<input type="text" name="endereco" id="endereco" value="" maxlength="255">
<label for="bairro">Bairro:</label>
<input type="text" name="bairro" id="bairro" value="" maxlength="100" >
<label for="cidade">Cidade: </label>
<input type="text" name="cidade"  id="cidade"value="" maxlength="255">
<label for="uf">UF:</label>
<select name="uf" id="uf">
	<option value="">- UF -</option>		
	<option value="AC">AC</option>
	<option value="AL">AL</option>
	<option value="AM">AM</option>
	<option value="AP">AP</option>
	<option value="BA">BA</option>
	<option value="CE">CE</option>
	<option value="DF">DF</option>
	<option value="ES">ES</option>
	<option value="GO">GO</option>
	<option value="MA">MA</option>
	<option value="MG">MG</option>
	<option value="MS">MS</option>
	<option value="MT">MT</option>
	<option value="PA">PA</option>
	<option value="PB">PB</option>
	<option value="PE">PE</option>
	<option value="PI">PI</option>
	<option value="PR">PR</option>
	<option value="RJ">RJ</option>
	<option value="RN">RN</option>
	<option value="RO">RO</option>
	<option value="RR">RR</option>
	<option value="RS">RS</option>
	<option value="SC">SC</option>
	<option value="SE">SE</option>
	<option value="SP">SP</option>
	<option value="TO">TO</option>
</select>
<label for="numero">Número: </label>
<input type="text" name="numero" id="numero" value="" maxlength="10" >
<label for="complemento">Complemento: </label>
<input type="text" name="complemento" id="complemento" value="" maxlength="50">





<input type="submit" value="enviar" name="submit">

</form>
</body>
</html>