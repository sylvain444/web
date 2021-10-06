<?php 
 session_start();
if (!isset($_SESSION['name'],$_SESSION['pass'])) {
   header("location:index.php");
}

 ?>

<?php

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

<?php 
if (!isset($_SESSION['name'],$_SESSION['pass'])) {
   header("location:index.php");
}
$uname=$_SESSION['name'];
$pwd=$_SESSION['pass'];

 echo "<center><a href=home.php>HOME</a> &nbsp;&nbsp;&nbsp;<a href=service.php>SERVICE</a> &nbsp;&nbsp;&nbsp; <a href=contact.php>CONTACT US</a> &nbsp;&nbsp;&nbsp; <a href=logout.php>LOGOUT</a> </center>";
            echo "<p>Kevin Mitnick likely holds the title as the world’s best hacker ever. Kevin Mitnick started hacking at an early age. He broke into the realm of public attention in the 1980s after he hacked into the North American Defense Command (NORAD). These events would inspire the movie War Games. Two other hacking instances propelled Mitnick to be the number one hacker of all time. First, in 1989, he hacked into Digital Equipment Corporation (DEC) to make copies of their software. </p>";  
            echo "<center><img src='hacker.jpg'></center>"; 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title>Home page</title>
 </head>
 <style type="text/css">
    body {
            background-color: white;
            max-width: 1000px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
  </style>
 <body>
 <h3><center>Cookies Set Successfuly</h3></center>";
 <input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
 </body>
 </html>