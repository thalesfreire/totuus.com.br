<?php 
session_start();


	$servidor = "localhost";
		 
	//usuário do banco de dados
	$user = "root";
	 
	//senha do banco de dados
	$senha = "";
	 
	//nome da base de dados
	$db = "totuus_db";
	 
	//executa a conexão com o banco, caso contrário mostra o erro ocorrido
	$conexao = mysql_connect($servidor,$user,$senha);
	 
	//seleciona a base de dados daquela conexão, caso contrário mostra o erro ocorrido
	$banco = mysql_select_db($db, $conexao);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="br" lang="br" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<title>Totuus - Localização e Monitoramento</title>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />

	<link rel="shortcut icon" href="../favicon.ico" />
	<link href="../css/styles.css" type="text/css" rel="stylesheet" />

</head>
<script type="text/javascript" src="../js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="../js/totuus.js"></script>
<script type="text/javascript" src="js/totuusFollow.js"></script>
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
 
</script>

<body>
	<div id="Container">
	
		<?php include("topoFollow.php") ?>
		<?php include("menuFollow.php") ?>
		
		<div id="msgContainer" style="display:none;">
			<div id="msgImage"><img src="../images/success-icon.png" width="30" height="30" id="iconMsg" /></div>
			<div id="msgRetorno">Mensagem enviada com sucesso.</div>
		</div>