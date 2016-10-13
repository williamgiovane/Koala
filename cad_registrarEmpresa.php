<?php
	require 'config.php';
	require 'classes/Db.class.php';
	
	/* criando objeto da classe DB*/
	$banco = new DB();

	if($_POST)
	{
		$nome 				= $_POST["nomeEmp"];
		$ramo 				= $_POST["ramoAtividade"];
		$cnpj 				= $_POST["cnpj"];
		$email 				= $_POST["emailEmpresa"];
		$site       		= $_POST["siteEmpresa"];
		$continente 		= $_POST["Continente"];
		$pais       		= $_POST["Pais"];
		$estado     		= $_POST["Estado"];
		$cidade     		= $_POST["Cidade"];
		$cep     			= $_POST["cep"];
		$diasFuncionamento  = $_POST["diasFuncionamento"];
		$celular 			= str_replace("-","",str_replace(")","", str_replace("(","",$_POST["celularUsu"])));
		$senha      		= $_POST["senhaUsu"];
		$senha2     		= $_POST["senhaConfiUsu"];
		$about				= $_POST["sobreEmpresa"];
		$atualizacaoCelular = ( isset($_POST["atualizacaoCelular"]) )? $_POST["atualizacaoCelular"] : "0" ;
		$atualizacaoEmail 	= ( isset($_POST["atualizacaoEmail"]) )? $_POST["atualizacaoEmail"] : "0" ;

		$banco->bind("nome",$nome);
		$banco->bind("ramo",$ramo);
		$banco->bind("cnpj",$cnpj);
		$banco->bind("email",$email);
		$banco->bind("continente",$continente);
		$banco->bind("pais",$pais);
		$banco->bind("estado",$estado);
		$banco->bind("cidade",$cidade);
		$banco->bind("cep",$cep);
		$banco->bind("diasFuncionamento",$diasFuncionamento);
		$banco->bind("celular",$celular);
		$banco->bind("senha",$senha);
		$banco->bind("senha2",$senha2);
		$banco->bind("about",$about);
		$banco->bind("atuCel",$atualizacaoCelular);
		$banco->bind("atuEmail",$atualizacaoEmail);

		$banco->query("insert into estabelecimento (id_estabelecimento, ds_estabelecimento, cnpj, cep, about, telefone, email, classificacao, foto, 	           CIDADE_id_cidade, values (null, $nome, $cnpj, $cep, $about, $celular, $email, null, null, $cidade)");		
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
								<h1>Registre sua empresa no <?php echo NOME_SITE; ?></h1>
							</header>
						</div>

					<?php
						require 'cabecalho.php';
					?>
				</div>

			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<h2>Digite seus dados:</a></h2></br>
					<div class="content">
						<div class="8u 12u(mobile)" id="content">
							<form>
								Nome Empresa:<input type="text" name="nomeEmp"> 
								CNPJ:<input type="text" name="cnpj" class="cnpj">
								Ramo de Atividade:  
								<select id="ramoAtividade" name="ramoAtividade">
									<option value="">Selecione o Ramo de Atividade</option>
									<?php
										$ramoAtividade = $banco->query('SELECT ds_tipo_estabelecimento FROM tipo_estabelecimento ORDER BY ds_tipo_estabelecimento');
										foreach($ramoAtividade as $r){
											echo '<option value="'.$r['ds_tipo_estabelecimento'].'">'.$r['ds_tipo_estabelecimento'].'</option>';
										}
									?>
								</select>
								
								Email:<input type="email" name="emailEmpresa">
								Site:<input type="text" name="siteEmpresa">
								
								Cep:<input type="text" name="cep" class="cep">	
								
								Dias de funcionamento:
								<select id="diasFuncionamento" name="diasFuncionamento">
									<option value="">Selecione os dias de funcionamento</option>
								  	<option value="segSexta">Seg à Sexta</option>
								  	<option value="terSexta">Terça à Sexta</option>
								  	<option value="all">Todos</option>
								</select>	

								Celular ou Telefone:<input type="text" name="celularUsu" class="phone">
								Senha:<input type="password" name="senhaUsu">
								Confirme a senha:<input type="password" name="senhaConfiUsu">
								Sobre a empresa:<textarea name="sobreEmpresa" rows="10" cols="60" wrap="virtual"></textarea></p>
								<input type="checkbox" name="atualizacaoCelular" value="">Desejo receber atualizações por Celular</td></br>
								<input type="checkbox" name="atualizacaoEmail" value="">Desejo receber atualizações por Email</td>
							</form>
						</div>
					</div>
				</div>
								
				<footer  align="center">
					<a href="index.php" class="button circled scrolly">Cadastrar</a>
					<a href="index.php" class="button circled scrolly">Cancelar</a>
					<a href="cad_escolheTPusuario.php" class="button circled scrolly">Voltar</a>
				</footer>
			</div>
				
<?php
	require 'rodape.php'
?>

								<!--Continente
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
								</select>-->