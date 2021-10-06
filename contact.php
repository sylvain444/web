<?php 
session_start();
if (!isset($_SESSION['name'],$_SESSION['pass'])) {
   header("location:index.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>contact</title>
</head>
<body>
	<center> <a href=home.php>HOME</a> &nbsp;&nbsp;&nbsp;<a href=service.php>SERVICE</a> &nbsp;&nbsp;&nbsp; <a href=contact.php>CONTACT US</a> &nbsp;&nbsp;&nbsp; <a href=logout.php>LOGOUT</a> </center>
	<h1>You can contact us using:</h1>
	<ol>
		<li>Phone call</li>
		<li>WhatsApp</li>
		<li>Facebook</li>
		<li>Instagram</li>
		<li>Tiktok</li>
	</ol>
	<h4>For more information signup and send us a message</h4>

</body>
</html>