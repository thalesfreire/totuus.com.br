<?php 
session_start();
//ob_flush();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="br" lang="br" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<title>Totuus - Localiza&ccedil;&atilde;o e Monitoramento</title>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	
	<meta name="description" content="Totuus - Localização e Monitoramento"/> 
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="Fortaleza Ce,fortaleza,ce,Localização e Monitoramento,Totuus,Rastreador Veicular GPS,GPS,cameras ip,cameras segurança,camera ip,camera seguranca,rastreamento veicular,localizacao veiculo,localizacao carro,localizacao moto,rastreamento carro,rastreamento moto,monitoramento,camera pet shopping,monitoramento residencial,monitoramento comercial,monitoramento shopping,sistema de rastreamento,controle de frota,Foscam,Foscam Fortaleza ce,Foscam Fortaleza,Foscam CE,bloqueador veicular">

	<link rel="shortcut icon" href="favicon.ico" />
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
	
	<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/totuus.js"></script>
	<!-- Google Analytics -->
	<script type="text/javascript">
	 
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-30032054-1']);
	  _gaq.push(['_trackPageview']);
	 
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	  
	  var userAgent = navigator.userAgent.toLowerCase();
	  var devices = new Array('nokia','iphone','blackberry','sony','lg',
							   'htc_tattoo','samsung','symbian','SymbianOS','elaine','palm',
							   'series60','windows ce','android','obigo','netfront',
							   'openwave','mobilexplorer','operamini');
	  var url_redirect = 'http://m.totuus.com.br';

	  function mobiDetect(userAgent, devices) {
	  	for(var i = 0; i < devices.length; i++) {
	    	if (userAgent.search(devices[i]) > 0) {
				return true;
			}
	    }
	    return false;
	  }

	  if (mobiDetect(userAgent, devices)) {
	  	window.location.href = url_redirect;
	  }
	 
	</script>
	

</head>


<body>
	<div id="Container">
	
		<?php include("topo.php") ?>
		<?php include("menu.php") ?>
		
		<div id="msgContainer" style="display:none;">
			<div id="msgImage"><img src="images/success-icon.png" width="30" height="30" id="iconMsg" /></div>
			<div id="msgRetorno">Mensagem enviada com sucesso.</div>
		</div>