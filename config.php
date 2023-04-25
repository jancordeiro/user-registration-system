<?php
	
	// PHP file to connect to the database
	// Sample created by Jan Cordeiro
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "user_registration";
	
	$conexao = new mysqli($servername,$username,$password,$database)
	
	// if ($conexao->connect_errno)
	// {
	//	echo "Failed to connect to the database";
	// }
	// else
	// {
	//	echo "The connection was successful";
	// }
	
?>
