<?php
    $servername = "localhost";
    $username="root";
    $password="";
    $db="student";
    $conn=mysqli_connect($servername,$username,$password,$db);
    if(!$conn){
        die("Could not Connect My Sql:" .mysql_error());
    }
?>