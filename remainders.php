<?php
session_start();
$user_name  =$_SESSION['username'];
echo $user_name;
$msg=$_POST['event'];
$date=$_POST['remdate'];
$month=$_POST['month'];
$year =$_POST['remyear'];
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'userrem');
$reg ="insert into rem(username,date,month,year,event) values ('$user_name','$date','$month','$year','$msg')";
    mysqli_query($con,$reg);
echo "remainder successfully set";
?>