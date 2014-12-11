<?php include("header.php") ?>


<?php

$xmlPath = 'xml/'.$_REQUEST['p'].'.xml';

$xml = simplexml_load_file($xmlPath);

$nome = $xml->xpath('nome');

$caracteristicasXml = $xml->xpath('caracteristicas'); 

$caracteristicas = explode(';',$caracteristicasXml[0]);


$imagens = $xml->xpath('imagens/imagem');

$especificacoes = $xml->xpath('especificacoes/itens/item');
 

?>

		
	<!-- CORPO -->
	<div class="Content"style="margin-left: 5px;">
	   
		<div id="bodyContainer">
			<h2><?=utf8_decode($nome[0])?></h2>
		
		
			<div style="display:inline;">
			
				<div style="width: 50%; float:left;">
				
					<div class="photos">
						<div class="photo-main">
							<div class="photo"  id="photoMain">
							
								<?php 
									
									$contador = 1;
									$selected = true;
									
									foreach($imagens as $imagem) {
										
										if($selected)
											echo "<img id='photo-".$contador."' title='".$nome[0]."' alt='".$nome[0]."' src='images/produtos/".$imagem->grande."' style='display: inline;' name='imgPrincipal'>";
										else
											echo "<img id='photo-".$contador."' title='".$nome[0]."' alt='".$nome[0]."' src='images/produtos/".$imagem->grande."' style='display: none;' name='imgPrincipal'>";
										$contador++;
										$selected = false;
										
									}
									
								
								?>
							</div>
						</div>
						<div class="product-photos-small">
							
							<?php 
							
							$selected = true;	
							$contador = 1;
								
								foreach($imagens as $imagem) {
									
									
									
									echo "<div class='photo'>";
									
									if($selected)
										echo "<a id='thumb-".$contador."' class='zoom-photo-1 sel' style='background-image: url(images/produtos/".$imagem->pequena.");' href=\"javascript:showImgPrincipal('photo-".$contador."','thumb-".$contador."');\" name='thumb'>".$nome[0]."</a>";
									else 
										echo "<a id='thumb-".$contador."' class='zoom-photo-1' style='background-image: url(images/produtos/".$imagem->pequena.");' href=\"javascript:showImgPrincipal('photo-".$contador."','thumb-".$contador."');\" name='thumb'>".$nome[0]."</a>";
									
									echo "</div>";
									
									$selected = false;
									$contador++;
									
								}
							
							?>
							
							<br clear="all">
							
						</div>
					</div>
				</div>
				
				<div style="width: 470px;; float:left">
				
					<div style="margin-top:15px; margin-bottom: 20px; border-bottom: solid; border-bottom-color: #006699; border-bottom-width: 1px; padding-bottom: 5px;"><b><span style="color: #006699;">CARACTER&Iacute;STICAS</span></b></div>
					<div>
					
						<?php 
						
							foreach($caracteristicas as $caracteristica ) {
							
								echo "<p>".utf8_decode(utf8_encode($caracteristica)).";</p>";
							
							}
						
						
						?>
					
					</div>
				
				</div>
				
				
			
			</div>
		
		
		</div>
		
		
	</div>
	<div style="width: 950px; padding-left: 10px;">
		<div style="margin-top:15px; margin-bottom: 20px; border-bottom: solid; border-bottom-color:#006699;; border-bottom-width: 1px; padding-bottom: 5px;"><b><span style="color: #006699;">ESPECIFICA&Ccedil;&Otilde;ES</span></b></div>
					<div>
					
						<?php 
						
							$itemIndex = 0;
							$coluna1 = "<div style='float: left; width: 310px;'><ul>";
							$coluna2 = "<div style='float: left; width: 310px;'><ul>";
							$coluna3 = "<div style='float: left; width: 310px;'><ul>";
						
							foreach($especificacoes as $item ) {
								
								if($itemIndex == 0 || $itemIndex == 3 || $itemIndex == 6 || $itemIndex == 9 || $itemIndex == 12)  {
							
									$coluna1 .= "<li><h3>".utf8_decode(utf8_encode($item->titulo))."</h3><p>";
									
									$descricao = explode(';',$item->descricao);
									
									foreach($descricao as $itemDescricao ) {
							
										$coluna1 .= utf8_decode(utf8_encode($itemDescricao))."<br>";
									
									}
									
									$coluna1 .="</p></li>";
								}
								
								
								if($itemIndex == 1 || $itemIndex == 4 || $itemIndex == 7 || $itemIndex == 10 || $itemIndex == 13)  {
							
									$coluna2 .= "<li><h3>".utf8_decode(utf8_encode($item->titulo))."</h3><p>";
									
									$descricao = explode(';',$item->descricao);
									
									foreach($descricao as $itemDescricao ) {
							
										$coluna2 .= utf8_decode(utf8_encode($itemDescricao))."<br>";
									
									}
									
									$coluna2 .="</p></li>";
								}
								
								if($itemIndex == 2 || $itemIndex == 5 || $itemIndex == 8 || $itemIndex == 11 || $itemIndex == 14)  {
							
									$coluna3 .= "<li><h3>".utf8_decode(utf8_encode($item->titulo))."</h3><p>";
									
									$descricao = explode(';',$item->descricao);
									
									foreach($descricao as $itemDescricao ) {
							
										$coluna3 .= utf8_decode(utf8_encode($itemDescricao))."<br>";
									
									}
									
									$coluna3 .="</p></li>";
								}
								
								
								$itemIndex++;
							
							}
						
						
							echo $coluna1. "</ul></div>";
							echo $coluna2. "</ul></div>";
							echo $coluna3. "</ul></div>";
						
						
						
						?>
					
					</div>
		</div>
	
	<br class="Clear" />
        
<?php include("footer.php") ?>
		
	