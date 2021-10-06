
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web App</title>
	<style type="text/css">
		form {
            background-color: green;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
	</style>
</head>
<body style="text-align: center;">
<h2>Create your account now</h2>
<form action="signup.php" method="POST">
	First name:<input type="text" name="fname" required="required"><br><br>
	Last name:<input type="text" name="lname" required="required"><br><br>
	Email:<input type="email" name="email" required="required"><br><br>
	Username:<input type="text" name="uname" required="required"><br><br>
	Password:<input type="password" name="pwd" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{10,}" title="Must contain at least one number,one uppercase letter,one lowercase letter and one special character, and at least 10 or more characters" name="psw" required><br><br>
	<button type="submit" name="signup">SignUp</button><br><br>
   <p> I have an account?  <a href="index.php">Log in</a> </p>
</form>
</body>
</html>