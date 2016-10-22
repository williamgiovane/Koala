<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();

	if( $_POST ){

		$nome = $_POST["usuEmail"];
		$senha = $_POST["senha1"];

		$banco->bind("email", $nome);
		$banco->bind("senha", $senha);

		$row = $banco->query("select * from usuario where email = :email and senha = :senha");

		if( count($row) > 0 )
		{
			$_SESSION["logado"] = true;
			header("Location: index.php");

		}else{

			header("Location: login.php");

		}
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
		<title>Login</title>
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
						<h1><a href="index.php" id="logo">Login</a></h1>
					</header>
				</div>
				<?php
					require 'cabecalho.php';
				?>
			</div>

			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<h2>Digite os dados de Login:</a></h2></br>
					<div class="content">
						<div class="8u 12u(mobile)" id="content">
							<form action="login.php" method="post" >
								Usuario ou Email:<input type="text" name="usuEmail"></br>
								Senha:<input type="password" name="senha1"></br>
								Confirmação da senha:<input type="password" name="senha2"></br>
									
								<input type="submit" name="login" id="login" class="button circled scrolly" />	

							</form>
						</div>
					</div>
				</div>
								
				<!-- <footer align="center">
					<a href="index.php" class="button circled scrolly">Cancelar</a>
					<a href="index.php" class="button circled scrolly">Login</a>
				</footer> -->
			</div>
				
<?php
	require 'rodape.php'
?>