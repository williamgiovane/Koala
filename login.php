<?php
	session_start();

	require 'config.php';
	require 'classes/Db.class.php';
	
	//Criando obj da classe BD
	$banco = new DB();

	if($_POST)
	{
		$usuEmail = $_POST["usuEmail"];
		$senha = sha1($_POST['senha1']);

		$banco->bind("email", $usuEmail);
		$banco->bind("senha", $senha);

		$selectUsu = $banco->row("select id_usuario, nm_usuario, email, TIPO_USUARIO_id_tipo_usuario as 'tipo' from usuario where email = :email and senha = :senha");

		if($selectUsu)
		{
			$_SESSION["logado"] = true;	
			$_SESSION["nmUsu"] = $selectUsu["nm_usuario"];	
			$_SESSION["idUsuario"] = $selectUsu["id_usuario"];
			$_SESSION["usuEmail"] = $selectUsu["email"];
			$_SESSION["tipoUsu"] = $selectUsu["tipo"];	
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
								Usuário ou Email:<input type="text" name="usuEmail" id="usuEmail">
								Senha:<input type="password" name="senha1" id="senha1"></br>
									
								<input type="submit" name="Logar" id="login" class="button circled scrolly" />	

							</form>
						</div>
					</div>
				</div>
			</div>
				
<?php
	require 'rodape.php'
?>