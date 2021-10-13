<?php 
if (isset($_POST['submit'])) {
  $sele=$_POST['sele'];
  $a=0;
  $password=$_POST['pwd1'];
  $passwordrepeat=$_POST['pwd2'];
 if ($password!=$passwordrepeat) {
    echo '<script language="javascript">';
echo 'alert("password not match");';
echo "\n";
header("location:resetPassword.php?sele=$sele");
echo '</script>';

exit();
  }
  require "database.php";
$sql="select* from resetpassword where selector=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$sele);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['selector']==$sele)
    {
    $a=$a+1;
    $tokenemail=$row['email'];
}
  }
  if ($a<1) {
 echo "you need to re-submit your request".$sele;
  }
  else
  {
$sql="select* from resetpassword where email=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$tokenemail);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  if (!$row=mysqli_fetch_assoc($select)) {
    echo "There is an error!";
  }
  else
  {
  $sql="UPDATE student set pwd=? where email=?";
  $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  $newpwdhash=sha1($passwordrepeat);
  mysqli_stmt_bind_param($stmt,"ss",$newpwdhash,$tokenemail);
  mysqli_stmt_execute($stmt);

  $sql="delete from resetpassword where email=?";
     $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$tokenemail);
  mysqli_stmt_execute($stmt);
  header("location:index.php?newpwd=passwordupdated");
} 
  }

    }
}
}}}
else
{
  header("location:index.php");
}
?>