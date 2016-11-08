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
							<h1><a href="index.php" id="logo">Selecione as atrações de Florianópolis</a></h1>
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
								<a href="#" class="image featured"><img src="images/Floripa/praiaIngleses.jpg"/></a>
								<header>
									<h3>Praia dos Ingleses</a></h3>
									<input type="checkbox" name="vilaGermanica" value="praiaIngleses">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/Floripa/museuArte.jpg"/></a>
								<header>
									<h3>Museu de Arte de Santa Catarina</a></h3>
									<input type="checkbox" name="vilaGermanica" value="museuArte">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/Floripa/orlandoScarpelli.jpg"/></a>
								<header>
									<h3>Estádio Orlando Scarpelli</a></h3>
									<input type="checkbox" name="vilaGermanica" value="orlandoScarpelli">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>
							
							<article>
							<a href="#" class="image featured"><img src="images/Floripa/santoLisboa.jpg"/></a>
							<header>
								<h3>Santo Antônio de Lisboa</a></h3>
								<input type="checkbox" name="vilaGermanica" value="santoLisboa">Adicionar
								<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
							</header>
						</article>
						</div>
					</section>
					
					<h2 align="center">Restaurantes</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a href="#" class="image featured"><img src="images/Floripa/joaoBarro.jpg"/></a>
								<header>
									<h3><a href="#">João de Barro</a></h3>
									<input type="checkbox" name="vilaGermanica" value="joaoBarro">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/Floripa/antonio.jpg"/></a>
								<header>
									<h3><a href="#">Antonio's</a></h3>
									<input type="checkbox" name="vilaGermanica" value="antonio">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/Floripa/pousadaSonhos.jpg"/></a>
								<header>
									<h3><a href="#">Pousada dos Sonhos</a></h3>
									<input type="checkbox" name="vilaGermanica" value="pousadaSonhos">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>
							
							<article>
							<a href="#" class="image featured"><img src="images/Floripa/barbaNegra.jpg"/></a>
							<header>
								<h3><a href="#">Delícias Portuguesas</a></h3>
								<input type="checkbox" name="vilaGermanica" value="barbaNegra">Adicionar
								<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
							</header>
						</article>
						</div>
					</section>
					
					<h2 align="center">Pub's e Baladas</h2>
					<section class="carousel">
						<div class="reel">
							<article>
								<a href="#" class="image featured"><img src="images/Floripa/fields.jpg"/></a>
								<header>
									<h3><a href="#">Fields</a></h3>
									<input type="checkbox" name="vilaGermanica" value="fields">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/Floripa/seteNight.jpg"/></a>
								<header>
									<h3><a href="#">Sete Night Club</a></h3>
									<input type="checkbox" name="vilaGermanica" value="seteNight">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/Floripa/roof.jpg"/></a>
								<header>
									<h3><a href="#">The Roof</a></h3>
									<input type="checkbox" name="vilaGermanica" value="roof">Adicionar
									<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
								</header>
							</article>
							
							<article>
							<a href="#" class="image featured"><img src="images/Floripa/devassa.jpg"/></a>
							<header>
								<h3><a href="#">Cervejaria Devassa</a></h3>
								<input type="checkbox" name="vilaGermanica" value="devassa">Adicionar
								<!--</br><input type="button" name="adicionarpararota" value="Adicionar"></br>-->
							</header>
						</article>
						</div>
					</section>
					
					<!--BOTÕES-->			
					<footer align="center">
						<a href="cad_escolheAtracoesBlumenau.php" class="button circled scrolly">Voltar</a>&nbsp&nbsp<a href="index.php" class="button circled scrolly">Cancelar</a>&nbsp&nbsp<a href="cad_escolheDatas.php" class="button circled scrolly">Próximo</a>
					</footer>					
				</div>
						
<?php
	require 'rodape.php'
?>