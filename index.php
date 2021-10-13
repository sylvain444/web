<?php
session_start();
//create csrf token
if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
    else {
      echo"CSRF Validation Failed.";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web App</title>
	<style type="text/css">
		form {
            background-color: yellow;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
        input{
          border-radius: 15px;
          font-style: italic; 
          padding: 10px 30px; 
        }
	</style>
</head>
<body style="text-align: center;">
<form action="login.php" method="POST">
  <h2>Login to my PHP and mysql web app</h2><br><br>
	Username:<input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>"><br><br>
	Password:<input type="password" name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>"><br><br>
	<button type="submit" name="login">Login</button><br><br>
	<p><input type="checkbox" name="remember" checked="checked"> Remember me</p><br>
  <a href=forgetPassword.php>Forget my password</a>
   <p> I do not have an account?  <a href="signupForm.php">Sign Up</a> </p>
   <input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
</form>
</body>
</html>
