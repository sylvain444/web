
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password in PHP & MySQL</title>
</head>
<body>
<form action="login.php" method="POST">
  <h2>Login to my PHP and mysql web app</h2><br><br>
	Username:<input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>"><br><br>
	Password:<input type="password" name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>"><br><br>
	<button type="submit" name="login">Login</button><br><br>
	<p><input type="checkbox" name="remember" checked="checked"> Remember me</p><br>
  <a href=password.php>Forget my password</a>
   <p><a href="signupForm.php">Forget password</a> </p>
</form>
</body>
</html>