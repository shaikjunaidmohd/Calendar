
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
    body {
    background-image:url("im.png");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
html {
    height: 100%
}
    

.site-nav li a {
    display: inline-block;
    padding: 10px 30px;
    color: #fff;
    text-decoration: none;
    border-right: 1px solid #fff;
}
</style>
    </head>
    <body >
        <nav class="site-nav">
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="calhome.php">CALENDAR</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">REMAINDERS</a>
    <div class="dropdown-content">
      <a href="view.php">VIEW REMAINDERS</a>
      <a href="rem.php">SET REMAINDERS</a>
        <li style="float:right"><a class="active" href="logout.php">LOGOUT</a></li>
      <li style="float:right"><a class="active" ><?php session_start(); $name=$_SESSION['username']; echo "WELCOME : "; echo $name; ?></a></li>
    </div>
  </li>
</ul>
    </nav>
        <table id ="table1" style='padding-top:30px' align="center" border="0" cellpadding=50 cellspacing="1">
        
        
        
        <?php
session_start();
$user_name  =$_SESSION['username'];
//echo $user_name;
            
    $i="Date";
    $j="Month";
    $k="Year";
    $l="Event";
            
            echo"<tr>";
            echo "<th>".$i."</th>";
    echo "<th>".$j."</th>";
    echo "<th>".$k."</th>";
    echo "<th>".$l."</th>";
            echo"</tr>";
            
            
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "userrem";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM rem WHERE username='$user_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo '<td align="center"> ' .$row["date"].'</td>';
        echo '<td align="center"> ' .$row["month"].'</td>';
        echo '<td align="center"> ' .$row["year"].'</td>';
        echo '<td align="center"> ' .$row["event"].'</td>';
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
        </table>
    </body>
</html>
