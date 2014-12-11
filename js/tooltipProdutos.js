function makeTooltip(id, titulo, de, por) {

	$(function() {
	
	
	$(id).tooltip({
		
		fade: 150,
		track: true,
		delay: 0,
		showURL: false,
		bodyHandler: function() {
			
			
			
			var precos = "";
			
			if(de != '') { 
			
				precos = "<div style='padding-bottom: 5px; padding-right: 5px; padding-left: 5px; text-align: left;'>de <span class='preco_venda_de'>R$"+de+"</span> por <span class='preco_venda'>R$"+por+"</span></div>";
			
			} else {
				precos = "<div style='padding-bottom: 5px; padding-right: 5px; padding-left: 5px; text-align: left;'><span class='preco_venda'>Por R$"+por+"</span></div>";
			}
			
			
			
			return $("<div>"+
							"<div class='tituloTooltip'>"+titulo+"</div>"+
							precos +
							"<div style='text-align: center; padding-bottom: 3px'><img src='images/Visa_Master.png' /></div>"+
						"</div>");
		}
	});
	});
}



makeTooltip('#preco_FI8907W', 'IP Wireless FI8907W', '','377,34');
makeTooltip('#preco_FI8909W', 'IP Wireless FI8909W', '','324,12');
makeTooltip('#preco_FI8918W', 'IP Wireless FI8918W', '','397,10');

makeTooltip('#preco_FI8910W', 'IP Wireless FI8910W IR-CUT', '','457,93');
makeTooltip('#preco_FI8916W', 'IP Wireless FI8916W', '','460,97');
makeTooltip('#preco_FI9821W', 'IP Wireless FI9821W MegaPixel', '','702,73');

makeTooltip('#preco_FI8910E', 'IP CÂMERA POE FI8910E IR-CUT', '','457,93');
makeTooltip('#preco_FI8904W', 'IP Wireless FI8904W', '','482,25');
makeTooltip('#preco_FI8905W', 'IP Wireless FI8905W', '','533,95');

makeTooltip('#preco_FI8906W', 'IP Wireless FI8906W', '','561,32');
makeTooltip('#preco_FI8905E', 'IP CÂMERA POE FI8905E', '','567,40');
makeTooltip('#preco_FI9801W', 'IP Wireless FI9801W', '','777,24');

makeTooltip('#preco_FI9802W', 'IP Wireless FI9802W', '','851,74');
makeTooltip('#preco_FI8919W', 'IP Wireless FI8919W', '','');
makeTooltip('#preco_FI8620', 'IP H264 FI8620', '','2.107,70');




