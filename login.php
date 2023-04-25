<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=devide-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>Login Page</title>
</head>
<body>
<br />
<a href="home.php">Back to Home</a>
  <div class="login-block">
	  <h1>Login</h1>
	  <form action="testlogin.php" method="POST">
	  <input type="text" name ="email" placeholder="Email"> <br /><br />
	  <input type="password" name="password" placeholder="Password"> <br /><br />
	  <input class="submitbtn" type="submit" name="submit" value="Submit"> <br /><br />	  
	  </form>	  
  </div>
</body>
</html>