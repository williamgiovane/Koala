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
		<title>Parque Vila Germânica</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
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
							<h1><a href="index.php" id="logo">Parque Vila Germânica</a></h1>
						</header>
					</div>
				</div>
			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<article id="main" class="special">
						<header>
							<h2>Centro de eventos e cultura de Blumenau</h2>
							<p>
								O Parque Vila Germânica é um centro de eventos localizado na cidade de Blumenau, Santa Catarina. Neste ambiente acontece os principais eventos da cidade, incluindo o mais famoso e típico: a Oktoberfest.
							</p>

							<a href="#" class="image featured"><img src="images/Blumenau/parqueVG.jpg" alt="" /></a>
							<p>
								O parque, com sua arquitetura de inspiração européia, contém diversos restaurantes e lojas,
								com souvenires, produtos regionais e artesanato típico.
							</p>
						</header>
					</article>
					<h2 align="center">Onde fica?</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14230.437146994143!2d-49.0852189!3d-26.9158924!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a5f29a2181bcf8!2sParque+Vila+Germ%C3%A2nica!5e0!3m2!1spt-BR!2sbr!4v1480295649508" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen>
					</iframe>
				</div>
				<!-- CIDADES ESCOLHA -->
				</br><h2 align="center">Imagens do local</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a class="image featured"><img src="images/blumenau/vila/vg1.jpg"/></a>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/vila/vg2.jpg"/></a>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/vila/vg3.jpg"/></a>
							</article>
							
							<article>
								<a class="image featured"><img src="images/blumenau/vila/vg4.jpg"/></a>
							</article>
						</div>
					</section>
				
				<!-- INFOS -->
				<article id="main" class="special">
						<header>
							<h2>Vila Germânica</h2>
							<p>R. Alberto Stein, 199 - Velha, Blumenau - SC
							</p>
							<p>(47) 3381-7700</p>
							<a href="http://www.parquevilagermanica.com.br/">Site</a>
							<p>Entrada gratuita	</p>
							
						</header>
					</article>
				


				<!--BOTÕES-->			
				<footer align="center">
					<a href="cad_escolheAtracoesBlumenau.php" class="button circled scrolly">OK</a>
				</footer>
			</div>

<?php
	require 'rodape.php'
?>