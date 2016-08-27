<?php
	require 'config.php';
	require 'classes/Db.class.php';
	
	/* criando objeto da classe DB*/
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
		<title>Registro de Empresa</title>
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
								<h1><a href="index.php" id="logo">Registre-se no </a><?php echo NOME_SITE; ?></h1>
							</header>
						</div>

					<?php
						require 'cabecalho.php';
					?>
				</div>

			<!-- Main -->
				<div class="wrapper style1" align= "center">
					<div class="container">
						<h2>Digite seus dados:</a></h2></br>
						<div class="content">
							<div class="8u 12u(mobile)" id="content">
								<form>
									Nome Empresa:<input type="text" name="nomeUsu"> 
									Ramo de Atividade  
									<select id="ramoAtividade" name="ramoAtividade">
										<option value="">Selecione o Ramo de Atividade</option>
										<?php
											$ramoAtividade = $banco->query('SELECT ds_tipo_estabelecimento FROM tipo_estabelecimento ORDER BY ds_tipo_estabelecimento');
											foreach($ramoAtividade as $r){
												echo '<option value="'.$r['ds_tipo_estabelecimento'].'">'.$r['ds_tipo_estabelecimento'].'</option>';
											}
										?>
									</select>
									
									
									
									CNPJ:<input type="text" name="cnpj">
									
									Email:<input type="email" name="emailEmpresa">
									Site:<input type="text" name="siteEmpresa">
									
									Continente
									<select id="Continente" name="Continente">
										<option value="">Selecione o Continente</option>
										<?php
											$continente = $banco->query('select ds_continente from continente ORDER BY ds_continente');
											$continenteDados = $banco->query('select id_continente from continente');
											foreach($continente as $c){
												echo '<option value="'.$c['ds_continente'].'">'.$c['ds_continente'].'</option>';
											}
										?>
									</select>
									
									Pais
									<select id="Pais" name="Pais">
										<option value="">Selecione o Pais</option>
										<?php
											$continente = $banco->query('SELECT ds_pais FROM pais WHERE CONTINENTE_id_continente = 1 ORDER BY ds_pais');
											foreach($continente as $p){
												echo '<option value="'.$p['ds_pais'].'">'.$p['ds_pais'].'</option>';
											}
										?>
									</select>
									
									Estado  
									<select id="Estado" name="Estado">
										<option value="">Selecione o Estado</option>
										<?php
											$estado = $banco->query('SELECT ds_estado FROM estado WHERE PAIS_id_pais = 10 ORDER BY ds_estado');
											foreach($estado as $e){
												echo '<option value="'.$e['ds_estado'].'">'.$e['ds_estado'].'</option>';
											}
										?>
									</select>
									
									Cidade  
									<select id="Cidade" name="Cidade">
										<option value="">Selecione o Cidade</option>
										<?php
											$cidade = $banco->query('SELECT ds_cidade FROM cidade WHERE ESTADO_id_estado = 24 ORDER BY ds_cidade');
											foreach($cidade as $c){
												echo '<option value="'.$c['ds_cidade'].'">'.$c['ds_cidade'].'</option>';
											}
										?>
									</select>
									
									Celular:<input type="text" name="celularUsu">
									Senha:<input type="password" name="senhaUsu">
									Confirme a senha:<input type="password" name="senhaConfiUsu">
									<input type="checkbox" name="atualizacaoCelular" value="">Desejo receber atualizações por Celular</td></br>
									<input type="checkbox" name="atualizacaoEmail" value="">Desejo receber atualizações por Email</td>
								</form>
							</div>
						</div>
					</div>
									
					<footer  align="center">
						<a href="index.php" class="button circled scrolly">Cadastrar</a>
						<a href="index.php" class="button circled scrolly">Cancelar</a>
						<a href="cad_tipousuario.php" class="button circled scrolly">Voltar</a>
					</footer>
				</div>
				
<?php
	require 'rodape.php'
?>