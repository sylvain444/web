<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web App</title>
</head>
<body>
<h3>PHP and mysql web app</h3>
<form action="login.php" method="POST">
	<input type="text" placeholder="Enter a username" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>"><br>
	<input type="password" placeholder="Enter password" name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>"><br>
	<button type="submit" name="login">Login</button><br>
	<p><input type="checkbox" name="remember" /> Remember me</p>
   <p> I do not have an account?  <a href="signupForm.php">Sign Up</a> </p>
</form>
</body>
</html>
