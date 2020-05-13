<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000000;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: aqua ;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000000;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
    
    }

.dropdown-content a:hover {background-color: aqua;}

.dropdown:hover .dropdown-content {
  display: block;
    
    
    
}
    .site-nav a { 

color:white;
font-size: 25px; 
font-family: impact;        
        
        
/*etc*/

}
    

.site-nav li a {
    display: inline-block;
    padding: 10px 30px;
    color: #fff;
    text-decoration: none;
    border-right: 1px solid #fff;
    }
    body {
    background-image:url("Berlin.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
html {
    height: 100%
}

</style>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
    
<body  >
<nav class="site-nav">
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="calhome.php">CALENDAR</a></li>
  <li class="dropdown">
    <a href="rem.php" class="dropbtn">REMAINDERS</a>
    <div class="dropdown-content">
      <a href="view.php">VIEW REMAINDERS</a>
      <a href="rem.php">SET REMAINDERS</a>
        <li style="float:right"><a class="active" href="logout.php">LOGOUT</a></li>
      <li style="float:right"><a class="active" ><?php $name=$_POST['user']; echo "WELCOME : "; echo $name; ?></a></li>
    </div>
  </li>
</ul>
    </nav>

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
//echo 'Login successfull';
}
else {
   
    include 'wrong.txt';
header('location:login.php');
echo "Username and password are incorrect";
  
}
//echo "WELCOME";
  //  echo $name;
   
    
    ?>
    <div class="container">
		<p align="center" id="time"></p>
	</div>
	<script>
	$(document).ready(function(){
		var show_time='time';
		show_t(show_time);
		setInterval(function(){show_t(show_time); },1000);
	});
	function show_t(show_time){
		$.ajax({
			url:"time.php",
			method:"post",
			data:{show_time:show_time},
			success:function(data){
				$('#time').html(data);
			}
		})
	}
	</script>
</body>
</html>

