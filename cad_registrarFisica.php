<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();

	if($_POST)
	{
		$nome 				= $_POST["nomeUsu"];
		$email 				= $_POST["emailUsu"];
		$senha 				= sha1($_POST['senhaUsu']);
		$senhaConfiUsu 		= sha1($_POST["senhaConfiUsu"]);
		$celular 			= str_replace("-","",str_replace(")","", str_replace("(","",$_POST["celularUsu"])));
		$atualizacaoCelular = ( isset($_POST["atualizacaoCelular"]) )? $_POST["atualizacaoCelular"] : "0" ;
		$atualizacaoEmail 	= ( isset($_POST["atualizacaoEmail"]) )? $_POST["atualizacaoEmail"] : "0" ;

		$banco->bind("nome",$nome);
		$banco->bind("email",$email);
		$banco->bind("senha",$senha);
		$banco->bind("celular",$celular);
		$banco->bind("atuCel",$atualizacaoCelular);
		$banco->bind("atuEmail",$atualizacaoEmail);

		$banco->query("insert into usuario (id_usuario, nm_usuario, email, senha, celular, atualiza_celular, atualiza_email, TIPO_USUARIO_id_tipo_usuario, foto) values (null, :nome, :email, :senha, :celular, :atuCel, :atuEmail, 1, '') ");		
		header('Location:index.php');
	}
?>

<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Registro de Usuario</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header">
					<!-- Inner -->
						<div class="inner">
							<header>
								<h1>Registre-se no <?php echo NOME_SITE; ?></h1>
							</header>
						</div>

					<?php
						require 'cabecalho.php';
					?>
				</div>
			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<h2>Digite seus dados:</a></h2></br>
					<div class="content">
						<div class="8u 12u(mobile)" id="content">
							<form action="cad_registrarFisica.php" method="post" id="formCadUsuario">
								Nome Completo:<input type="text" name="nomeUsu" id="nomeUsu" class="required" maxlength="45"> 
								Email:<input type="email" name="emailUsu" class="required">
								Senha:<input type="password" name="senhaUsu">
								Confirme a senha:<input type="password" name="senhaConfiUsu">
								Celular:<input type="text" name="celularUsu" class="phone">
								
								<input type="checkbox" name="atualizacaoCelular" value="1">Desejo receber atualizações por Celular</td></br>
								<input type="checkbox" name="atualizacaoEmail" value="1">Desejo receber atualizações por Email</td>
						</div>
					</div>
				</div>
								<footer align="center">
									<a href="cad_escolheTPusuario.php" class="button">Voltar</a>
									<a href="index.php" class="button">Cancelar</a>
									<input type="submit" value="Cadastrar" name="cadastrar" class="button">
								</footer>
							</form>
			</div>

<?php
	require 'rodape.php'
?>