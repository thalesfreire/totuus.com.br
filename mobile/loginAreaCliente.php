<div id="divApp" style="text-align:center; ">

	<div id="divAreaCliente">
		
		<?php if(empty($_SESSION["idUsuario"])) { ?>
			<div id="divImagemAreaCliente"><img src="images/client-login.png"/></div>
			<div id="divTextoAreaCliente">Área do Cliente</div>
			<div style="float:right; padding-top:15px;"><input type="button" value="Login" onclick="javascript:window.location='areaCliente.php'"/></div>
		<?php } else {?>
			<div id="divTextoAreaClienteLogado">Seja bem-vindo Sr(a). <?=$_SESSION["nomeUsuario"]?></div><br />
			<div style="float:left; width:100%;">
				<input type="button" value="Área do cliente" onclick="javascript:window.location='areaCliente.php'"/>
				<input type="button" value="Sair" onclick="javascript:window.location='loginAction.php?method=logout'"/>
			</div>
		<?php } ?>
		
	</div>
	
	
	
	
</div>