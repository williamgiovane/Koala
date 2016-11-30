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
		<title>Ahoy</title>
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
							<h1><a href="index.php" id="logo">Ahoy</a></h1>
						</header>
					</div>
				</div>
			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<article id="main" class="special">
						<header>
							<h2>Ahoy</h2>
							<p>
								Balada com temas de piratas animada por bandas de rock eletrônico, grupos cover e mixagem DJ, com pista e bar.
							</p>

							<a href="#" class="image featured"><img src="images/Blumenau/ah/ah1.jpg" alt="" /></a>
							<p>
								O Ahoy! é uma casa de shows inaugurada em março de 2010
								na cidade de Blumenau/SC. Idealizado, projetado e administrado
								 por amantes do rock, o bar celebra a música, a diversão e o talento</p>
						</header>
					</article>
					<h2 align="center">Onde fica?</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14232.514485998068!2d-49.0772596!3d-26.8994128!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7c0ee74229954ca!2sAhoy*21+Tavern+Club!5e0!3m2!1spt-BR!2sbr!4v1480465540140" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</iframe>
				</div>
				<!-- CIDADES ESCOLHA -->
				</br><h2 align="center">Imagens do local</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a class="image featured"><img src="images/blumenau/ah/ah2.jpg"/></a>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/ah/ah3.jpg"/></a>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/ah/ah4.jpg"/></a>
							</article>
							
							<article>
								<a class="image featured"><img src="images/blumenau/ah/ah5.jpg"/></a>
							</article>
						</div>
					</section>
				
				<!-- INFOS -->
				<article id="main" class="special">
						<header>
							<h2>Ahoy!</h2>
							<p>R. São Paulo, 2083 - Itoupava Seca, Blumenau - SC</p>
							<p>(47) 3209-0970</p>
							<a href="http://www.ahoyblumenau.com.br/">Site</a>
							<p>Valor de entrada indeterminado.Consulte no site do estabelecimento a programação completa.</p>
							
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