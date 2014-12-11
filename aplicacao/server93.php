<?php 
	session_start();
	require_once("classes/br.com.totuus/UsuarioManager.php");
	
	$usuarioManager = new UsuarioManager();
	$usuario = $usuarioManager->findById($_SESSION["idUsuario"]);
?>
<body>
   <form action="http://totuus.server93.com/Login.aspx" method="post" id="formLoginGpsGate">
	   <table>
		   <tr>
			   <td>
				   <input type="hidden" name="inUsername" value="<?=$usuario->nomUsuarioGpsgate;?>"/>
			   </td>
			   <td>
				   <input type="hidden" name="inPassword" value="<?=$usuario->dscSenhaUsuario;?>"/>
			   </td>
			   
		   </tr>
	   </table>
   </form>
</body>
<script language="javascript">document.getElementById("formLoginGpsGate").submit();</script>