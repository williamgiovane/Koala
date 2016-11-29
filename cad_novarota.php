<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();

	if($_POST)
	{
		$nomeRota = $_POST["nomerota"];
		$Inicial = $_POST['periodoInicial'];
		$Final = $_POST['periodoFinal'];

		$banco->bind("nomeRota2", $nomeRota);
		$banco->bind("periInicial", $Inicial);
		$banco->bind("periFinal", $Final);

		$banco->query("insert into rota (id_rota, ds_rota, dt_inicio, dt_fim, USUARIO_id_usuario) values (null, :nomeRota2, :periInicial, :periFinal,7)");	
		//$selectRota = $banco->row("select id_rota from rota where ds_rota = :nomeRota2");

		//$_SESSION["nmRota"] = $nomeRota;	
		//$_SESSION["idRota"] = $selectRota["id_rota"];

		header("Location: cad_escolheCidades.php");
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
							<form action="cad_novarota.php" method="post">
								Digite o nome da rota:<input type="text" name="nomerota" id="nomeRota" >
								Período Inicial:<input type="text" name="periodoInicial" id="periodoInicial" class="data">
								Período Final:<input type="text" name="periodoFinal" id="periodoFinal" class="data">
						</div>
					</div>
				</div>
								
					<footer  align="center">
						<a href="index.php" class="button circled scrolly">Cancelar</a>
						<input type="submit" name="Proximo" id="login" class="button circled scrolly" />	
						<!-- <a href="cad_escolheCidades.php" class="button circled scrolly">Próximo</a> -->
					</footer>
				</form>
			</div>

<?php
	require 'rodape.php'
?>