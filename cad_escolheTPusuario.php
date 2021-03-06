<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();

	$_SESSION["logado"] = ( isset( $_SESSION["logado"] ) ) ? $_SESSION["logado"] : '';
?>

<!DOCTYPE HTML>
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
							<h1>Escolha o tipo de usuário no <?php echo NOME_SITE; ?></h1>
						</header>
					</div>

				<?php
					require 'cabecalho.php';
				?>
			</div>

			<!-- Main -->
			<div class="wrapper style1" align="center">
				<div class="container">
					<h2>Quem é você?</a></h2></br>
					<div class="content">
						<div class="8u 12u(mobile)" id="content">
							<form>								
								<a href="cad_registrarFisica.php" class="button circled scrolly">Viajante</a>
								<a href="cad_registrarJuridica.php" class="button circled scrolly">Empresário</a>
								<a href="index.php" class="button circled scrolly">Voltar</a>
							</form>
						</div>
					</div>
				</div>
			</div>
				
<?php
	require 'rodape.php'
?>