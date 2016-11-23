<?php
	$_SESSION["logado"] = ( isset( $_SESSION["logado"] ) ) ? $_SESSION["logado"] : '';
?>			

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="index.php">Inicio</a></li>

					<li><a href="noticias.php">Notícias</a></li>
					
					<?php 
						if($_SESSION["logado"] == true)
						{
					 ?>
					 		<li><a href="perfilUsu.php">Perfil</a></li>
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
					<?php } ?>
			
					<?php if($_SESSION["logado"] != true)
						  { ?>
							<li><a href="login.php">Login</a></li>
							<li><a href="cad_escolheTPusuario.php">Registrar</a></li>
					<?php } ?>
					
					<?php if( $_SESSION["logado"] == true)
					      { ?>
							<li><a href="sair.php?sair=s">Sair</a></li>
					<?php } ?>
				
				</ul>
			</nav>