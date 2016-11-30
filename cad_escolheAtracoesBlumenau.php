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
		<title>Selecione as cidades</title>
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
						<h1><a href="index.php" id="logo">Selecione as atrações de Blumenau</a></h1>
					</header>
				</div>
			</div>
			<!-- Main -->
			<div class="wrapper style1">
				<!-- Ponto Turisticos -->
					<h2 align="center">Pontos Turisticos</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a href="cad_visualizaPontos.php" class="image featured"><img src="images/blumenau/parqueVG.jpg"/></a>
								<header>
									<h3>Parque Vila Germânica</a></h3>
									<input type="checkbox" name="vilaGermanica" value="vilaGermanica">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/blumenau/igrejaM.jpg"/></a>
								<header>
									<h3>Catedral São Paulo Apóstolo</a></h3>
									<input type="checkbox" name="vilaGermanica" value="igrejaM">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/blumenau/teatroCG.jpg"/></a>
								<header>
									<h3>Teatro Carlos Gomes</a></h3>
									<input type="checkbox" name="vilaGermanica" value="teatroCG">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>
							
							<article>
							<a href="#" class="image featured"><img src="images/blumenau/parqueRR.jpg"/></a>
							<header>
								<h3>Parque Ramiro Ruediger</a></h3>
								<input type="checkbox" name="vilaGermanica" value="parqueRR">Adicionar
								<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
							</header>
						</article>
						</div>
					</section>
					
					<h2 align="center">Restaurantes</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a href="#" class="image featured"><img src="images/blumenau/restauranteThapyoka.jpg"/></a>
								<header>
									<h3><a href="#">Thapyoka</a></h3>
									<input type="checkbox" name="vilaGermanica" value="restauranteThapyoka">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/blumenau/restauranteMV.jpg"/></a>
								<header>
									<h3><a href="#">Moinho do Vale</a></h3>
									<input type="checkbox" name="vilaGermanica" value="restauranteMV">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/blumenau/restaurnteAT.jpg"/></a>
								<header>
									<h3><a href="#">Ataliba</a></h3>
									<input type="checkbox" name="vilaGermanica" value="restaurnteAT">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>
							
							<article>
							<a href="#" class="image featured"><img src="images/blumenau/restaurntePJ.jpg"/></a>
							<header>
								<h3><a href="#">Pepper Jack</a></h3>
								<input type="checkbox" name="vilaGermanica" value="restaurntePJ">Adicionar
								<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
							</header>
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
									<input type="checkbox" name="vilaGermanica" value="pubBEP">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="cad_visualizaEstabelecimento.php" class="image featured"><img src="images/blumenau/pubAHOY.jpg"/></a>
								<header>
									<h3><a href="#">Ahoy Tavern Club</a></h3>
									<input type="checkbox" name="vilaGermanica" value="pubAHOY">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/blumenau/parqueWIN.jpg"/></a>
								<header>
									<h3><a href="#">Winchester Pub</a></h3>
									<input type="checkbox" name="vilaGermanica" value="parqueWIN">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>
							
							<article>
							<a href="#" class="image featured"><img src="images/blumenau/rivage.jpg"/></a>
							<header>
								<h3><a href="#">Rivage</a></h3>
								<input type="checkbox" name="vilaGermanica" value="rivage">Adicionar
								<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
							</header>
						</article>
						</div>
					</section>

					<h2 align="center">Eventos</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a href="cad_visualizaEvento.php" class="image featured"><img src="images/Blumenau/oktober/ok1.jpg"/></a>
								<header>
									<h3><a href="cad_visualizaEvento.php">Oktoberfest</a></h3>
									<input type="checkbox" name="vilaGermanica" value="restauranteThapyoka">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>
						</div>
					</section>
				
				<!--BOTÕES-->			
				<footer align="center">
					<a href="cad_escolheCidades.php" class="button circled scrolly">Voltar</a>&nbsp&nbsp<a href="index.php" class="button circled scrolly">Cancelar</a>&nbsp&nbsp<a href="cad_escolheDatas.php" class="button circled scrolly">Próximo</a>
				</footer>					
			</div>
						
<?php
	require 'rodape.php'
?>