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
		<title>Oktoberfest</title>
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
							<h1><a href="index.php" id="logo">Oktoberfest</a></h1>
						</header>
					</div>
				</div>
			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<article id="main" class="special">
						<header>
							<h2>A festa mais alemã das Américas</h2>
							<p>
								A Oktoberfest de Blumenau é um festival de tradições germânicas que ocorre na cidade de Blumenau, Santa Catarina durante o mês de Outubro. Ela é uma das celebrações que surgiram no mundo similares à Oktoberfest de Munique, na Alemanha.
							</p>

							<a href="#" class="image featured"><img src="images/Blumenau/oktober/ok1.jpg" alt="" /></a>
							<p>
								Com uma programação grande e cheia de apresentações musicais e folclóricas, o evento sempre surpreende.
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
								<a class="image featured"><img src="images/blumenau/oktober/ok2.jpg"/></a>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/oktober/ok3.jpg"/></a>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/oktober/ok4.jpg"/></a>
							</article>
							
							<article>
								<a class="image featured"><img src="images/blumenau/oktober/ok5.jpg"/></a>
							</article>
						</div>
					</section>
				
				<!-- INFOS -->
				<article id="main" class="special">
						<header>
							<h2>Oktoberfest</h2>
							<p>R. Alberto Stein, 199 - Velha, Blumenau - SC
							</p>
							<p>(47) 3381-7700</p>
							<a href="http://www.oktoberfestblumenau.com.br/">Site</a>
							<p>De 5 a 23 de outubro</p>
							<p>Domingos, terças (exceto véspera de feriado), quartas (exceto feriado) e quintas-feiras: R$ 10.
								<p>Sextas-feiras e feriado (12/10): R$ 30.</p>
								<p>Sábados e véspera de feriado (11/10): R$ 40.</p>
								<p>Crianças até 12 anos: Não pagam entrada.</p>
							
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