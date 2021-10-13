
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
	<?php 
	$sele=$_GET['sele'];
	if(empty($sele)){
		echo "Password not changed";
}
else{


	 ?>

<form action="reset.php" method="POST">
  <h2>Reset my password</h2><br>
	New password:<input type="password" name="pwd1"><br><br>
	Confirm password:<input type="password" name="pwd2"><br><br>
	<input type="hidden" name="sele" value="<?php echo $sele; ?>">
	<input type="submit" name="submit">
</form>

<?php 
}
 ?>
</body>
</html>


