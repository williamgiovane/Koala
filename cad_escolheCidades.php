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
								<p>Essas são as cidades pertencentes aos seus estados escolhidos.</br> Adicione à sua rota selecionando-as</p>
								<h2>Santa Catarina</h2>
								<input type="search" name="procuracidade" placeholder="Procure a Cidade">
							</header>
						</article>
					</div>
					
					<!-- CIDADES ESCOLHA -->
					<div class="wrapper style1">

						<div class="container">
							<article id="main" class="special">
								<header>
									
								</header>
							</article>
						</div>
						
						<section class="carousel">
							<div class="reel">
							
								<article>
									<a href="#" class="image featured"><img src="images/rio2.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Rio de Janeiro</a></h3>
									</header>
									<p>Cristo Redentor, Copacabana, Pão de Açúcar, Corcovado, Ipanema e o Estádio Maracanã.</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/blumenau.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Blumenau</a></h3>
									</header>
									<p>Vila Germânica, Catedral São Paulo Apóstolo,Teatro Carlos Gomes, Parque Ramiro e Oktoberfest</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/sp.jpg" alt="" /></a>
									<header>
										<h3><a href="#">São Paulo</a></h3>
									</header>
									<p>Parque do Ibirapuera, Morumbi, Avenida Paulista, Sala São Paulo e Teatro Municipal de São Paulo</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/pgali.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Porto de Galinhas</a></h3>
									</header>
									<p>Praia de Muro Alto, Praia da Vila de Porto de Galinhas e Piscinas Naturais de Porto de Galinhas</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/curitiba.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Curitiba</a></h3>
									</header>
									<p>Museu Oscar Niemeyer, Jardim Botânico de Curitiba, Bosque Alemão, Ópera de Arame e Bosque Alemão</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/salvador.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Salvador</a></h3>
									</header>
									<p>Centro Histórico de Salvador, Igreja do Senhor do Bonfim, Rio Vermelho e Praia do Porto da Barra</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/Floripa.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Florianópolis</a></h3>
									</header>
									<p>Praia dos Ingleses, Museu de Arte de Santa Catarina, Estádio Orlando Scarpelli e Ressacada</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/brasilia.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Brasília</a></h3>
									</header>
									<p>Ponte Juscelino Kubitschek, Palácio Itamaraty, Palácio do Planalto e Palácio da Alvorada</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/bh.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Belo Horizonte</a></h3>
									</header>
									<p>Mineirão, Igreja da Pampulha, Estádio Olímpico Monumental e Museu Inimá de Paula</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>

								<article>
									<a href="#" class="image featured"><img src="images/manaus.jpg" alt="" /></a>
									<header>
										<h3><a href="#">Manaus</a></h3>
									</header>
									<p>Teatro Amazonas, Encontro das Águas, Arquipélago de Anavilhanas e Espaço Cultural Largo de São Sebastião</p>
									</br><a href="cad_escolheAtracoes.php" class="button circled scrolly">Atrações</a></br>
									</br><input type="button" name="adicionarpararota" value="Adicionar"></br>
								</article>
							</div>
						</section>
						
						<!--BOTÕES-->			
						<footer align="center">
							<a href="cad_escolheEstados.php" class="button circled scrolly">Voltar</a>&nbsp&nbsp<a href="index.php" class="button circled scrolly">Cancelar</a>&nbsp&nbsp<a href="cad_escolheCidades.php" class="button circled scrolly">Próximo</a>
						</footer>
					</div>		

<?php
	require 'rodape.php'
?>