<?php include("header.php") ?>
		<div id="divLogo">
			<div style="float:left;"><a href="index.php"><img src="images/left_arrow.png" id="logoImage"  border="0" alt="Totuus - Localização e Monitoramento" /></a></div>
			Área do Cliente
			<div style="float:right;"><img src="images/escudoTotuus.png" id="logoImage"  border="0" alt="Totuus - Localização e Monitoramento" /></div>
		</div>
		
		<?php include("loginAreaCliente.php") ?>
	
		<div id="principal" style="height: 180px;">
		
			<div id="form">
		
				<?php 
				
				
				if(empty($_SESSION["idUsuario"])) { ?>
				<form method="post" id="formLogin" action="loginAction.php?method=login" >
					
					<p>Email<br />
						<input type="text" class="inputFormContato" value="" size="40" id="inUsername" name="inUsername"/>
					</p>
					
					<p>Senha<br />
						<input type="password" class="inputFormContato" value="" size="40"  id="inPassword" name="inPassword"/>
					</p>
					
					
					<p>
						<input type="button" value="Entrar" onclick="validaLogin();" />
					</p>
					
				</form>
				<?php } else { ?>
				
				
					<div style="margin: 0 8px 0 5px; border-bottom: solid; border-bottom-color: #006699; border-bottom-width: 1px; padding-bottom: 5px;">
						<b><span style="color: #006699;">SERVIÇOS CONTRATADOS</span></b>
					</div>
				
					<div id="servicosContratados">
					<ul>
				
					<?php
					
						require_once("ServicoManager.php");

						$servicoManager = new ServicoManager();
						$servicos = $servicoManager->findByUsuario($_SESSION["idUsuario"]);
						
						while($servico = mysql_fetch_array($servicos))
						{
						?>
							<li><h3><a href="http://www.totuus.com.br/<?=$servico['dsc_url_servico'] ?>"><?=$servico['dsc_servico'] ?></a></h3></li>
						<?php	
						}	
						?>
					</ul>
					</div>
				
				<?php } ?>
			
			</div>
		
		</div>
<?php include("footer.php") ?>