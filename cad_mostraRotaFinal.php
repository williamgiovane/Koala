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
		<title>Selecione as datas</title>
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
						<h1><a href="index.php" id="logo">Nome Rota</a></h1>
					</header>
				</div>
			</div>
			<!-- Main -->
			<div class="wrapper style1">
				<?php require 'calendario\demos\calendarioFinal.php' ?>
				</br><h2 align="center">Rota com Maps</h2>
                <div class="container">
                    <div class="content">
                        <div class="8u 12u(mobile)" id="content">
                            
								<iframe src="https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d28462.884217660187!2d-49.097337990244306!3d-26.907921170278186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e0!4m5!1s0x94df1ecfb37d4f2f%3A0xa11ce08b8187e2f9!2sCEDUP+-+Centro+de+Educa%C3%A7%C3%A3o+Profissional+Hermann+Hering+-+Rua+Benjamin+Constant+-+Escola+Agr%C3%ADcola%2C+Blumenau+-+SC!3m2!1d-26.894220699999998!2d-49.098101899999996!4m5!1s0x94df192908926f8b%3A0x3a5f29a2181bcf8!2sParque+Vila+Germ%C3%A2nica+-+Rua+Alberto+Stein+-+Velha%2C+Blumenau+-+SC!3m2!1d-26.915892399999997!2d-49.0852189!4m5!1s0x94df18c164923a89%3A0xc9ac274577e7bdc1!2sTeatro+Carlos+Gomes+-+Centro%2C+Blumenau+-+SC!3m2!1d-26.9184245!2d-49.0678406!4m5!1s0x94df18bfef05d3e5%3A0xdf1af93063efa0da!2sAtaliba+Churrascaria+-+Rua+Porto+Rico+-+Ponta+Aguda%2C+Blumenau+-+SC!3m2!1d-26.919069999999998!2d-49.060945!4m5!1s0x94df192ab2980905%3A0x56b32b77c4e549ba!2sPepper+Jack+Restaurante+-+Rua+Joinville+-+Vila+Nova%2C+Blumenau+-+SC!3m2!1d-26.907998799999998!2d-49.082560799999996!4m5!1s0x94df18d1c9a26019%3A0xe7c0ee74229954ca!2sAhoy*21+Tavern+Club+-+Rua+S%C3%A3o+Paulo+-+Itoupava+Seca%2C+Blumenau+-+SC!3m2!1d-26.8994128!2d-49.0772596!5e0!3m2!1spt-BR!2sbr!4v1480464251264" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
                    </div>
                </div>
				

				<!--BOTÕES-->			
				<footer align="center">
					</br><a href="perfilUsu.php" class="button circled scrolly">Voltar</a>
				</footer>
			</div>				
		</div>