<?php

    if(isset($_POST['submit']))
    {
        // print_r('Name: ' . $_POST['name']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Phone: ' . $_POST['phone']);
        // print_r('<br>');
        // print_r('Date of Birth: ' . $_POST['date_of_birth']);
        // print_r('<br>');
        // print_r('Gender: ' . $_POST['gender']);
        // print_r('<br>');
        // print_r('Ciry: ' . $_POST['city']);
        // print_r('<br>');
        // print_r('State: ' . $_POST['state']);
        // print_r('<br>');
        // print_r('Address: ' . $_POST['address']);
        
        include_once('config.php');
        
        $name = $_POST['name'];
        $email = $_POST['email'];
		$password = $_POST['password'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $address = $_POST['address'];
        
        $result = mysqli_query($conexao, "INSERT INTO user(name,email,password,phone,gender,date_of_birth,city,state,address) VALUES ('$name','$email','$password','$phone','$gender','$date_of_birth','$city','$state','$address')");
		
		header('Location: login.php');
    }

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=devide-width, initial-scale=1.0">
  <link rel ="stylesheet" type="text/css" href="form.css">
  <title>Form</title>  
</head>
<body>
<br />
<a href="home.php">Back to Home</a>
  <div class="box col-3 col-s-11">
	  <form action="form.php" method="POST">
		  <fieldset>
			  <legend><b>Sample Register Form</b></legend>
			  <br />
			  <div class="inputbox">
				   <input type="text" name="name" id="name" class="inputuser" required>
				   <label for="name" class="inputlabel">Full Name</label>
			  </div><br />
			  
			  <div class="inputbox">
				   <input type="text" name="email" id="email" class="inputuser" required>
				   <label for="email" class="inputlabel">Email</label>
			  </div><br />
			  
			  <div class="inputbox">
				   <input type="password" name="password" id="password" class="inputuser" required>
				   <label for="password" class="inputlabel">Password</label>
			  </div><br />
			  
			  <div class="inputbox">
				   <input type="tel" name="phone" id="phone" class="inputuser" required>
				   <label for="phone" class="inputlabel">Phone Number</label>
			  </div><br />
			  
			  <p>Sexo:</p>
			  <input type="radio" name="gender" id="female" value="female" required>
			  <label for="female">Female</label><br />
			  <input type="radio" name="gender" id="male" value="male" required>
			  <label for="male">Male</label><br />
			  <input type="radio" name="gender" id="other" value="other" required>
			  <label for="other">Other</label><br /><br />
			  
			  <label for="date"><b>Date of Birth:</b></label>
			  <input type="date" name="date_of_birth" id="date_of_birth" required>
			  <br /><br />
			  
			  <div class="inputbox">
				   <input type="text" name="city" id="city" class="inputuser" required>
				   <label for="city" class="inputlabel">City</label>
			  </div><br />
			  <div class="inputbox">
				   <input type="text" name="state" id="state" class="inputuser" required>
				   <label for="state" class="inputlabel">State</label>
			  </div><br />
			  <div class="inputbox">
				   <input type="text" name="address" id="address" class="inputuser" required>
				   <label for="address" class="inputlabel">Address</label>
			  </div><br />
			  <input type="submit" name="submit" id="submit" value="Submit">
		  </fieldset>
		  
	  </form>
  </div>

</body>
</html>