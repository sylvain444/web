<!DOCTYPE html>
<html>
<head>
	<title>email verification</title>
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
<form action="verifyEmailphp.php" method="POST">
  <h2>Verify email</h2><br>
	Email:<input type="email" name="email" required><br><br>
  <input type="submit" name="submit">
</form>
</body> 
</html>