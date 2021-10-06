
<?php
session_start();
include 'database.php';
$uname=$_POST["uname"];
$pwd=sha1($_POST["pwd"]);
   $sql = "select *from student where uname = '$uname' and pwd = '$pwd'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
        if($count == 1){  
           header("location:home.php");
            if(!empty($_POST["remember"])) {
            setcookie ("uname",$_POST["uname"],time()+ 3600);
            setcookie ("pwd",$_POST["pwd"],time()+ 3600);
           
            }
            $_SESSION['name']=$uname;
            $_SESSION['pass']=$pwd; 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 

?>