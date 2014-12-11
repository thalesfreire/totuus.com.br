<?php include("header.php") ?>
		<div id="divLogo">
			<div style="float:left;"><a href="index.php"><img src="images/left_arrow.png" id="logoImage"  border="0" alt="Totuus - Localização e Monitoramento" /></a></div>
			Fale conosco
			<div style="float:right;"><img src="images/escudoTotuus.png" id="logoImage"  border="0" alt="Totuus - Localização e Monitoramento" /></div>
		</div>
		
		<?php include("loginAreaCliente.php") ?>
	
		<div id="principal" style="height: 575px;">
		
			<div id="form">
		
				<form method="post">
	
					<p class="name">Nome<br />
						<input type="text" class="inputFormContato" value="" size="40" id="nome" name="nome"/>
					</p>
					
					<p class="email">Email<br />
						<input type="text" class="inputFormContato" value="" size="40" id="email" name="email"/>
					</p>
					
					<p class="telefone">DDD/Telefone<br />
						<input type="text" class="inputFormContato" value="" size="40"  id="fone" name="fone"/>
					</p>
					
					<p class="cidade">Cidade<br />
						<input type="text" class="inputFormContato" value="" size="40"  id="cidade" name="cidade"/>
					</p>
					<p class="estado">Estado<br />
						<select id="estado" name="estado">
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AP">AP</option>
							<option value="AM">AM</option>
							<option value="BA">BA</option>
							<option value="CE" selected="selected">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MT">MT</option>
							<option value="MS">MS</option>
							<option value="MG">MG</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PR">PR</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="RR">RR</option>
							<option value="RO">RO</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="SC">SC</option>
							<option value="SP">SP</option>
							<option value="SE">SE</option>
							<option value="TO">TO</option>
						</select>
					</p>
					<p class="assunto">Assunto<br />
						<select id="assunto" name="assunto">
							<option value="Atendimento">Atendimento</option>
							<option value="Comercial">Comercial</option>
							<option value="Suporte">Suporte</option>
						</select>
					</p>
					
					<p class="mensagem">Mensagem<br />
						<textarea cols="40" rows="5" class="textareaFormContato"  id="mensagem" name="mensagem"></textarea>
					</p>
					
					<p>
						<input type="button" value="Enviar" onclick="enviarEmailMobile();" />
					</p>
					
				</form>
			
			</div>
		
		</div>
	
<?php include("footer.php") ?>