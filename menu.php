<!-- MENU -->
<div id="TopMenu">
	<ul>
		<!--li><a href="index.php">Início</a></li-->
		<li><a href="produtos.php">Produtos</a></li>
		<li><a href="localizacao.php">Localiza&ccedil;&atilde;o</a></li>
		<li><a href="monitoramento.php">Monitoramento</a></li>
		<!--li><a href="servicos.php">Serviços</a></li-->
		<li><a href="quemSomos.php">Quem somos</a></li>
		<!--<li><a href="clientes.php">Clientes</a></li>-->
		<li><a href='faleConosco.php'>Fale conosco</a></li>
		
		<?php if(!empty($_SESSION["idUsuario"])) { ?>
			<li><a href='areaCliente.php'><b>&Aacute;rea do Cliente</b></a></li>
		<?php }?>
	</ul>
	<!--
	<ul style="float: right; padding-right: 8px;">
		<li><a href="http://loja.totuus.com.br" target="_blank"><b>Loja virtual</b></a></li>
	</ul>
	-->
	<br class="Clear" />
</div>