<?php include("headerFollow.php") ?>
		

<script src="http://maps.google.com.br/maps?file=api&amp;v=2&amp;hl=pt-br&amp;key=ABQIAAAAhndvSXl1_uJOcEKgJrpTfxRtuqelEwdhpgAVd243z8GAP90szhS8Ej-9Bhdn3TPkpZT6FMk4HxpWvw" type="text/javascript"></script>
<script src="js/labeledmarker.js"></script>
<script src="js/infobox.js"></script>
<script> 
function load() {
  if (GBrowserIsCompatible()) {
    var map = new GMap2(document.getElementById("map"));
    map.enableScrollWheelZoom();
    map.addMapType(G_SATELLITE_3D_MAP);
	
	var icon = new GIcon();
        icon.iconSize = new GSize(10, 10);
        icon.iconAnchor = new GPoint(0, 0);
        icon.infoWindowAnchor = new GPoint(25, 7);

	
	<?php 
		
		$query=mysql_query("SELECT * FROM follow_localizacao fl, follow_device fd  
							WHERE fd.seq_device = fl.seq_device and fd.seq_usuario = ".$_SESSION["idUsuario"]);
		
		$contador = 1;
		while($localizacao_device = mysql_fetch_array($query))
		{
			echo "var latlng_".$contador.", marker_".$contador.", info_".$contador.";\n";
			echo "latlng_".$contador." = new GLatLng(".$localizacao_device['dsc_latitude'].", ".$localizacao_device['dsc_longitude'].");\n";
			echo "opts_".$contador." = { \"icon\": icon, \"clickable\": true, \"title\": \"".$localizacao_device['nom_device']."\", \"labelText\": \"".$localizacao_device['nom_device']."\", \"labelOffset\": new GSize(-6, -10)};\n";
			echo "marker_".$contador." = new LabeledMarker(latlng_".$contador.", opts_".$contador.");\n";
			
			echo "map.addOverlay(marker_".$contador.");\n\n";
			echo "GEvent.addListener(marker_".$contador.", \"click\", function() {marker_".$contador.".openInfoWindowHtml(getDetalheDevice(".$localizacao_device['dsc_latitude'].", ".$localizacao_device['dsc_longitude']."));});\n";
			
			if($localizacao_device['cod_principal'] == 'S')
				echo "map.setCenter(new GLatLng(".$localizacao_device['dsc_latitude'].",".$localizacao_device['dsc_longitude']."), 17);\n";
			
			
			
			
			$contador++;
		}
		
	?>
  }
}
</script>	
<body onLoad="load();" onUnload="GUnload();">
<div id="Container">
	
	<div id="msgContainer" style="display:none;">
		<div id="msgImage"><img src="images/success-icon.png" width="30" height="30" id="iconMsg" /></div>
		<div id="msgRetorno">Mensagem enviada com sucesso.</div>
	</div>
	<div class="Content"style="margin-left: 5px;">
	   
		<div id="bodyContainer" style="">
			
			<div  style="width:100%; display:inline;padding-top:10px; float:left; ">
			
				<div style="float: left;" id="divEsquerdaMapa">
					<div id="tituloMapa">Exibindo:<span id="textoExibindo">Dispositivos de <?php echo $_SESSION["nomeUsuario"]?></span></div>
					<div id="map"></div>
					<div>teste</div>
					<div id="jqueryTeste" style="display:none;">teste 2 jquery top left</div>
				</div>
				
				
				<div style="float: left;">
					
					<div style="height:200px;">
						<div class="tituloDispositivosAmigos">Meus dispositivos</div>
						<div class="conteudoDispositivosAmigos">
						  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                              <td class="cabecalhoTabelaDispositivosAmigos" style="width: 220px;" >Dispositivo</td>
                              <td class="cabecalhoTabelaDispositivosAmigos" style="text-align: center;">Ver?</td>
                            </tr>
							
							
							<?php 
		
								$query=mysql_query("SELECT * FROM follow_device where seq_usuario = ".$_SESSION["idUsuario"]);
								$contador = 1;
								$linha = 'linhaClaraTabelaDispositivosAmigos';
								while($device = mysql_fetch_array($query))
								{
									if($contador % 2 == 0)
										$linha = 'linhaEscuraTabelaDispositivosAmigos';
									
									echo "<tr class=\"".$linha."\">";
									echo "	<td style=\"width: 200px;\" >".$device['nom_device']."</td>";
									echo "	<td style=\"text-align: center;\"><input type=\"checkbox\" checked=\"checked\" /></td>";
									echo "</tr>";
									$contador++;
								}
							
							?>
							
                          </table>
						</div>
					</div>
					
					
					<div>
						<div class="tituloDispositivosAmigos">Amigos</div>
						<div class="conteudoDispositivosAmigos">
						  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                              <td class="cabecalhoTabelaDispositivosAmigos" style="width: 220px;" >Nome</td>
                              <td class="cabecalhoTabelaDispositivosAmigos" style="text-align: center;">Ver?</td>
                            </tr>
							<tr class="linhaClaraTabelaDispositivosAmigos">
                              <td style="width: 200px;" >JP Saraiva</td>
                              <td style="text-align: center;"><input type="checkbox" checked="checked" /></td>
                            </tr>
							<tr class="linhaEscuraTabelaDispositivosAmigos">
                              <td style="width: 200px;" >Alexandre Franklin</td>
                              <td style="text-align: center;"><input type="checkbox" checked="checked" /></td>
                            </tr>
							<tr class="linhaClaraTabelaDispositivosAmigos">
                              <td style="width: 200px;" >Fabiola Leão</td>
                              <td style="text-align: center;"><input type="checkbox" checked="checked" /></td>
                            </tr>
							<tr class="linhaEscuraTabelaDispositivosAmigos">
                              <td style="width: 200px;" >Carlos Henrique BF</td>
                              <td style="text-align: center;"><input type="checkbox" checked="checked" /></td>
                            </tr>
                          </table>
						</div>
					</div>
				
				</div>
				
				
			</div>
				
		</div>
		
	</div>
	
	<br class="Clear" />
        
<?php include("footerFollow.php") ?>
		
	