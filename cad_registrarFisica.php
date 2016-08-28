<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();
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
								<h1><a href="index.php" id="logo">Registre-se no BinBag</a></h1>
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
									<form action="usuarios-cad.php" method="post" id="formCadUsuario" >
										Nome Completo:<input type="text" name="nomeUsu" class="required" minlength="45"> 
										Email:<input type="email" name="emailUsu" class="required email">
										Senha:<input type="password" name="senhaUsu">
										Confirme a senha:<input type="password" name="senhaConfiUsu">
										Celular:<input type="text" name="celularUsu">
										
										<input type="checkbox" name="atualizacaoCelular" value="">Desejo receber atualizações por Celular</td></br>
										<input type="checkbox" name="atualizacaoEmail" value="">Desejo receber atualizações por Email</td>
								</div>
							</div>
					</div>
										<footer  align="center">
											<input type="submit" class="submit" value="Cadastrar"></input>
											<a href="index.php" class="button">Cancelar</a>
											<a href="cad_escolheTPusuario.php" class="button">Voltar</a>
										</footer>
									</form>
				</div>

<?php
	require 'rodape.php'
?>