function enviarEmail() {
	
	if(validateForm()) {

		var nome = document.getElementById('nome').value;
		var email = document.getElementById('email').value;
		var fone = document.getElementById('fone').value;
		var cidade = document.getElementById('cidade').value;
		var estado = document.getElementById('estado').value;
		var assunto = document.getElementById('assunto').value;
		var mensagem = document.getElementById('mensagem').value;
		
		$.get("aplicacao/actions/emailAction.php?method=enviar&nome="+nome+"&email="+email+"&fone="+fone+"&cidade="+cidade+"&estado="+estado+"&assunto="+assunto+"&mensagem="+mensagem,{}, function(data) {
			
			var codigo = $(data).find("codigo").text();
			var msg = $(data).find("msg").text();
			
			if(codigo == 'true') {
				showMensagemSucesso(msg);	
			} else {
				showMensagemErro(msg);
			}
			
		});
		
	} else {
		showMensagemErro("Todos os campos são obrigatórios.");
	}
	
}

function enviarEmailMobile() {
	
	if(validateForm()) {

		var nome = document.getElementById('nome').value;
		var email = document.getElementById('email').value;
		var fone = document.getElementById('fone').value;
		var cidade = document.getElementById('cidade').value;
		var estado = document.getElementById('estado').value;
		var assunto = document.getElementById('assunto').value;
		var mensagem = document.getElementById('mensagem').value;
		
		$.get("../aplicacao/actions/emailAction.php?method=enviar&nome="+nome+"&email="+email+"&fone="+fone+"&cidade="+cidade+"&estado="+estado+"&assunto="+assunto+"&mensagem="+mensagem,{}, function(data) {
			
			var codigo = $(data).find("codigo").text();
			var msg = $(data).find("msg").text();
			
			if(codigo == 'true') {
				alert(msg);	
				clearForm();
			} else {
				alert(msg);
			}
			
		});
		
	} else {
		alert("Todos os campos são obrigatórios.");
	}
	
}

function clearForm() {

	$("form[id!='formLogin'] input:text, textarea, select").each(function(){
		$(this).val("");
		if($(this).attr('id') == 'estado')
			$(this).val('CE');
	})
	
}


function showMensagemErro(mensagem) {
	$("#msgRetorno").html(mensagem);
	$("#msgContainer").css('border-color', '#CC0000');
	$("#msgContainer").css('color', '#CC0000');
	$("#iconMsg").attr('src', 'images/error-icon.png');
	$("#msgContainer").fadeIn('slow');
	setTimeout("$('#msgContainer').fadeOut(2000);", 5000);
}

function showMensagemSucesso(mensagem) {
	$("#msgRetorno").html(mensagem);	
	$("#msgContainer").css('border-color', '#009900');
	$("#msgContainer").css('color', '#009900');
	$("#iconMsg").attr('src', 'images/success-icon.png');
	$("#msgContainer").fadeIn('slow');
	setTimeout("$('#msgContainer').fadeOut(2000);clearForm();", 5000);
}

function validateForm() {
	var retorno = true;
	
	$("form[id!='formLogin'] input:text, textarea").each(function(){
		if($(this).val() == "")
			retorno = false;
	});
	
	return retorno;
}


function validaLogin() {
	var usuario = document.getElementById('inUsername').value;
	var senha = document.getElementById('inPassword').value;
	var retorno = true
	if(usuario != "" && senha != "" && usuario != "Usuário" && senha != "Password") {
		//login();
		document.getElementById("formLogin").submit();
	} 
	
}

function login() {
   var username = document.getElementById('inUsername').value;
   var password = document.getElementById('inPassword').value;

   GpsGate.Server.MyService.login(username, password,
	   function(result)
	   {
		   if(result == true)  {
			  window.location.href = 'http://totuus.server93.com/AppGateway.aspx';
		   }
		   else {
			   alert('Login not ok');
		   }
	   }
   );
}

function getParameterByName(name)
{
  name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
  var regexS = "[\\?&]" + name + "=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.search);
  if(results == null)
    return "";
  else
    return decodeURIComponent(results[1].replace(/\+/g, " "));
}

function showImgPrincipal(imgPrincipal, thumb) {

	$('a[name=thumb]').each(function(){
		if($(this).attr('id') == thumb)	{						 
			$(this).attr('class', 'zoom-photo-1 sel');
		}
		else {
			$(this).attr('class', 'zoom-photo-1');
		}
	});
	
	$('img[name=imgPrincipal]').each(function(){
		if($(this).attr('id') == imgPrincipal) {					  
			$(this).css('display', 'inline');
		} else {
			$(this).css('display', 'none');
		}
	});
	

}


//---------------TOOLTIP------------------------------



//------------------END TOOLTIP----------------------------------------------
