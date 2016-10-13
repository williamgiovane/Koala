<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();

	if($_POST)
	{

		$nomeEvento 		  = $_POST["nomeEvento"];
		$dataInicial 		  = str_replace("/","",$_POST["dataInicial"]);
		$dataFinal 			  = str_replace("/","",$_POST["dataFinal"]);
		$horarioInicio   	  = str_replace(":","",$_POST["horarioInicio"]);
		$horarioFinal 		  = str_replace(":","",$_POST["horarioFinal"]);
		$cidade    	 		  = $_POST["cidade"];		
		$cep 				  = $_POST["cep"];		
		$localEvento 		  = $_POST["localEvento"];
		$telefone 			  = str_replace("-","",str_replace(")","", str_replace("(","",$_POST["telefone"])));
		$valorIngresso 		  = $_POST["valorIngresso"];				
		$valorIngressoMeia 	  = $_POST["valorIngressoMeia"];				
		$siteEvento 		  = $_POST["siteEvento"];				
		$pontosDeVenda 		  = $_POST["pontosDeVenda"];
		$sobreEvento 		  = $_POST["sobreEvento"];

		$eventoMusical 		  = $_POST["eventoMusical"];
		$eventoCultural 	  = $_POST["eventoCultural"];
		$eventoTecnologico 	  = $_POST["eventoTecnologico"];
		$eventoGastronomico   = $_POST["eventoGastronomico"];
		$eventoDataComerativo = $_POST["eventoDataComerativo"];
		$eventoEsportivo 	  = $_POST["eventoEsportivo"];		
		$eventoPalestra 	  = $_POST["eventoPalestra"];		
		$eventoWorkshop 	  = $_POST["eventoWorkshop"];		
		$eventoCorporativo 	  = $_POST["eventoCorporativo"];
		$eventoFestival 	  = $_POST["eventoFestival"];

		$banco->bind("evento", $nomeEvento);
		$banco->bind("dataInicio", $dataInicio);
		$banco->bind("dataFinal", $dataFinal);
		$banco->bind("cep", $cep);
		$banco->bind("localEvento", $localEvento);
		$banco->bind("horarioInicio", $horarioInicio);
		$banco->bind("horarioFinal", $horarioFinal);
		$banco->bind("valorIngresso", $valorIngresso);
		$banco->bind("valorIngressoMeia", $valorIngressoMeia);
		$banco->bind("siteEvento", $siteEvento);
		$banco->bind("sobreEvento", $sobreEvento);
		$banco->bind("classificadao", '');
		$banco->bind("telefone", $telefone);
		$banco->bind("Foto", "");
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

					<?php
						require 'cabecalho.php';
					?>
				</div>

			<!-- Main -->
				<div class="wrapper style1">
					<div class="container">
						<h2>Digite os dados do evento:</a></h2></br>
						<div class="content">
							<div class="8u 12u(mobile)" id="content">
								<form>
									Nome Evento:<input type="text" name="nomeEvento">
									Data Inicio:<input type="text" name="dataInicio" class="data">
									Data Final:<input type="text" name="dataFinal" class="data">
									Horario Inicio:<input type="text" name="horarioInicio" class="hora">
									Horario Final:<input type="text" name="horarioFinal" class="hora">
									Cep:<input type="text" name="cep" class="cep">
									Cidade  
									<select id="Cidade" name="Cidade">
										<option value="">Selecione a cidade</option>
										<?php
											$cidade = $banco->query('SELECT id_cidade, ds_cidade FROM cidade WHERE ESTADO_id_estado = 24 ORDER BY ds_cidade');
											foreach($cidade as $c){
												echo '<option value="'.$c['id_cidade'].'">'.$c['ds_cidade'].'</option>';
											}
										?>
									</select>
									Local Evento:<input type="text" name="localEvento">
									Telefone:<input type="text" name="telefone">
									Valor Ingreso:<input type="text" name="valorIngresso">
									Valor Meia Entrada:<input type="text" name="valorIngressoMeia">
									Site Evento:<input type="text" name="siteEvento">
									Pontos de Venda:<input type="text" name="pontosDeVenda">
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
									Sobre Evento:<textarea name="sobreEvento" rows="10" cols="60" wrap="virtual"></textarea></p>
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
				
<?php
	require 'rodape.php'
?>