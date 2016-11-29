<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
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
		$about				= $_POST["sobreEmpresa"];
		$atualizacaoCelular = (isset($_POST["atualizacaoCelular"]))? $_POST["atualizacaoCelular"] : "0" ;
		$atualizacaoEmail 	= (isset($_POST["atualizacaoEmail"]))? $_POST["atualizacaoEmail"] : "0" ;

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
		$banco->bind("about",$about);
		$banco->bind("atuCel",$atualizacaoCelular);
		$banco->bind("atuEmail",$atualizacaoEmail);

		$banco->query("insert into estabelecimento (id_estabelecimento, ds_estabelecimento, cnpj, cep, about, telefone, email, classificacao, foto, CIDADE_id_cidade, values (null, $nome, $cnpj, $cep, $about, $celular, $email, null, null, 1)");		
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
		<title>Registro de Estabelecimento</title>
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
							<h1>Registre seu estabelecimento no <?php echo NOME_SITE; ?></h1>
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
							<form action="cad_registrarEstabelecimento.php" method="post">
								Nome: <input type="text" name="nomeEmp"> 
								CNPJ: <input type="text" name="cnpj" class="cnpj">
								Cidade:
								<select id="Cidade" name="Cidade">
									<option value="">Selecione o Cidade</option>
									<?php
										$cidade = $banco->query('SELECT id_cidade, ds_cidade FROM cidade WHERE ESTADO_id_estado = 24 ORDER BY ds_cidade');
										foreach($cidade as $c)
										{
											echo '<option value="'.$c['id_cidade'].'">'.$c['ds_cidade'].'</option>';
										}
										//$idCidade = value="'.$c['id_cidade'].'">;
									?>
								</select>
								Ramo de Atividade:  
								<table>
									<tr>
										<td><input type="checkbox" name="balada" id="balada">Balada</td>
										<td><input type="checkbox" name="bar" id="bar">Bar</td>
										<td><input type="checkbox" name="cafeteria" id="cafeteria">Cafeteria</td>	
										<td><input type="checkbox" name="cervejaria" id="cervejaria">Cervejaria</td>
										<td><input type="checkbox" name="lanchonete" id="lanchonete">Lanchonete</td>	
									</tr>
									<tr>
										<td><input type="checkbox" name="padaria" id="padaria">Padaria</td>
										<td><input type="checkbox" name="pizzaria" id="pizzaria">Pizzaria</td>
										<td><input type="checkbox" name="pub" id="pub">Pub</td>
										<td><input type="checkbox" name="restaurante" id="restaurante">Restaurante</td>
										<td><input type="checkbox" name="shopping" id="shopping">Shopping</td>
									</tr>
								</table>
								<!--<select id="ramoAtividade" name="ramoAtividade">
									<option value="">Selecione o Ramo de Atividade</option>
									<?php
										$ramoAtividade = $banco->query('SELECT ds_tipo_estabelecimento FROM tipo_estabelecimento ORDER BY ds_tipo_estabelecimento');
										foreach($ramoAtividade as $r)
										{
											echo '<option value="'.$r['ds_tipo_estabelecimento'].'">'.$r['ds_tipo_estabelecimento'].'</option>';
										}
									?>
								</select>-->
								
								Email:<input type="email" name="emailEmpresa">
								Site:<input type="text" name="siteEmpresa">
								Dias de funcionamento:
								<table>
									<tr>
										<td><input type="checkbox" name="domingo" id="domingo">Domingo</td>
										<td><input type="checkbox" name="segunda" id="segunda">Segunda</td>
										<td><input type="checkbox" name="terca" id="terca">Terça</td>	
										<td><input type="checkbox" name="quarta" id="quarta">Quarta</td>
										<td><input type="checkbox" name="quinta" id="quinta">Quinta</td>	
										<td><input type="checkbox" name="sexta" id="sexta">Sexta</td>
										<td><input type="checkbox" name="sabado" id="sabado">Sabado</td>
										<td><input type="checkbox" name="todos" id="todos">Todos</td>
									</tr>
								</table>
							

								Celular ou Telefone:<input type="text" name="celularUsu" class="phone">
								Sobre a empresa:<textarea name="sobreEmpresa" rows="10" cols="60" wrap="virtual"></textarea></p>
								<input type="checkbox" name="atualizacaoCelular" value="">Desejo receber atualizações por Celular</td></br>
								<input type="checkbox" name="atualizacaoEmail" value="">Desejo receber atualizações por Email</td>
						</div>
					</div>
				</div>
								
					<footer  align="center">
						<a href="index.php" class="button circled scrolly">Cancelar</a>
						<a href="cad_escolheTPusuario.php" class="button circled scrolly">Voltar</a>
						<input type="submit" name="cadastrar" id="cadastrar" class="button circled scrolly" />
					</footer>
				</form>
			</div>
				
<?php
	require 'rodape.php'
?>