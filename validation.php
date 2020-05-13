<?php

session_start();

$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'userreg');
$name=$_POST['user'];
$pass=$_POST['password'];
$s ="select * from ut where username='$name' && password='$pass'";
$result =mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num ==1)
{
$_SESSION['username']=$name;
header('location:rem.php');
}
else {
  header('location:login1.php');
}
 ?>