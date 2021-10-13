<?php 

if(!empty($_GET['reset'])){
	if($_GET['reset']='success'){
	 echo "<center><h1> Check message sent to your email to reset password </h1></center>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password in PHP & MySQL</title>
		<style>
	form {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
        input{
          border-radius: 15px;
          padding: 10px 30px;
        }
	</style>
</head>
<body>
<form action="forget.php" method="POST">
  <h2>Forget my password</h2><br>
	Email:<input type="email" name="email"><br><br>
  <input type="submit" name="submit">
</form>
</body>
</html>