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
    div.transbox {
        padding-left: 50px;
        padding-right: 50px;
  margin: 30px;
  background-color: #000000;
  border: 1px solid black;
  opacity: 0.8;
  filter: alpha(opacity=500); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: white;
}
    .button {
  background-color: #0000FF;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
   
    select {
  width:50%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
    input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
}
</style>
</head>
<body style="text-align:center;" >
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
      <li style="float:right"><a class="active" ><?php 
          session_start(); $name=$_SESSION['username']; echo "WELCOME : "; echo $name; ?></a></li>
    </div>
  </li>
</ul>
    </nav>
	<h2> Calendar</h2>
    <div class="transbox">
    
	<form action="display1.php" method="post">
        <p>
            <strong>Date:</strong>
            <input type="text" id="fname" name="date" required ><br><br>  <br>
            <br>
        <strong>Month:</strong>
  <select name="month" required>
    <option value="1" > January</option>
    <option value="2" > February</option>
    <option value="3" >March </option>
    <option value="4" >April </option>
      <option value="5" >May </option>
      <option value="6" > June</option>
      <option value="7" >July </option>
      <option value="8" >August </option>
      <option value="9" >September </option>
      <option value="10" >October </option>
      <option value="11" >November </option>
      <option value="12">December </option>
      
  </select>

        
        
        </p>
		<p>
          
            Year:
			<input type="text" id="fname" name="year" required ><br><br>

			<button type="submit" class ="button" >Go!</button>
		</p>
     <!---   </form>
            <form action ="remainders.php" method="POST">
        <p>
            Enter Date:
            <input type="text" name="remdate" required ><br><br>
            Enter Event:
            <input type="text" name="event" required ><br><br>
            Enter Month:
             <select name="month" required>
    <option value="1" > January</option>
    <option value="2" > February</option>
    <option value="3" >March </option>
    <option value="4" >April </option>
      <option value="5" >May </option>
      <option value="6" > June</option>
      <option value="7" >July </option>
      <option value="8" >August </option>
      <option value="9" >September </option>
      <option value="10" >October </option>
      <option value="11" >November </option>
      <option value="12">December </option>
      
  </select><br><br>
            Enter Year:
            <input type="text" name="remyear" required ><br>
            			<button type="submit" >Set Remainder!</button>

                </p>
        </form> --->
        </div>
	
</body>
</html>

