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
		<title>Blumenau</title>
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
							<h1><a href="index.php" id="logo">Blumenau</a></h1>
						</header>
					</div>
				</div>
			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<article id="main" class="special">
						<header>
							<h2>A Cidade Alemã</h2>
							<p>
								Situada no charmoso Vale Europeu de Santa Catarina, Blumenau consegue seduzir pelas suas belezas naturais, pela sua hospitalidade e, principalmente, por organizar eventos e festas populares de grande magnitude
							</p>

							<a href="#" class="image featured"><img src="images/blumenau.jpg" alt="" /></a>
							<p>
								Blumenau é um município brasileiro do estado de Santa Catarina, Região Sul do país. Localiza-se na microrregião homônima e 
								na Mesorregião do Vale do Itajaí. É a cidade-sede da região metropolitana do Vale do Itajaí.
							</p>
						</header>
					</article>
					<h2 align="center">Onde fica?</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d455548.86611485074!2d-49.3869307788051!3d-26.872518953277506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df193144e17bf1%3A0x282a8b2473efe630!2sBlumenau+-+SC!5e0!3m2!1spt-BR!2sbr!4v1477156735218" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<!-- CIDADES ESCOLHA -->
				</br><h2 align="center">Pontos Turisticos</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a class="image featured"><img src="images/blumenau/parqueVG.jpg"/></a>
								<header>
									<h3><a href="http://www.parquevilagermanica.com.br">Parque Vila Germânica</a></h3>
								</header>
								<p>Construido para grandes acontecimentos, o Parque contempla um amplo centro de eventos que pode ser dividido em até três setores, Além disso, dispões da charmosa Vila Germaânica e de um encantador restaurante tipico ao lado da entrada principal. Contando também com diversas lojas charmosas</p>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/igrejaM.jpg"/></a>
								<header>
									<h3><a href="http://www.catedraldeblumenau.com.br">Catedral São Paulo Apóstolo</a></h3>
								</header>
								<p>Construida com pedras de grantio vermelho e com vitrais que produzem em seu interior belos efeitos de iluminação e coloração, a igreja foi inaugurada em 1958 e projetada por Gottfried Boehm. Com uma torre de 45 metros de altura e três sinos eletronicos. É um dos pontos turisticos mais procurados na cidade</p>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/teatroCG.jpg"/></a>
								<header>
									<h3><a href="http://www.teatrocarlosgomes.com.br">Teatro Carlos Gomes</a></h3>
								</header>
								<p>Conhecido como palco principal de eventos e espetaculos culturais de Blumenau, o Teatro abriga diveersos eventos que estimulam o desenvolvimento economico da região e contribuem com a formação de seus participantes, por meio de seminarios, congressos, convenções, palestras, entre outros</p>
							</article>
							
							<article>
								<a href="#" class="image featured"><img src="images/blumenau/parqueRR.jpg"/></a>
								<header>
									<h3><a href="http://www.thapyoka.com.br">Parque Ramiro Ruediger</a></h3>
								</header>
								<p>Com 45 mil metros quadrados de área, o Parque Ramiro Ruediger é a maior área de lazer da cidade. O espaço foi revitalizado nos anos de 2007 e 2008, sendo contemplado com um lago de 3.500 metros quadrados e com uma academia ao ar livre, numa parceria inédita com a cooperativa de saúde Unimed.</p>
							</article>
						</div>
					</section>

				<h2 align="center">Restaurantes</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a class="image featured"><img src="images/blumenau/restauranteThapyoka.jpg"/></a>
								<header>
									<h3><a href="http://www.thapyoka.com.br">Thapyoka</a></h3>
								</header>
								<p>Iniciando suas atividades em 1988 na cidade de Timbó, o restaurante junta boa gastronomia com a nossa maravilhosa natureza</p>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/restauranteMV.jpg"/></a>
								<header>
									<h3><a href="http://www.restaurantemoinhodovale.com.br">Moinho do Vale</a></h3>
								</header>
								<p>Construido em 1971, às margens do Rio Itajai-Açu o restaurante conserva em sua construção a tradição e a histroia de um povo</p>
							</article>

							<article>
								<a class="image featured"><img src="images/blumenau/restaurnteAT.jpg"/></a>
								<header>
									<h3><a href="http://www.ataliba.com.br">Ataliba</a></h3>
								</header>
								<p>Com 35 anos de existencia, o Ataliba faz parte da gastronomia de Santa Catarina. A rede de churrascaria é a pioneira no sistema de rodizio</p>
							</article>
							
							<article>
							<a class="image featured"><img src="images/blumenau/restaurntePJ.jpg"/></a>
								<header>
									<h3><a href="http://www.pepperjack.com.br">Pepper Jack</a></h3>
								</header>
								<p>Tendo suas receitas desenvolvidas no Brasil, e validadas nos EUA, o Pepper Jack segue os moldes tradicionais dos restaurantes americanos</p>
						</article>
						</div>
					</section>
				
				<h2 align="center">Pub's e Baladas</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a href="#" class="image featured"><img src="images/blumenau/pubBEP.jpg"/></a>
								<header>
									<h3><a href="#">The Basement English Pub</a></h3>
								</header>
								<p>Praia de Muro Alto, Praia da Vila de Porto de Galinhas e Piscinas Naturais de Porto de Galinhas</p>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/blumenau/pubAHOY.jpg"/></a>
								<header>
									<h3><a href="#">Ahoy Tavern Club</a></h3>
								</header>
								<p>Praia de Muro Alto, Praia da Vila de Porto de Galinhas e Piscinas Naturais de Porto de Galinhas</p>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/blumenau/parqueWIN.jpg"/></a>
								<header>
									<h3><a href="#">Winchester Pub</a></h3>
								</header>
								<p>Praia de Muro Alto, Praia da Vila de Porto de Galinhas e Piscinas Naturais de Porto de Galinhas</p>
							</article>
							
							<article>
								<a href="#" class="image featured"><img src="images/blumenau/rivage.jpg"/></a>
								<header>
									<h3><a href="#">Rivage</a></h3>
								</header>
								<p>Praia de Muro Alto, Praia da Vila de Porto de Galinhas e Piscinas Naturais de Porto de Galinhas</p>
							</article>
						</div>
					</section>

				<!--BOTÕES-->			
				<footer align="center">
					<a href="cad_escolheCidades.php" class="button circled scrolly">OK</a>
				</footer>
			</div>

<?php
	require 'rodape.php'
?>