<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
<form action="verification.php" method="POST">
	<h1>Send your verification code</h1>
	<input type="text" placeholder="Enter your email" name="code">
	<input type="submit" name="submit">
</form>
</body>
</html>