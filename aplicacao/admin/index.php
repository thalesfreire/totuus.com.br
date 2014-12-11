<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="br" lang="br" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<title>Totuus - Localiza��o e Monitoramento</title>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />

	<link rel="shortcut icon" href="../../favicon.ico" />
	<link href="../../css/styles.css" type="text/css" rel="stylesheet" />

</head>
<script type="text/javascript" src="../../js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="../../js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="../../js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="../../js/totuus.js"></script>
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
<!-- LOGO -->
<div id="Outer">
  <div id="Header">
    <div id="Logo"> <a href="index.php"><img src="../../images/LogoTotuus.png" border="0" id="LogoImage" alt="Totuus - Localiza��o e Monitoramento" /></a> </div>
    <br class="Clear" />
  </div>
</div>
<div id="TopMenu">
  <ul>
    <?php if(!empty($_SESSION["idUsuarioAdmin"])) { ?>
      <li><a href="usuario.php">Controle de Usu�rios</a></li>
      <li><a href="contrato.php">Controle de Contratos</a></li>
      <li><a href="servico.php">Controle de Servi�os</a></li>
      <li><a href="monitor.php">Monitor de C�meras</a></li>
	  <li><a href="tabelaPrecos.php">Tabela de Pre�os</a></li>
      <?php }?>
  </ul>
  <br class="Clear" />
</div>
<div id="msgContainer" style="display:none;">
  <div id="msgImage"><img src="images/success-icon.png" alt="Icone Sucesso" width="30" height="30" id="iconMsg" /></div>
  <div id="msgRetorno">Mensagem enviada com sucesso.</div>
</div>
<!-- CORPO -->
<div class="Content" style="margin-left: 5px;">
  <div id="bodyContainer">
    <div style="width:350px; border-width:1px;border-color:#999999; border-style:solid; margin:auto; margin-top:100px;margin-bottom:100px; text-align:center">
      <?php if(empty($_SESSION["idUsuarioAdmin"])) { ?>
      <h3 style="color:#999999;">�rea do Administrador</h3>
      <form id="formAdmin" action="../../aplicacao/actions/loginAction.php?method=loginAdmin" method="post">
        <p class="usuario">
          <input type="text" class="inputFormAdmin" value="email" size="40" id="email" name="email" onfocus="this.value='';"/>
        </p>
        <p class="usuario">
          <input type="password" class="inputFormAdmin" value="password" size="40" id="senha" name="senha" onfocus="this.value='';"/>
        </p>
        <input name="submit" type="submit" value="Entrar" />
      </form>
      <?php } else {?>
      <h3 style="color:#999999;">�rea do Administrador</h3>
      <div style="color:#999999; font-size:12px; padding-bottom: 10px;" >Usu�rio Logado:
        <?=$_SESSION["nomeUsuarioAdmin"]?>
      </div>
      <p >
        <input name="button" type="button" onclick="jsvascript:window.location='../../aplicacao/actions/loginAction.php?method=logoutAdmin';" value="Sair" />
      </p>
      <?php }?>
    </div>
  </div>
  <br class="Clear" />
  <!-- FOOTER -->
  <div id="Footer">
    
    <div style="padding-left: 470px; float: right;">Copyright &copy; 2012 Totuus. Todos os Direitos Reservados.</div>
  </div>
</div>
</body>   
</html>
		
	