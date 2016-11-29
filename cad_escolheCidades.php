<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();

	if($_POST)
	{
		$banco->query("insert into rota_has_cidade(ROTA_id_rota, CIDADE_id_cidade) values (4, 1)");

		header("Location: cad_escolheAtracoesBlumenau.php");
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
							<form action="cad_escolheCidades.php" method="post">
								<article>
									<a href="#" class="image featured"><img src="images/blumenau.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Blumenau</a></h3>
									</header>
									<p>Vila Germânica, Catedral São Paulo Apóstolo,Teatro Carlos Gomes e Parque Ramiro e Oktoberfest</p>
									</br><a href="cad_visualizaAtracoes.php" class="button circled scrolly">Saiba mais</a></br>
									<input type="checkbox" name="vilaGermanica" value="blumenau">Adicionar
								</article>
							</div>
						</section>
						
						<!--BOTÕES-->			
						<footer align="center">
							<a href="cad_novaRota.php" class="button circled scrolly">Voltar</a>&nbsp&nbsp<a href="index.php" class="button circled scrolly">Cancelar</a>&nbsp&nbsp<input type="submit" name="Proximo" id="login" class="button circled scrolly" />	
						</footer>
					</form>
				</div>	
			</div>	

<?php
	require 'rodape.php'
?>