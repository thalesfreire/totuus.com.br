<?php 
 
session_start();


$method = $_REQUEST['method'];

//nome do servidor (localhost)
$servidor = "localhost";
 
//usuário do banco de dados
$user = "root";
//$user = "totuus_user";
//senha do banco de dados
$senha = "";
//$senha = "Sefaz2012";
//nome da base de dados
$db = "totuus_db";
 
//executa a conexão com o banco, caso contrário mostra o erro ocorrido
$conexao = mysql_connect($servidor,$user,$senha);
 
//seleciona a base de dados daquela conexão, caso contrário mostra o erro ocorrido
$banco = mysql_select_db($db, $conexao);

switch ($method) {

	case "selecionarDispositivosPorUsuario" :
	
		try {
			
			$email = $_REQUEST['emailLogin'];
			$senha = $_REQUEST['senhaLogin'];
			$query = mysql_query( "SELECT * FROM follow_device WHERE seq_usuario = '".$email."' AND dsc_senha_usuario = '".$senha."'");			
			
			$temUsuario = false;
			
			while($usuario = mysql_fetch_array($query))
			{
				$_SESSION["idUsuario"] = $usuario['seq_usuario'];
				$_SESSION["nomeUsuario"] = $usuario['nom_usuario'];
				$temUsuario = true;
			}
			if(!$temUsuario)	
				echo "<?xml version='1.0' encoding='utf-8' ?>\n<retorno>\n<codigo>false</codigo>\n<msg>Email ou Senha incorretos.</msg>\n</retorno>";		
			
		} catch (Exception $e) {
			echo "<?xml version='1.0' encoding='utf-8' ?>\n<retorno>\n<codigo>false</codigo>\n<msg>Desculpe o inconveniente. Houve um erro na sua solicitação. Verifique os dados e envie novamente.</msg>\n</retorno>";
		}
	
		header("Location:../login.php");
		
	break;
	
	
	

}





?>
