<?php

	$lat = $_REQUEST['lat'];
	$long = $_REQUEST['long'];
	$alt = $_REQUEST['alt'];
	$deviceID = $_REQUEST['deviceID'];
	

	//nome do servidor (localhost)
	$servidor = "localhost";
	 
	//usuário do banco de dados
	//$user = "root";
	 $user = "totuus_user";
	//senha do banco de dados
	//$senha = "";
	 $senha = "Sefaz2012";
	//nome da base de dados
	$db = "totuus_db";
	 
	//executa a conexão com o banco, caso contrário mostra o erro ocorrido
	$conexao = mysql_connect($servidor,$user,$senha);
	 
	//seleciona a base de dados daquela conexão, caso contrário mostra o erro ocorrido
	$banco = mysql_select_db($db, $conexao);



	$temLocalizacao = true;

	$query = mysql_query("SELECT Count(*) as tem_localizacao FROM follow_localizacao WHERE seq_device = '".$deviceID."'");
	$array = mysql_fetch_array($query);
	
	if($array["tem_localizacao"] == 0)
		$temLocalizacao = false;

	if($temLocalizacao) {
		mysql_query("UPDATE follow_localizacao SET dsc_latitude = '".$lat."', dsc_longitude = '".$long."', dsc_altitude = '".$alt."', dat_localizacao = now() WHERE seq_device = '".$deviceID."'");
	} else {
		mysql_query("INSERT INTO follow_localizacao (seq_device, dsc_latitude, dsc_longitude, dsc_altitude) 
			VALUES ('".$deviceID."','".$lat."', '".$long."', '".$alt."')");
	}
		
?>