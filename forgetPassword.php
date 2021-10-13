<?php 

if(!empty($_GET['reset'])){
	if($_GET['reset']='success'){
		echo "Message sent";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password in PHP & MySQL</title>
</head>
<body>
<form action="forget.php" method="POST">
  <h2>Forget my password</h2><br>
	Email:<input type="email" name="email"><br><br>
  <input type="submit" name="submit">
</form>
</body>
</html>