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
		<title>Selecione os Estados</title>
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
								<h2>Selecione os estados que você pretende visitar</a></h2>
								<p>
									Selecionando todos os estados de sua viajem!
								</p>
							</header>
						</article>
					</div>
						<div class="row 200%">
							<div class="4u 12u(mobile)" id="sidebar">
								<img src="images/mapabrasil.jpg"/>
							</div>
							<div class="8u 12u(mobile) important(mobile)" id="content">
								<table>
									<tr>
										<td><input type="checkbox" name="esAcre"  	 		 value="">Acre</td>
										<td><input type="checkbox" name="esAlagoas"  		 value="">Alagoas</td>
										<td><input type="checkbox" name="esAmapa"  	 		 value="">Amapá</td>	
									</tr>
									<tr>
										<td><input type="checkbox" name="esAmazonas" 		 value="">Amazonas</td>
										<td><input type="checkbox" name="esBahia"    		 value="">Bahia</td>
										<td><input type="checkbox" name="esCeara"       	 value="">Ceará</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="esDistritoFederal"  value="">Distrito Federal</td>
										<td><input type="checkbox" name="esEspiritoSanto"    value="">Espirito Santo</td>
										<td><input type="checkbox" name="esGoias"            value="">Goiás</td>	
									</tr>
									<tr>
										<td><input type="checkbox" name="esMaranhao"  		 value="">Maranhão</td>
										<td><input type="checkbox" name="esMatoGrosso"  	 value="">Mato Grosso</td>
										<td><input type="checkbox" name="esMatoGrossoDoSul"  value="">Mato Grosso do Sul</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="esMinasGerais"  	 value="">Minas Gerais</td>
										<td><input type="checkbox" name="esPara"  			 value="">Pará</td>
										<td><input type="checkbox" name="esParaiba"  		 value="">Paraiba</td>	
									</tr>
									<tr>
										<td><input type="checkbox" name="esParana"  		 value="">Paraná</td>
										<td><input type="checkbox" name="esPernambuco"  	 value="">Pernambuco</td>
										<td><input type="checkbox" name="esPiaui"  			 value="">Piauí</td>	
									</tr>
									<tr>
										<td><input type="checkbox" name="esRioDeJaneiro"  	 value="">Rio de Janeiro</td>
										<td><input type="checkbox" name="esRioGrandeDoNorte" value="">Rio Grande do Norte</td>
										<td><input type="checkbox" name="esRioGrandeDoSul"   value="">Rio Grande do Sul</td>	
									</tr>
									<tr>
										<td><input type="checkbox" name="esRondonia"  		 value="">Rondônia</td>
										<td><input type="checkbox" name="esRoraima"  		 value="">Roraima</td>
										<td><input type="checkbox" name="esSantaCatarina"  	 value="">Santa Catarina</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="esSaoPaulo"  		 value="">São Paulo</td>
										<td><input type="checkbox" name="esSergipe"  		 value="">Sergipe</td>
										<td><input type="checkbox" name="esTocantins"  		 value="">Tocantins</td>	
									</tr>
								</table>
							</div>
												
							<footer >
								<a href="novarota.php" class="button circled scrolly">Voltar</a>
							</footer>
							<footer>
								<a href="index.php" class="button circled scrolly">Cancelar</a>
							</footer>
							<footer>
								<a href="cidades.php" class="button circled scrolly">Próximo</a>
							</footer>	
						</div>
					</div>

<?php
	require 'rodape.php'
?>