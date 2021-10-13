<?php
session_start();
include 'database.php';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pwd=sha1($_POST["pwd"]);
$code=mt_rand(1000000,9999999);
$_SESSION['email']=$email;
$_SESSION['code']=$code;
$status="Not verfied";
$sql="insert into student (fname,lname,email,uname,pwd,code,status) values(?,?,?,?,?,?,?)";
$st=mysqli_stmt_init($conn);
    $to=$email;
    $from="From: sndayishimiye91@gmail.com";
    $subject="Verification Code for my Website";
    $message =$code;
    $mailing = mail($to,$subject,$message,$from);
if(mysqli_stmt_prepare($st,$sql))
{
//echo "New record created successfully";
mysqli_stmt_bind_param($st,"sssssss",$fname,$lname,$email,$uname,$pwd,$code,$status);
mysqli_stmt_execute($st);
header('location:verificationCode.php');
    
}
else{

echo "error:".$sql."<br>".$conn->error;

}

$conn->close();
?>