<?php 
	session_start();

	if( $_GET["sair"] == "s" )
	{

		session_destroy();
		header("Location: index.php");

	}

 ?>