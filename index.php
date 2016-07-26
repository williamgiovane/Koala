<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();
?>

<!doctype html>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title> <?php echo NOME_SITE; ?> </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo">BinBag</a></h1>
								<hr />
								<p>Planeje sua viagem</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Comece</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<!--<li>
									<a href="#">Minhas rotas</a>
									<ul>
										<li><a href="#">Rota 1</a></li>
										<li><a href="#">Rota 2</a></li>
										<li><a href="#">Rota 3</a></li>
										<li></li>
											
											<a href="#">Todas as Rotas</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Phasellus consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
											</ul>
									</ul>	
								</li>-->
								<li><a href="left-sidebar.php">Notícias</a></li>
								<li><a href="right-sidebar.php">Login</a></li>
								<li><a href="cad_tipousuario.php">Registrar</a></li>
							</ul>
						</nav>
				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Olá, você já pensou em sair do Netflix e viajar pelo mundo com a <strong>BinBag</strong>?</h2>
						<p>
							Um serviço feito para você planejar sua viagem do começo ao fim e ter a melhor experiencia possivel...
							O mundo o aguarda!!!
						</p>
					</header>
					<footer>
						<a href="cad_tipousuario.php" class="button circled scrolly">Cadastre-se</a>
					</footer>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">

						<article>
							<a href="#" class="image featured"><img src="images/rio2.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Rio de Janeiro</a></h3>
							</header>
							<p>Cristo Redentor, Copacabana, Pão de Açúcar, Corcovado, Ipanema e o Estádio Maracanã.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/blumenau.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Blumenau</a></h3>
							</header>
							<p>Vila Germânica, Catedral São Paulo Apóstolo,Teatro Carlos Gomes, Parque Ramiro e Oktoberfest</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/sp.jpg" alt="" /></a>
							<header>
								<h3><a href="#">São Paulo</a></h3>
							</header>
							<p>Parque do Ibirapuera, Morumbi, Avenida Paulista, Sala São Paulo e Teatro Municipal de São Paulo</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pgali.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Porto de Galinhas</a></h3>
							</header>
							<p>Praia de Muro Alto, Praia da Vila de Porto de Galinhas e Piscinas Naturais de Porto de Galinhas</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/curitiba.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Curitiba</a></h3>
							</header>
							<p>Museu Oscar Niemeyer, Jardim Botânico de Curitiba, Bosque Alemão, Ópera de Arame e Bosque Alemão</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/salvador.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Salvador</a></h3>
							</header>
							<p>Centro Histórico de Salvador, Igreja do Senhor do Bonfim, Rio Vermelho e Praia do Porto da Barra</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Floripa.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Florianópolis</a></h3>
							</header>
							<p>Praia dos Ingleses, Museu de Arte de Santa Catarina, Estádio Orlando Scarpelli e Ressacada</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/brasilia.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Brasília</a></h3>
							</header>
							<p>Ponte Juscelino Kubitschek, Palácio Itamaraty, Palácio do Planalto e Palácio da Alvorada</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/bh.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Belo Horizonte</a></h3>
							</header>
							<p>Mineirão, Igreja da Pampulha, Estádio Olímpico Monumental e Museu Inimá de Paula</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/manaus.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Manaus</a></h3>
							</header>
							<p>Teatro Amazonas, Encontro das Águas, Arquipélago de Anavilhanas e Espaço Cultural Largo de São Sebastião</p>
						</article>

					</div>
				</section>

			<!-- Main -->
				<div class="wrapper style2">

					<article id="main" class="container special">
						<a href="#" class="image featured"><img src="images/eventododia.jpg" alt="" /></a>
						<header>
							<h2><a href="#">Acredite é no Brasil</a></h2>
							<p>
								A foto do Morro do Cambirela coberto de neve acabou ocupando a capa dos principais jornais do Brasil nesta quarta-feira(24/07/13) 
							</p>
						</header>
						<p>
							A plasticidade da imagem e o cenário surpreendente ao lado de Florianópolis, na Serra do Tabuleiro, 
							chegaram a provocar em alguns usuários das redes sociais a impressão de que não podia se tratar de um fato real. 

							O registro histórico do fotógrafo Alvarelio Kurossu foi produzido com o uso de uma lente 400mm que, 
							com duplicador, amplia o alcance da lente para 800mm.
						</p>
						<footer>
							<a href="#" class="button">Continue Lendo</a>
						</footer>
					</article>

				</div>

			<!-- Features -->
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Eventos do Mês</h2>
							<p>Abaixo você verá os principais eventos do mês para se programar e ir visitá-los</p>
						</header>
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/animaMundi.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Anima Mundi 2016</a></h3>
								</header>
								<p>
									Já pensou em um lugar onde a imaginação não tem limites e sempre há espaço para mais um sonho?
									Em 1993 quatro cabeças resolveram colocar um projeto em prática. Aida Queiroz, Cesar Coelho, 
									Lea Zagury e Marcos Magalhães foram os responsáveis por essa aventura. 
									E quando animador ainda era aquela pessoa que brinca com as crianças em festas infantis, estreava o Anima Mundi.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/magiaDeNatal.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Magia De Natal</a></h3>
								</header>
								<p>
									Um colorido especial que toma conta da cidade. Sorrisos que se multiplicam no rosto das pessoas. 
									É a Magia de Natal, que se prepara para mais uma edição repleta de brilho e encanto. 
									A atração acontecerá nos dias 15, 21 e 28 de novembro e 5, 12 e 18 de dezembro. 
									O tema dos desfiles será a Magia do Circo.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/ironMan.jpg" alt="" /></a>
								<header>
									<h3><a href="#">IronMan</a></h3>
								</header>
								<p>
									O Ironman Triathlon é uma corrida anual de longa distância que é organizada pelo World Triathlon Corporation 
									e realizada no Havaí. A corrida consiste em três eventos ordenados: a 2,4 milhas de natação (3,9 km)
									uma corrida de bicicleta de 112 milhas (181 km) e uma maratona de 26,2 milhas (42,195 km). 
									O evento começa às 7 da manhã e os concorrentes são obrigados a cruzar a linha de chegada à meia-noite.
								</p>
							</article>
						</div>
					</section>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Tweets -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												#Linker Planejei diversas viajens.
												<span class="timestamp">5 minutos atras</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												#Linker Site lindo e funcional... Adoreiii.
												<span class="timestamp">30 minutos atras</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												#Linker Mistura de um site moderno com as funcionalidades que estava procurando para gerenciar minhas viajens.
												<span class="timestamp">1 hora atras</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												#Linker Sem palavras, conheci diversas cidades que quero visitar um dia.
												<span class="timestamp">1 hora atras</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												#Linker Varias reportagens incriveis.
												<span class="timestamp">2 horas atras</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												#Linker Estava procurando um site assim a tempo.
												<span class="timestamp">5 horas atras</span>
											</article>
										</li>
										
									</ul>
								</section>

							<!-- Posts -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Florianopolis a cidade Surfista.</a></h3>
												</header>
												<span class="timestamp">3 horas atras</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Acredite é no Brasil.</a></h3>
												</header>
												<span class="timestamp">6 horas atras</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">10 capitais mais procuradas no verão.</a></h3>
												</header>
												<span class="timestamp">Ontem</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Medo de aviões? Leia essa matéria.</a></h3>
												</header>
												<span class="timestamp">1 dia atras</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Vamos para a Turquia?</a></h3>
												</header>
												<span class="timestamp">2 dias atras</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Photos -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row 25%">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/img1.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/img2.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/img3.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/img4.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/img5.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/img6.jpg" alt="" /></a>
										</div>
									</div>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Quer saber mais?</h3>
										</header>
										<p>Acesse nossas redes sociais, e descubra o mundo!</p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; <?php echo NOME_SITE; ?>. All rights reserved.</li><li>Design: Boeing, William</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>