<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="Adept Mobile" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="../js/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="../js/totuus.js"></script>
	<script type="text/javascript">
	
	 var userAgent = navigator.userAgent.toLowerCase();
	  var devices = new Array('nokia','iphone','blackberry','sony','lg',
							   'htc_tattoo','samsung','symbian','SymbianOS','elaine','palm',
							   'series60','windows ce','android','obigo','netfront',
							   'openwave','mobilexplorer','operamini');
	  var url_redirect = 'http://www.totuus.com.br';

	  function mobiDetect(userAgent, devices) {
	  	for(var i = 0; i < devices.length; i++) {
	    	if (userAgent.search(devices[i]) > 0) {
				return true;
			}
	    }
	    return false;
	  }

	  if (!mobiDetect(userAgent, devices)) {
	  	window.location.href = url_redirect;
	  }
	
	</script>
	
	
	<title>Totuus - Localiza��o e monitoramento</title>
</head>

<body>

	<div id="container">