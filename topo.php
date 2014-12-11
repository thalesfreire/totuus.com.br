<!-- LOGO -->
<div id="Outer">
	<div id="Header">
		<div id="Logo">
			<a href="index.php"><img src="images/LogoTotuus.png" border="0" id="LogoImage" alt="Totuus - Localização e Monitoramento" /></a>
		</div>
		<div id="SearchForm">
		<?php if(empty($_SESSION["idUsuario"])) { ?>

			<form method="post" id="formLogin" action="aplicacao/actions/loginAction.php?method=login" >
				<input type="text" id="inUsername" name="inUsername" class="Textbox" value="Email" onFocus="this.value='';"/>
				<input type="password" id="inPassword" name="inPassword" class="Textbox" value="Password" onFocus="this.value='';"/>
				<input type="button" class="Button" value="Entrar"  onClick="validaLogin();" />
			</form>
			<p>
				<span style="color:#D4D4D4; font-size: 11px;">Preencha o formul&aacute;rio acima para acesso ao(s) ve&iacute;culo(s)</span>
			</p>	

		<?php } else { ?>

			<div style="width:360px;; text-align:right; color:#D4D4D4; font-size: 12px;"><a href="aplicacao/server93.php">Seja bem-vindo Sr(a). <b><?php echo $_SESSION["nomeUsuario"] ?></b>.</a></div>
			<p style="text-align: right; width: 355px;">
				<a href="aplicacao/actions/loginAction.php?method=logout" style="color:#D4D4D4; font-size: 11px;">Sair</a>
			</p>

		<?php } ?>

		</div>
		<br class="Clear" />
	</div>		
</div>