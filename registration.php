<?php

session_start();

$conn=mysqli_connect('localhost','root','root');
mysqli_select_db($conn,'userreg');
$name=$_POST['username'];
$pass=$_POST['password'];
$s="select * from ut where username='$name'";
$result= mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    echo "Username already taken ";
}
else{
    $reg ="insert into ut(username,password) values ('$name','$pass')";
    mysqli_query($conn,$reg);
    echo $name;
    echo "registration success";
    
}
  

 ?>