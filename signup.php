<?php
include 'database.php';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pwd=sha1($_POST["pwd"]);
$sql = "INSERT INTO student (fname,lname,email,uname,pwd)
VALUES ('$fname','$lname','$email','$uname','$pwd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>