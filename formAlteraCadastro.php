
	<form action="" id="formulario" method="post">
		

		<script>
		function selecionaTipoPessoa(tipo)
		{
			if(tipo=="F")
			{
				document.getElementById('lblNome').innerHTML = "*Nome:";
				document.getElementById('lblCpfcnpj').innerHTML = "*CPF:";
				document.getElementById('lnEscolaridade').style.display = "";
				document.getElementById('lnProfissao').style.display = "";
			}
			else
			{
				document.getElementById('lblNome').innerHTML = "*Razão Social:";
				document.getElementById('lblCpfcnpj').innerHTML = "*CNPJ:";
				document.getElementById('lnEscolaridade').style.display = "none";
				document.getElementById('lnProfissao').style.display = "none";
			}
		}
		</script>

		<fieldset>
			<legend>Alterar Dados Pessoais</legend>
			
		<ul class="listaFormulario">
			<li>
				<span class="nome1"><label>* Tipo de Pessoa:</label></span>
				<span>
					<input type="radio" name="tipopessoa" id="tipoF" value="F" checked="" onclick="selecionaTipoPessoa('F');">
				</span>
				<span><label for="tipoF">Física</label></span>
				<span>
					<input type="radio" name="tipopessoa" id="tipoj" value="J" onclick="selecionaTipoPessoa('J');">
				</span>
				<span><label for="tipoj">Jurídica</label></span>
			</li>
		</ul>

		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label id="lblNome" for="nome">Nome</label>
				</span>
				<span>
					<input type="text" name="nome"  id="nome" value="" size="58" maxlength="100">
				</span>
			</li>

		</ul>
		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label id="lblCpfcnpj" for="cpfcnpj">CPF</label>
				</span>
				<span>
					<input type="text" name="cpfcnpj" id="cpfcnpj" value="" onkeyup="soNumero(this);" size="14" maxlength="14"> 
				</span>
			</li>

		</ul>
		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label for="idfaixaetaria">Faixa Etária:</label>
				</span>
				<span>
					<select name="idfaixaetaria" id="idfaixaetaria">
						<option value="">----</option>		
						<option value="4">acima de 59 anos</option>
						<option value="1">Até 20 anos</option>
						<option value="2">de 21 a 40 anos</option>
						<option value="3">de 41 a 59 anos</option>
					</select>
				</span>
			</li>

		</ul>
		<ul id="lnEscolaridade" class="listaFormulario">
			<li>
				<span class="nome1">
					<label for="idescolaridade">Escolaridade:</label>
				</span>
				<span>
					<select name="idescolaridade" id="idescolaridade">
						<option value="">----</option>		
						<option value="2">Ensino fundamental</option>
						<option value="3">Ensino Medio</option>
						<option value="4">Ensino Superior</option>
						<option value="6">Mestrado/Doutorado</option>
						<option value="5">Pós-graduação</option>
						<option value="1">Sem instrução formal</option>
					</select>
				</span>
			</li>

		</ul>
		<ul id="lnProfissao" class="listaFormulario">
			<li >
				<span class="nome1">
					<label for="profissao">Profissão:</label>
				</span>
				<span>
					<input type="text" name="profissao"  id="profissao" value="" size="30" maxlength="50">
				</span>
			</li>
		</ul>

		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label for="idtipotelefone">Tipo Telefone:</label>
				</span>
				<span>
					<select name="idtipotelefone" id="idtipotelefone">
						<option value="">----</option>		
						<option value="4">Celular</option>
						<option value="5">Comercial</option>
						<option value="3">Fixo</option>
						<option value="2">Residencial</option>
					</select>
				</span>
				<span>
					<label for="dddtelefone">Telefone:</label>
				</span>
				<span>
					<input type="text" name="dddtelefone"  id="dddtelefone" value="" onkeyup="soNumero(this);" size="2" maxlength="2">
				</span>
				<span>
					<input type="text" name="telefone" value="" onkeyup="soNumero(this);" size="15" maxlength="15">
				</span>
			</li>
		</ul>

		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label for="email">*E-mail:</label>
				</span>
				<span>
					<input type="text" name="email"  id="email" value="" size="50" maxlength="150">
				</span>
			</li>
		</ul>

		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label for="confirmeemail">*Confirme E-mail:</label>
				</span>
				<span>
					<input type="text" name="confirmeemail" id="confirmeemail" value="" size="50" maxlength="150">
				</span>
			</li>
		</ul>

		</fieldset>

		<fieldset>
			<legend>Endereço</legend>


		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label>Endereço:</label>
				</span>
				<span>
					<input type="text" name="endereco" id="endereco" value="" maxlength="255" size="60">
				</span>
				<span>
					<label for="numero">Número:</label>
				</span>
				<span>
					<input type="text" name="numero" id="numero" value="" maxlength="10" size="10">
				</span>
			</li>
		</ul>

		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label for="bairro">Bairro:</label>
				</span>
				<span>
					<input type="text" name="bairro" id="bairro" value="" maxlength="100" size="50" title="">
				</span>
			</li>
		</ul>

		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label for="cidade">Cidade:</label>
				</span>
				<span>
					<input type="text" name="cidade" id="cidade" value="" maxlength="255" size="35" title="">
				</span>
				<span>
					<label>UF:</label>
				</span>
				<span>
					<select name="uf" id="uf">
						<option selected>--</option>
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
				</span>
				<span>
					<label for="cep">CEP:</label>
				</span>
				<span>
					<input type="text" name="cep" id="cep" value=""   maxlength="8" size="10">	
				</span>
			</li>
		</ul>
		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<label for="complemento">Complemento:</label>
				</span>
				<span>
					<input type="text" name="complemento" id="complemento" value="" maxlength="50" size="50" margin="10px;">
				</span>
			</li>
		</ul>

		<ul class="listaFormulario">
			<li>
				<span class="nome1">
					<input type="submit" class="botaoformulario" value="enviar" name="submit">
				</span>

			</li>
		</ul>

		</fieldset>


		<script>selecionaTipoPessoa('F');</script>

	</div>


</form>
