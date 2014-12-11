<?php


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


/*

//nome do servidor (localhost)
$servidor = "mysql5";
 
//usuário do banco de dados
$user = "totuusftp";
 
//senha do banco de dados
$senha = "xazAxZ9B";
 
//nome da base de dados
$db = "totuus";
 
//executa a conexão com o banco, caso contrário mostra o erro ocorrido
$conexao = mysql_connect($servidor,$user,$senha);
 
//seleciona a base de dados daquela conexão, caso contrário mostra o erro ocorrido
$banco = mysql_select_db($db, $conexao);

*/
 
?>