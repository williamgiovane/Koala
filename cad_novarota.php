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
		<title>Cadastro de Nova Rota</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">
			<!-- Header -->
			<div id="headerPlacas">
				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="index.php" id="logo">Nova Rota</a></h1>
						</header>
					</div>

				<?php
					require 'cabecalho.php';
				?>
			</div>

			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<div class="row 200%">
						<article id="main" class="special">
							<header>
								<h2>Para começar digite o nome da rota e seu período de viagem</a></h2>
							</header>
						</article>
					</div>
				</div>
				<div class="container">
					<div class="content">
						<div class="8u 12u(mobile)" id="content">
							<form>
								Digite o nome da rota:<input type="text" name="nomerota"></br>
								Período Inicial:&nbsp <input type="date" name="periodoInicial">
								Período Final:&nbsp <input type="date" name="periodoFinal">
							</form>
						</div>
					</div>
				</div>
								
				<footer  align="center">
					<a href="index.php" class="button circled scrolly">Cancelar</a>
					<a href="cad_escolheEstados.php" class="button circled scrolly">Próximo</a>
				</footer>
			</div>

<?php
	require 'rodape.php'
?>