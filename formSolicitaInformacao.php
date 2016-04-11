<form action="?id=18" method="post" name="formSolicita" id="formSolicita">
	<fieldset>
		<legend>Descreva de forma detalhada sua Solicitação</legend>
		<ul class="listaFormulario">
			<li>
				<span class="nome1"><label for="solicitacao">Solicitação:</label></span>
				<span><textarea name="solicitacao" id="solicitacao" rows="20" cols="80"/></textarea></span>
			</li>
		</ul>

		<ul class="listaFormulario">
			<li>
				<span class="nome1"><label for="formaretorno">Forma de retorno:</label></span>
				<span>
					<select name="formaretorno" id="formaretorno">
						<option value="0">E-mail</option>		
						<option value="1">Correio</option>		
						<option value="2">Fax</option>		
					</select>
				</span>
			</li>
		</ul>
		<ul class="listaFormulario">
			<li>
				<span>
					<input type="submit" value="enviar" name="submit" />
				</span>
			</li>
		</ul>
	</fieldset>
</form>
