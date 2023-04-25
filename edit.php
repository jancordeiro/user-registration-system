<?php

    if(!empty($_GET['id']))
    {
        
        include_once('config.php');
		
		$id = $_GET['id'];
		
		$sqlSelect = "SELECT * FROM user WHERE id=$id";
		
		$result = $conexao->query($sqlSelect);
		
		if($result->num_rows > 0)
		{
			while($user_data = mysqli_fetch_assoc($result))
			{
				$name = $user_data['name'];
				$email = $user_data['email'];
				$password = $user_data['password'];
				$phone = $user_data['phone'];
				$gender = $user_data['gender'];
				$date_of_birth = $user_data['date_of_birth'];
				$city = $user_data['city'];
				$state = $user_data['state'];
				$address = $user_data['address'];
			}
				
			
		}
        else
		{
			header('Location: dashboard.php');
		}		
        
    }
	else
	{
		header('Location: dashboard.php');
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
<a href="dashboard.php">Back to Dashboard</a>
  <div class="box col-3 col-s-11">
	  <form action="saveedit.php" method="POST">
		  <fieldset>
			  <legend><b>Edit User Data</b></legend>
			  <br />
			  <div class="inputbox">
				   <input type="text" name="name" id="name" class="inputuser" value="<?php echo $name ?>" required>
				   <label for="name" class="inputlabel">Full Name</label>
			  </div><br />
			  
			  <div class="inputbox">
				   <input type="text" name="email" id="email" class="inputuser" value="<?php echo $email ?>" required>
				   <label for="email" class="inputlabel">Email</label>
			  </div><br />
			  
			  <div class="inputbox">
				   <input type="text" name="password" id="password" class="inputuser" value="<?php echo $password ?>" required>
				   <label for="password" class="inputlabel">Password</label>
			  </div><br />
			  
			  <div class="inputbox">
				   <input type="tel" name="phone" id="phone" class="inputuser" value="<?php echo $phone ?>" required>
				   <label for="phone" class="inputlabel">Phone Number</label>
			  </div><br />
			  
			  <p>Sexo:</p>
			  <input type="radio" name="gender" id="female" value="female" <?php echo ($gender == 'female') ? 'checked' : '' ?> required>
			  <label for="female">Female</label><br />
			  <input type="radio" name="gender" id="male" value="male" <?php echo ($gender == 'male') ? 'checked' : '' ?> required>
			  <label for="male">Male</label><br />
			  <input type="radio" name="gender" id="other" value="other" <?php echo ($gender == 'other') ? 'checked' : '' ?> required>
			  <label for="other">Other</label><br /><br />
			  
			  <label for="date"><b>Date of Birth:</b></label>
			  <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $date_of_birth ?>" required>
			  <br /><br />
			  
			  <div class="inputbox">
				   <input type="text" name="city" id="city" class="inputuser" value="<?php echo $city ?>" required>
				   <label for="city" class="inputlabel">City</label>
			  </div><br />
			  <div class="inputbox">
				   <input type="text" name="state" id="state" class="inputuser" value="<?php echo $state ?>" required>
				   <label for="state" class="inputlabel">State</label>
			  </div><br />
			  <div class="inputbox">
				   <input type="text" name="address" id="address" class="inputuser" value="<?php echo $address ?>" required>
				   <label for="address" class="inputlabel">Address</label>
			  </div><br />
			  <input type="hidden" name="id" value="<?php echo $id ?>">
			  <input type="submit" name="update" id="update" value="Submit">
		  </fieldset>
		  
	  </form>
  </div>

</body>
</html>