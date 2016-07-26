<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cadastro de Eventos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="headerEventos">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo">Cadastro de Eventos</a></h1>
							</header>
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
								<li><a href="cad_registrar.php">Registrar</a></li>
							</ul>
						</nav>
				</div>

			<!-- Main -->
				<div class="wrapper style1">
					<div class="container">
						<h2>Digite os dados do evento:</a></h2></br>
						<div class="content">
							<div class="8u 12u(mobile)" id="content">
								<form>
									Nome Evento:<input type="text" name="nomeEvento"></br>
									Data Inicio:&nbsp&nbsp&nbsp&nbsp<input type="date" name="dataInicio">
									Data Final:&nbsp&nbsp&nbsp&nbsp<input type="date" name="dataFinal"></br></br>
									Horario Inicio:<input type="time" name="horarioInicio">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHorario Final:<input type="time" name="horarioFinal"></br></br>
									Cidade:<input type="text" name="cidade"></br>
									Cep:<input type="text" name="cep" placeholder="00000-000"></br>
									Local Evento:<input type="text" name="localEvento"></br>
									Telefone:<input type="text" name="telefone"></br>
									Valor Ingreso:<input type="text" name="valorIngresso"></br>
									Site Evento:<input type="text" name="siteEvento"></br>
									Pontos de Venda:<input type="text" name="pontosDeVenda"></br>
									Tipo do Evento:
									<table>
										<tr>
											<td><input type="checkbox" name="eventoMusical" 	   value="">Musical</td>
											<td><input type="checkbox" name="eventoCultural" 	   value="">Cultural</td>
											<td><input type="checkbox" name="eventoTecnologico"    value="">Tecnológico</td>	
											<td><input type="checkbox" name="eventoGastronomico"   value="">Gastronômico</td>
											<td><input type="checkbox" name="eventoDataComerativo" value="">Datas Comemorativas</td>	
										</tr>
										<tr>
											<td><input type="checkbox" name="eventoEsportivo" 	   value="">Esportivo</td>
											<td><input type="checkbox" name="eventoPalestra" 	   value="">Palestras</td>
											<td><input type="checkbox" name="eventoWorkshop" 	   value="">Workshops</td>
											<td><input type="checkbox" name="eventoCorporativo"    value="">Corporativos</td>
											<td><input type="checkbox" name="eventoFestival" 	   value="">Festival</td>	
										</tr>
									</table>
									Sobre Evento:<textarea name="Mensagem" rows="10" cols="60" wrap="virtual"></textarea></p>
									Upload Foto:<input type="text" name="uploadFoto">
								</form>
							</div>
						</div>
					</div>
									
					<footer  align="center">
						<a href="index.php" class="button circled scrolly">Cancelar</a>
						<a href="index.php" class="button circled scrolly">Cadastrar</a>
					</footer>
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