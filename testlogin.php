<?php
session_start();
	// This "print_r()" Checks if your form request was redirected here
	// print_r($_REQUEST);
	
	if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['email']))
	{
		// If you fill the fields and they are not empty, you'll access
		include_once('config.php');
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		// print_r('Email: ' . $email);
		// print_r('<br />');
		// print_r('Password: ' . $password);
		
		$sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
		$result = $conexao->query($sql);
		
		
		if(mysqli_num_rows($result) < 1)
		{
			// print_r('It does not exist');
			unset($_SESSION['email']);
			unset($_SESSION['password']);
			header('Location: login.php');
		}
		else
		{
			// print_r('It is exist');
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header('Location: dashboard.php');
		}
	}
	else
	{
		// It does not access
		header('Location: login.php');
	}

?>