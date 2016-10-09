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
		<title>Noticias</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">
			<!-- Header -->
			<div id="header">
				<!-- Inner -->
				<div class="inner">
					<header>
						<h1><a href="index.html" id="logo">Noticias</a></h1>
					</header>
				</div>
				<!-- Nav -->
				<?php
					require 'cabecalho.php';
				?>

			</div>

			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<div class="wrapper style2">
						<article id="main" class="container special">
							<a href="#" class="image featured"><img src="images/eventododia.jpg" alt="" /></a>
							<header>
								<h2><a href="#">Acredite é no Brasil</a></h2>
								<p>
									A foto do Morro do Cambirela coberto de neve acabou ocupando a capa dos principais jornais do Brasil nesta quarta-feira(24/07/13) 
								</p>
							</header>
							<p>
								A plasticidade da imagem e o cenário surpreendente ao lado de Florianópolis, na Serra do Tabuleiro, 
								chegaram a provocar em alguns usuários das redes sociais a impressão de que não podia se tratar de um fato real. 

								O registro histórico do fotógrafo Alvarelio Kurossu foi produzido com o uso de uma lente 400mm que, 
								com duplicador, amplia o alcance da lente para 800mm.
							</p>
							<footer>
								<a href="#" class="button">Continue Lendo</a>
							</footer>
						</article>
						
						<!-- Main -->
						<hr />
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/rio2.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Noticia 1</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
								
								<footer>
									<a href="#" class="button">Continue Lendo</a>
								</footer>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/rio2.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Noticia 2</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
								<footer>
									<a href="#" class="button">Continue Lendo</a>
								</footer>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/rio2.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Noticia 3</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
								<footer>
									<a href="#" class="button">Continue Lendo</a>
								</footer>
							</article>
						</div>
					</div>
				</div>
			</div>

<?php
	require 'rodape.php'
?>