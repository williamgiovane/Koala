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
						<h1><?php echo NOME_SITE; ?></h1>
						<hr />
						<p>Planeje sua viagem</p>
					</header>
					<footer>
						<a href="#banner" class="button circled scrolly">Começar</a>
					</footer>
				</div>
					
				<?php 
					require 'cabecalho.php'
				?>
			</div>
			<!-- Banner -->
			<section id="banner">
				<?php 
					if($_SESSION["logado"] != true)
					{ ?>
						<header>
							<h2>Você já pensou em sair de casa e viajar pelo mundo?</h2>
							<p>
								<strong>Binbag</strong> é um serviço feito para você planejar sua viagem do começo ao fim e ter a melhor experiencia possivel.</br>
								<strong>O mundo o aguarda!</strong>
							</p>
						</header>
						<footer>
						    <a href="login.php" class="button circled scrolly">Login</a>
						    <a href="cad_escolheTPusuario.php" class="button circled scrolly">Cadastre-se</a>
				<?php 
					}else{
						switch ($_SESSION['tipoUsu'])
							{
								case '1':
									echo '
										<header>
											<h2>Usuário Admin</h2>
										</header>
										<footer>
										<a href="cad_novarota.php" class="button circled scrolly">Nova Rota</a>
										<a href="cad_eventos.php" class="button circled scrolly">Eventos</a>
										<a href="cad_registrarEstabelecimento.php" class="button circled scrolly">Estabelecimento</a>';
									break;

								case '2':
									echo '
										<header>
											<h2>Você já pensou em mostrar seus eventos e estabelecimento para o mundo?</h2>
											<p>
												<strong>Binbag</strong> é um serviço feito para você mostrar sua empresa, eventos e estabelecimentos e ter a melhor experiência possivel.</br>
												<strong>O mundo o aguarda!</strong>
											</p>
										</header>
										<footer>
										<a href="cad_eventos.php" class="button circled scrolly">Eventos</a>
										<a href="cad_registrarEstabelecimento.php" class="button circled scrolly">Estabelecimento</a>';
									break;

								default:
									echo '
										<header>
											<h2>Você já pensou em sair de casa e viajar pelo mundo?</h2>
											<p>
												<strong>Binbag</strong> é um serviço feito para você planejar sua viagem do começo ao fim e ter a melhor experiência possivel.</br>
												<strong>O mundo o aguarda!</strong>
											</p>
										</header>
										<footer>
										<a href="cad_novarota.php" class="button circled scrolly">Nova Rota</a>';
									break;
							}
					}
				?>
				</footer>
			</section>

			<!-- Carousel -->
			<section class="carousel">
				<div class="reel">
					<article>
						<a href="#" class="image featured"><img src="images/blumenau.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Blumenau</a></h3>
						</header>
						<p>Vila Germânica, Catedral São Paulo Apóstolo,Teatro Carlos Gomes e Parque Ramiro e Oktoberfest</p>
					</article>

					<article>
						<a href="#" class="image featured"><img src="images/joinville.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Joinville</a></h3>
						</header>
						<p>Usina Hidrelétrica do Piraí, Instituto Internacional Juarez Machado e Parque Morro do Finder</p>
					</article>

					<article>
						<a href="#" class="image featured"><img src="images/Floripa.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Florianopólis</a></h3>
						</header>
						<p>Praia dos Ingleses, Mesorregião da Grande Florianópolis e Museu de Arte de Santa Catarina</p>
					</article>

					<article>
						<a href="#" class="image featured"><img src="images/saojose.jpg" alt="" /></a>
						<header>
							<h3><a href="#">São José</a></h3>
						</header>
						<p>Beira Mar de São José, Igreja Matriz de São José, Praça Hercílio Luz e Museu Histórico Municipal São José</p>
					</article>

					<article>
						<a href="#" class="image featured"><img src="images/criciuma.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Criciúma</a></h3>
						</header>
						<p>Parque das Nações Cincinato Naspolini, Estádio Heriberto Hulse, Praça Nereu Ramos e Nações Shopping</p>
					</article>

					<article>
						<a href="#" class="image featured"><img src="images/chapeco.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Chapecó</a></h3>
						</header>
						<p>Monumento o Desbravador, Ecoparque, Arena Condá e Catedral Santo Antonio e Praça Coronel Bertaso</p>
					</article>
				</div>
			</section>

			<!-- Main -->
			<div class="wrapper style2">
				<article id="main" class="container special">
					<a href="#" class="image featured"><img src="images/eventododia.jpg" alt="" /></a>
					<header>
						<h2><a href="#">Acredite, é no Brasil!</a></h2>
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
						<a href="noticias.php" class="button">Continue Lendo</a>
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

<?php
	require 'rodape.php'
?>