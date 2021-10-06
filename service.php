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
	<title>Service we offer</title>
	<style type="text/css">
		a{
			color: blue;
		}
	</style>
</head>
<body>
    <center><a href=home.php>HOME</a> &nbsp;&nbsp;&nbsp;<a href=service.php>SERVICE</a> &nbsp;&nbsp;&nbsp; <a href=contact.php>CONTACT US</a> &nbsp;&nbsp;&nbsp; <a href=logout.php>LOGOUT</a> </center>
	<h1>We offer the following services</h1>
	<p>Project management <br>
Needs analysis (audience and content)<br>
Instructional design<br>
Curriculum Design<br>
Legacy content conversion (migrating face-to-face and static resources to the e-learning environment)<br>
Content & interactivity writing/editing/storyboarding<br>
Student assessment writing/editing<br>
Media production (audio, graphics, video, and animations)<br>
Course elements authoring/programming<br>
Custom template development<br>
LMS (Learning Management System) implementation, hosting, security and management<br>
Student performance reporting<br>
Content access & usage reporting<br>
Implementation & marketing</p>


</body>
</html>