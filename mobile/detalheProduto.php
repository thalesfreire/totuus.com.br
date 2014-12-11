<?php include("header.php") ?>

<?php

$xmlPath = '../xml/'.$_REQUEST['p'].'.xml';

$xml = simplexml_load_file($xmlPath);

$nome = $xml->xpath('nome');

$caracteristicasXml = $xml->xpath('caracteristicas'); 

$caracteristicas = explode(';',$caracteristicasXml[0]);


$imagens = $xml->xpath('imagens/imagem');

$especificacoes = $xml->xpath('especificacoes/itens/item');
 

?>


		<div id="divLogo">
			<div style="float:left;"><a href="produtos.php"><img src="images/left_arrow.png" id="logoImage"  border="0" alt="Totuus - Localização e Monitoramento" /></a></div>
			<?=utf8_decode($nome[0])?>
			<div style="float:right;"><img src="images/escudoTotuus.png" id="logoImage"  border="0" alt="Totuus - Localização e Monitoramento" /></div>
		</div>
		
		<?php include("loginAreaCliente.php") ?>
	
		<div id="principal" style="padding-top:0px;">
		
			<div id="imagemDetalheProduto">
			
				<?php 
									
					$contador = 1;
					$selected = true;
					
					foreach($imagens as $imagem) {
						
						if($selected)
							echo "<img id='photo' title='".$nome[0]."' alt='".$nome[0]."' src='http://www.totuus.com.br/images/produtos/".$imagem->grande."' style='display: inline;' name='imgPrincipal' style='width: 90px;'>";
						else 
							break;
						$selected = false;
						
					}
					
				
				?>
				
			</div>
			
			<div id="caracteristicasDetalheProduto">
				<div style="margin-top:15px; margin-bottom: 20px; border-bottom: solid; border-bottom-color: #006699; border-bottom-width: 1px; padding-bottom: 5px;">
					<b><span style="color: #006699;">CARACTER&Iacute;STICAS</span></b>
				</div>
				
				<div>
					
					<?php 
					
						foreach($caracteristicas as $caracteristica ) {
						
							echo "<p style='padding-bottom: 10px;'>".utf8_decode($caracteristica).";</p>";
						
						}
					
					
					?>
				
				</div>
				
				<div style="margin-top:15px; margin-bottom: 20px; border-bottom: solid; border-bottom-color: #006699; border-bottom-width: 1px; padding-bottom: 5px;">
					<b><span style="color: #006699;">ESPECIFICA&Ccedil;&Otilde;ES</span></b>
				</div>
				
				<div id="especicacoesDetalheProduto">
					<ul>
					
						<?php 
						
							foreach($especificacoes as $item ) {
								
								echo "<li><h3>".utf8_decode($item->titulo)."</h3><p>";
								
								$descricao = explode(';',$item->descricao);
								
								foreach($descricao as $itemDescricao ) {
						
									echo utf8_decode($itemDescricao)."<br>";
								
								}
								
								echo "</p></li>";
								
							}
						
						
						
						?>
					
					</ul>
				</div>
				
				
			</div>
			
			
		</div>
<?php include("footer.php") ?>