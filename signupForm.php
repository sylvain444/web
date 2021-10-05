<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web App</title>
</head>
<body>
<h3>PHP and mysql web app</h3>
<form action="signup.php" method="POST">
	<input type="text" placeholder="Enter First name" name="fname"><br>
	<input type="text" placeholder="Enter Last name" name="lname"><br>
	<input type="email" placeholder="Enter Your Email" name="email"><br><br><br>
	<input type="text" placeholder="Enter a username" name="uname" ><br>
	<input type="password" placeholder="Enter password" name="pwd" ><br>
	<button type="submit" name="signup">SignUp</button><br><br>
	<p><input type="checkbox" name="remember" /> Remember me</p>
   <p> I have an account?  <a href="loginForm.php">Log in</a> </p>
</form>
</body>
</html>