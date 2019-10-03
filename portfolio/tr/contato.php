<?php
if (isset($_POST['BTEnvia'])) {
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE - ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = ""; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = ""; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Assuntpo = $assunto \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-Mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Thricya Ranaee</title>
	<link rel="stylesheet" href="css/style.css?version=70">
	<link rel="stylesheet" href="css/hover.css">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/portfolio.css">
</head>
<body>
	<!-- PORTFOLIO -->
	<a href="../../index.html">
		<div id="backbutton">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="arrow">
				<path d="M3 12l18-12v24z"/>
			</svg>
		</div>
	</a>
	<div id="aviso">
		<span class="alert">AVISO:</span> Design do site não desenvolvido por mim, apenas o código, recebi as imagens do protótipo e apenas codifiquei.
	</div>
	<!-- PORTFOLIO END -->
	<div id="topbarfundo"></div>
	<div id="topbarfundo2"></div>
	<div id="topbar">
		<div id="logo"><img src="img/logo.png"></div>
		<div class="menu">
			<a href="index.html" id="link1">Home</a>
			<a href="sobre.html" id="link2"">Sobre</a>
			<a href="design.html" id="link3">Design de Multimidia</a>
			<a href="interface.html" id="link4">Interface e Usabilidade</a>
			<a href="contato.html" id="link5" style="background: #330000; color: #ff9999;">Contato</a>
		</div>
		<div id="social">
			<a href="https://www.behance.net/thricyacav3fa7" class="hvr-grow" target="_blank"><img src="img/behance.png"></a>
			<a href="https://www.facebook.com/thricya.moreiraesilva" class="hvr-grow" target="_blank"><img src="img/facebook.png"></a>
			<a href="https://www.instagram.com/thricya" class="hvr-grow" target="_blank"><img src="img/instagram.png"></a>
		</div>
	</div>
	<div id="contentfundo"></div>
	<div id="content">
		<div class="center" id="form">
			<form action="<?php $PHP_SELF; ?>" method="POST">
				Nome: <input type="text" name="nome" placeholder="Digite seu nome..." required="required" style="margin-left: 15px;"><br />
				Email: <input type="email" name="email" placeholder="Digite seu email..." required="required" style="margin-left: 16px;"><br />
				Assunto: <input type="text" name="assunto" placeholder="Digite o assunto..." required="required"><br /><br />
				Mensagem:<br />
				<textarea placeholder="Digite sua Mensagem..." rows="4" cols="26" required="required" name="mensagem"></textarea><br /><br />
				<div style="text-align: center; font-size: 14px;">
					* Todos os campos são obrigatórios<br /><br />
					<input type="submit" name="BTEnvia" value="Enviar">
				</div>
				<br />
			</form>
		</div>
	</div>
	<div id="footerfundo"></div>
	<footer class="center">
		Copyright © Thricya Ranaee 2018 - Todos os Direitos Reservados
	</footer>
</body>
</html>