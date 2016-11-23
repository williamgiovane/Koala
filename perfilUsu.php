<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();
?>

<!doctype html>
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
							<h1>Seu Perfil</h1>
						</header>
					</div>

				<?php
					require 'cabecalho.php';
				?>
			</div>

			<!-- Main -->
			<div class="wrapper style1">
				<!-- Rotas -->
				<h2 align="center">Minhas Rotas</h2>
				<section class="carousel">
					<div class="reel">
						<article>
							<a href="cad_mostraRotaFinal.php" class="image featured"><img src="images/blumenau/parqueVG.jpg"/></a>
							<header>
								<h3>Rota Blumenau</a></h3>
							</header>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Floripa/praiaIngleses.jpg"/></a>
							<header>
								<h3>Rota Floripa</a></h3>
							</header>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/chapeco.jpg"/></a>
							<header>
								<h3>Rota Chapeco</a></h3>
							</header>
						</article>
						
						<article>
						<a href="#" class="image featured"><img src="images/joinville.jpg"/></a>
							<header>
								<h3>Rota Joinville</a></h3>
							</header>
					</article>
					</div>
				</section>
				
				<!--BOTÕES-->			
				<footer align="center">
					<a href="index.php" class="button circled scrolly">Voltar</a>
				</footer>					
			</div>

<?php
	require 'rodape.php'
?>