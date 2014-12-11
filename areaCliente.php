<?php include("header.php") ?>

<?php 


require_once("aplicacao/classes/br.com.totuus/ServicoManager.php");

$servicoManager = new ServicoManager();
$servicos = $servicoManager->findByUsuario($_SESSION["idUsuario"]);


?>		
	<!-- CORPO -->
	<div class="Content"style="margin-left: 5px;">
	   
		<div id="bodyContainer">
			<h2>&Aacute;rea do Cliente</h2>
			
			
			<div  style="width:100%; display:inline;padding-top:10px; float:left; ">
			
				<div style="float: left;" id="divEsquerdaMapa">
					<div id="tituloMapa"><span id="textoExibindo">Informa&ccedil;&otilde;es da conta </span></div>
					<div class="containerInformacoes">
					
					
						<script>
						$(function() {
							$( "#accordion" ).accordion();
						});
						$(function()
						{
							$('.scroll-pane').each(function() {
								
								alert($(this)); 
								$(this).jScrollPane();
							
							});
						});
						</script>


						<div id="accordion">
							<h3><a href="#">Imprimir meu boleto</a></h3>
							<div>
								<p>
									
								</p>
							</div>
							
							<h3><a href="#">Alterar meu cadastro</a></h3>
							<div>
								<p>
								
								</p>
							</div>
							
							<h3><a href="#">Visualisar meus pagamentos</a></h3>
							<div>
								<p>
								
								</p>
							</div>
							
						</div>
						
					
					</div>
				</div>
				
				
				<div style="float: left;">
					
					<div>
						<div class="tituloServicos">Servi&ccedil;os contratados</div>
						<?php
						while($servico = mysql_fetch_array($servicos))
						{
						?>
						
						<div class="conteudoDispositivosAmigos">
							<a href="<?=utf8_encode($servico['dsc_url_servico'])?>"><?=utf8_encode($servico['dsc_servico'])?></a>
						</div>
						
						<?php	
						}	
						?>
						
					</div>									
				</div>								
			</div>
						
	  </div>
		
	</div>
	
	<br class="Clear" />
        
<?php include("footer.php") ?>
		
	