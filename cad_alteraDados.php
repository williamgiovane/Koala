<?php
    session_start();

    require 'config.php';
    require 'classes/Db.class.php';
    
    //Criando obj da classe BD
    $banco = new DB();

    $_SESSION["logado"] = ( isset( $_SESSION["logado"] ) ) ? $_SESSION["logado"] : '';

    if($_POST)
    { 
        if($_POST["nmUsu"] != $_SESSION["nmUsu"]) 
        {
            $banco->bind("nome", $_POST["nmUsu"]);
            $banco->bind("idUsuarioPHP", $_SESSION["idUsuario"]);
            $resultado = $banco->query("update usuario set nm_usuario = :nome where id_usuario = :idUsuarioPHP");

            if ($resultado) 
            {
                echo '<div class="alert alert-success" role="alert"> Dados alterados com sucesso.</div>';
                $_SESSION["nmUsu"] = $_POST["nmUsu"];
            }
        }
        if($_POST["novaSenha"] == $_POST["novaSenha2"]) 
        {
            $banco->bind("senha", sha1($_POST["novaSenha"]));
            $banco->bind("idUsuarioPHP", $_SESSION["idUsuario"]);

            $resultado = $banco->query('update usuario set senha = :senha where id_usuario = :idUsuarioPHP');

            if ($resultado) 
            {
                echo '<div class="alert alert-success" role="alert"> Senha alterada com sucesso.</div>';
                header('Location:perfilUsu.php');
            }else
            {
                echo  '<div class="alert alert-danger" role="alert"> Dados informadas são diferente.</div>';
            }
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
        <title>Registro de Usuario</title>
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
                            <h1>Altere seus Dados do <?php echo NOME_SITE; ?></h1>
                        </header>
                    </div>

                <?php
                    require 'cabecalho.php';
                ?>
            </div>

            <!-- Main -->
            <div class="wrapper style1">
                <div class="container">
                    <div class="content">
                        <div class="8u 12u(mobile)" id="content">
                            <form action="cad_alteraDados.php" method="post" id="formAlteraDados">                             
                                Novo Nome:<input type="text" name="nmUsu" id="nmUsu" class="required">
                                Nova Senha:<input type="password" name="novaSenha" id="novaSenha" class="required">
                                Confirmação da Nova Senha:<input type="password" name="novaSenha2" id="novaSenha2" class="required">  
                                </br><a href="perfilUsu.php" class="button circled scrolly">Voltar</a>
                                <input type="submit" value="Alterar Dados" name="cadastrar" class="button">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
<?php
    require 'rodape.php'
?>
