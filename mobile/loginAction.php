<?php 

session_start();

//nome do servidor (localhost)
$servidor = "localhost";
 
//usuário do banco de dados
$user = "totuus_user";
 
//senha do banco de dados
$senha = "Sefaz2012";
 
//nome da base de dados
$db = "totuus_db";
 
//executa a conexão com o banco, caso contrário mostra o erro ocorrido
$conexao = mysql_connect($servidor,$user,$senha);
 
//seleciona a base de dados daquela conexão, caso contrário mostra o erro ocorrido
$banco = mysql_select_db($db, $conexao);



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
	
		echo "<script>window.location = 'areaCliente.php';</script>";	
	
	break;
	
	
	case "logout" :
	
		try {
			
			$_SESSION["idUsuario"] = "";
			$_SESSION["nomeUsuario"] = "";
								
		} catch (Exception $e) {
			echo "<?xml version='1.0' encoding='utf-8' ?>\n<retorno>\n<codigo>false</codigo>\n<msg>Desculpe o inconveniente. Houve um erro nna sua solicitação. Verifique os dados e envie novamente.</msg>\n</retorno>";
		}
	
		echo "<script>window.location = 'areaCliente.php';</script>";
		
	break;
	

}





?>
