<?php 

session_start();

include("../../conectar.php");

$method =  $_REQUEST['method'];

switch ($method) {

	case "login" :

		$usuario = $_REQUEST['inUsername'];
		$senha = $_REQUEST['inPassword'];
		$query = mysql_query("SELECT * FROM usuario WHERE dsc_email_usuario = '".$usuario."' AND dsc_senha_usuario = '".$senha."'");			
		
		
		$temUsuario = 0;
		
		while($usuarioQuery = mysql_fetch_array($query))
		{
			$_SESSION["idUsuario"] = $usuarioQuery['seq_usuario'];
			$_SESSION["nomeUsuario"] = $usuarioQuery['dsc_nom_usuario'];
			$temUsuario = 1;
		}

		if($temUsuario == 1) {
			//echo "<script>window.location = '../../areaCliente.php';</script>";
			echo "<script>window.location = '../server93.php';</script>";
		}
		else {
			echo "<script>window.location = '../../index.php';</script>";
		}
			
			
	
	break;
	
	
	case "loginAdmin" :

		$usuario = $_REQUEST['email'];
		$senha = $_REQUEST['senha'];
		
		$query = mysql_query("SELECT * FROM usuario WHERE sta_admin = 1 AND dsc_email_usuario = '".$usuario."' AND dsc_senha_usuario = '".$senha."'");	
				
		
		$temUsuario = 0;
		
		while($usuarioQuery = mysql_fetch_array($query))
		{
			$_SESSION["idUsuarioAdmin"] = $usuarioQuery['seq_usuario'];
			$_SESSION["nomeUsuarioAdmin"] = $usuarioQuery['dsc_nom_usuario'];
			$temUsuario = 1;
		}
		
		echo "<script>window.location = '../admin/index.php'</script>";
		
			
	
	break;
	
	
	case "logout" :
	
		try {
			
			$_SESSION["idUsuario"] = "";
			$_SESSION["nomeUsuario"] = "";
								
		} catch (Exception $e) {
			echo "<?xml version='1.0' encoding='utf-8' ?>\n<retorno>\n<codigo>false</codigo>\n<msg>Desculpe o inconveniente. Houve um erro nna sua solicitação. Verifique os dados e envie novamente.</msg>\n</retorno>";
		}
	
		echo "<script>window.location = '../../index.php';</script>";
		
	break;
	
	case "logoutAdmin" :
	
		try {
			
			$_SESSION["idUsuarioAdmin"] = "";
			$_SESSION["nomeUsuarioAdmin"] = "";
								
		} catch (Exception $e) {
			echo "<?xml version='1.0' encoding='utf-8' ?>\n<retorno>\n<codigo>false</codigo>\n<msg>Desculpe o inconveniente. Houve um erro nna sua solicitação. Verifique os dados e envie novamente.</msg>\n</retorno>";
		}
	
		echo "<script>window.location = '../admin/index.php'</script>";
		
	break;
	

}





?>
