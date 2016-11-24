<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();

	if($_POST)
	{
		$_SESSION["nomeRota"] = $_POST["nomeRota"];
		$periodoInicial = $_POST["periodoInicial"];
		$periodoFinal   = $_POST["periodoFinal"];

		$banco->bind("nome",$nomeRota);
		$banco->bind("periodoInicial",$periodoInicial);
		$banco->bind("periodoFinal",$periodoFinal);

	}
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
					<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="index.php" id="logo">Planejando</a></h1>
						</header>
					</div>
					
					<?php
						require 'cabecalho.php';
					?>
				</div>
			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<article id="main" class="special">
						<header>
							<h2>Selecione as cidades</h2>
							<p>Essas são as cidades pertencentes aos seus estados escolhidos.</br></p>
							<h2>Santa Catarina</h2>
							<input type="search" name="procuracidade" placeholder="Procure a Cidade">
						</header>
					</article>
				</div>
				
				<!-- CIDADES ESCOLHA -->
				<div class="wrapper style1">
					<section class="carousel">
						<div class="reel">
							<article>
								<a href="#" class="image featured"><img src="images/blumenau.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Blumenau</a></h3>
								</header>
								<p>Vila Germânica, Catedral São Paulo Apóstolo,Teatro Carlos Gomes e Parque Ramiro e Oktoberfest</p>
								</br><a href="cad_visualizaAtracoes.php" class="button circled scrolly">Saiba mais</a></br>
								<input type="checkbox" name="vilaGermanica" value="blumenau">Adicionar
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/joinville.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Joinville</a></h3>
								</header>
								<p>Usina Hidrelétrica do Piraí, Praça das Orquídeas, Instituto Internacional Juarez Machado e Parque Morro do Finder</p>
								</br><a href="cad_visualizaAtracoes.php" class="button circled scrolly">Saiba mais</a></br>
								<input type="checkbox" name="vilaGermanica" value="blumenau">Adicionar
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/Floripa.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Florianopólis</a></h3>
								</header>
								<p>Praia dos Ingleses, Mesorregião da Grande Florianópolis, Museu de Arte de Santa Catarina e Estádio Orlando Scarpelli</p>
								</br><a href="cad_visualizaAtracoes.php" class="button circled scrolly">Saiba mais</a></br>
								<input type="checkbox" name="vilaGermanica" value="blumenau">Adicionar
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/saojose.jpg" alt="" /></a>
								<header>
									<h3><a href="#">São José</a></h3>
								</header>
								<p>Beira Mar de São José, Igreja Matriz de São José, Praça Hercílio Luz e Museu Histórico Municipal São José</p>
								</br><a href="cad_visualizaAtracoes.php" class="button circled scrolly">Saiba mais</a></br>
								<input type="checkbox" name="vilaGermanica" value="blumenau">Adicionar
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/criciuma.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Criciúma</a></h3>
								</header>
								<p>Parque das Nações Cincinato Naspolini, Estádio Heriberto Hulse, Praça Nereu Ramos e Nações Shopping</p>
								</br><a href="cad_visualizaAtracoes.php" class="button circled scrolly">Saiba mais</a></br>
								<input type="checkbox" name="vilaGermanica" value="blumenau">Adicionar
							</article>

							<article>
								<a href="#" class="image featured"><img src="images/chapeco.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Chapecó</a></h3>
								</header>
								<p>Monumento o Desbravador, Ecoparque, Arena Condá e Catedral Santo Antonio e Praça Coronel Bertaso</p>
								</br><a href="cad_visualizaAtracoes.php" class="button circled scrolly">Saiba mais</a></br>
								<input type="checkbox" name="vilaGermanica" value="blumenau">Adicionar
							</article>
						</div>
					</section>
					
					<!--BOTÕES-->			
					<footer align="center">
						<a href="cad_novaRota.php" class="button circled scrolly">Voltar</a>&nbsp&nbsp<a href="index.php" class="button circled scrolly">Cancelar</a>&nbsp&nbsp<a href="cad_escolheAtracoesBlumenau.php" class="button circled scrolly">Próximo</a>
					</footer>
				</div>	
			</div>	

<?php
	require 'rodape.php'
?>