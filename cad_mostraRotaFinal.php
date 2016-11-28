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
						<h1><a href="index.php" id="logo">Nome Rota</a></h1>
					</header>
				</div>
			</div>
			<!-- Main -->
			<div class="container">
			<div class="wrapper style1">
				<?php require 'calendario\demos\calendarioFinal.php' ?>
			<h2 align="center">Rota</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m44!1m12!1m3!1d908266.3174017246!2d-49.31361481812263!3d-27.221808866222517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m29!3e0!4m3!3m2!1d-26.8421059!2d-49.113237999999996!4m5!1s0x94df192908926f8b%3A0x3a5f29a2181bcf8!2sParque+Vila+Germ%C3%A2nica+-+R.+Alberto+Stein%2C+199+-+Velha%2C+Blumenau+-+SC%2C+89036-200!3m2!1d-26.915892399999997!2d-49.0852189!4m5!1s0x94df18bfef05d3e5%3A0xdf1af93063efa0da!2sAtaliba+Churrascaria+-+Rua+Porto+Rico+-+Ponta+Aguda%2C+Blumenau+-+SC!3m2!1d-26.919069999999998!2d-49.060945!4m5!1s0x952749bfe17eb89f%3A0xd3d6e34c9fba2a18!2sFlorian%C3%B3polis+-+SC!3m2!1d-27.594869799999998!2d-48.548219499999995!4m5!1s0x952769fc6bfe7f01%3A0xf8143f736603057c!2sPraia+dos+Ingleses%2C+Florian%C3%B3polis+-+SC!3m2!1d-27.4371624!2d-48.3894599!5e0!3m2!1spt-BR!2sbr!4v1480296305068" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
				<!--BOTÕES-->			
				<footer align="center">
					<a href="perfilUsu.php" class="button circled scrolly">Voltar</a>
				</footer>
			</div>				
		</div>