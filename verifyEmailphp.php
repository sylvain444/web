<?php
session_start();
require_once('database.php');
if (isset($_POST['submit'])) {
  $email = $conn->real_escape_string($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid Email format";
    }
$result ="SELECT count(*) FROM student WHERE email=?";
$stmt = $conn->prepare($result);
$stmt->bind_param('s',$email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
  if ($count==0) { 
   
      echo "Email provided not found";
    }
else{
    
$otp= mt_rand(1000000, 9999999);
$query = "UPDATE student SET code=? WHERE email=? ";
$stmti = $conn->prepare($query);
$stmti->bind_param('is',$otp,$email);
$stmti->execute();
$stmti->close();
    $_SESSION['email'] = $email;
    $_SESSION['code'] = $otp;
    //$_SESSION['stat'] = $status;
    $to=$email;
    $from="From: sndayishimiye91@gmail.com";
    $subject="Verification Code for my Website";
    $message =$otp;
  
    $mailing = mail($to,$subject,$message,$from);

    header('location:verificationCode.php');
    
  }
}


?>