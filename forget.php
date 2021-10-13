<?php 
if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $n=0;
  include("database.php");
  $sql="select* from student where email=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['email']==$email)
    {
    $n=$n+1;
    $tok=$row['email'];
}
  }
}
  if($n>=1){
  $sele=bin2hex(random_bytes(8));
  $token=random_bytes(32);
  $url="http://localhost/WEB/resetPassword.php?sele=".$sele;
  
     $sql="delete from resetpassword where email=?";
     $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);
}
$sql2="insert into resetpassword(email,selector) values(?,?)";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql2)) {
 echo "statement failed";
}
else{
  $hashedtoken=password_hash($token,PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt,"ss",$email,$sele);
  mysqli_stmt_execute($stmt);
}
//mysqli_stmt_close($stmt);
$from = 'sndayishimiye91@gmail.com';
$to = $email;
$subj = 'Reset password';
$msg = '<p>Here is the link you need to follow';
$msg .= '<a href="'.$url.'</a></p>';
$head = 'From: ' . $from;
$head .= 'Reply-To: ' . $from;
$head .= 'Content-type:text/html';
mail($to, $subj, $msg, $head);
header("location:forgetPassword.php?reset=success");
}
else{
  echo "Invalid email";
}
}
?>