<?php
	
	include_once('config.php');
	
	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$date_of_birth = $_POST['date_of_birth'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$address = $_POST['address'];
		
		$sqlupdate = "UPDATE user SET name='$name',email='$email',password='$password',phone='$phone',gender='$gender',date_of_birth='$date_of_birth',city='$city',state='$state',address='$address' WHERE id='$id'";
		
		$result = $conexao->query($sqlupdate);
		
	}
	header('Location: dashboard.php');
?>