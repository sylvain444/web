
<?php
session_start();
include 'database.php';
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$salt=$pwd."sylvain";
$hashpwd=hash('sha1', $salt);
   $sql = "select *from student where uname = '$uname' and pwd = '$hashpwd'";  
        $result1 = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result1);   
        if($count == 1){  
           //header("location:home.php");
   $query = "SELECT * FROM student WHERE status='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
   header("location:home.php");
            if(!empty($_POST["remember"])) {
            setcookie ("uname",$_POST["uname"],time()+ 3600);
            setcookie ("pwd",$_POST["pwd"],time()+ 3600);
           
            }
            $_SESSION['name']=$uname;
            $_SESSION['pass']=$hashpwd; 
        }
        header('location:home.php');
   }       
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 

?>