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
		<title>Selecione as datas</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css"/>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	
	<body class="no-sidebar">
		<div id="page-wrapper">
			<!-- Header -->
			<div id="headerPlacas">
				<?php
					require 'cabecalho.php';
				?>
				<!-- Inner -->
				<div class="inner">
					<header>
						<h1><a href="index.php" id="logo">Nome rota</a></h1>
					</header>
				</div>
			</div>
			<!-- Main -->
			<div class="wrapper style1">
				<!--BOTÕES-->			
				<footer align="center">
					<a href="cad_escolheDatas.php" class="button circled scrolly">Voltar</a>&nbsp&nbsp<a href="index.php" class="button circled scrolly">Cancelar</a>&nbsp&nbsp<a href="perfil.php" class="button circled scrolly">Salvar</a>
				</footer>
			</div>				
		</div>
		
<?php
	require 'rodape.php'
?>