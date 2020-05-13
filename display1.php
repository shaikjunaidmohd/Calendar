<html>
    <head>
      <style>
          #table {
            border: 10px ;
            width: 50px;
         }
          body {

background-repeat: no-repeat;
background-size: 100% 100%;
}
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
          
      </style>
   </head>
<body background="im.png" align="center">  
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
        
        
    <table id ="table1" style='padding-top:30px' align="center" border="0" cellpadding=20 cellspacing="0">
    
<?php
    
  
  $y=$_POST['year'];
    $date=$_POST['date'];
   
$m=$_POST['month'];
        
        $ar=array("JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER");
        echo " ";
        echo "<br>";
        echo " ";
        echo "<br>";
        echo " ";
        echo "<br>";
        
        echo $ar[$m-1];
        echo "-";
        echo $y;
/*function dayofweek($d, $m, $y) 
{
static $t = array(1,4,4,0,2,5,0,3,6,1,4,6); 
$year=($y%100);
$res=$year/4;
$leap = (int)$res;

if($y>=1600 and $y<=1699)
{
    $cc=6;
}
else if($y>=1700 and $y<=1799)
{
    $cc=4;
}
else if($y>=1800 and $y<=1899)
{
    $cc=2;
}
else if($y>=1900 and $y<=1999)
{
    $cc=0;
}
else if($y>=2000 and $y<=2099)
{
    $cc=6;
}
else if($y>=2100 and $y<=2199)
{
    $cc=4;
}
return ($d + $t[$m-1] + $cc + $year + $leap);
}
$day = dayofweek(1,$m,$y)% 7; 
echo $day ; */
$jd=gregoriantojd($m,1,$y);
$yu= jddayofweek($jd,1);
$array = array("Saturday","Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday"); 
$value = $yu; 
$day= array_search($value,$array);
//echo $day;
        
        $d=cal_days_in_month(CAL_GREGORIAN,$m,$y);

    
    $j="Monday";
    $k="Tuesday";
    $l="Wednesday";
    $m="Thursday";
    $n="Friday";
    $o="Saturday"; 
    $i="Sunday";
echo"<tr>";
        
    echo "<th>".$i."</th>";
    echo "<th>".$j."</th>";
    echo "<th>".$k."</th>";
    echo "<th>".$l."</th>";
    echo "<th>".$m."</th>";
    echo "<th>".$n."</th>";
    echo "<th>".$o."</th>";

echo "</tr>";
       $z=" "; 
        $o="1";
echo "<tr>";
        $color="#F00";
        if($day == 0)
        {
            for($m=1;$m<=6;$m++)
            {
                    echo "<td>".$z."</td>";
            }
            if($o==$date)
            {
                echo '<td align="center" bgcolor=#F00>'.$o.'</td>';

            }
            else
            {
                echo '<td align="center">'.$o.'</td>';
            }
            echo "<tr>";
            for($g=2;$g<=7-$day+1;$g++)
            {
                if($g==$date)
                {
                  echo '<td  align="center" bgcolor=#F00>'.$g.'</td>';
                }
                else{
                    echo '<td align="center" >'.$g.'</td>';
                }
                
            }
            echo "</tr>";
        }
        else
        {
            for ($j=1;$j<$day;$j++)
            {
                echo '<td align="center">'.$z.'</td>';
            }
            for($g=1;$g<=7-$day+1;$g++)
            {
                if($g==$date)
                {
                  echo '<td align="center" bgcolor=#F00>'.$g.'</td>';
                }
                else{
                    echo '<td align="center">'.$g.'</td>';

                }
            }
            
        }

        
        $k=7-$day+2;
        $q=1;
        while($k<$d)
        {
            echo "<tr>";
            for ($p=1;$p<=7;$p++)
            {
                if($k == $d)
                {
                    $q=0;
                }
                if($k==$date)
                {
                    echo '<td align="center" bgcolor=#F00>'.$k.'</td>';
                }
                else{
                    echo '<td align="center">'.$k.'</td>';

                }
                if($k<$d)
                {
                   $k++;
                }
                else
                {
                    break;
                }
                

            }
             echo "</tr>";
        }
        if($k == $d and $q != 0)
        {
            echo "<tr>";
            if($k == $date)
            {
                 echo '<td align="center" bgcolor=#F00>'.$k.'</td>';

            }
            else{
                 echo '<td align="center">'.$k.'</td>';

            }
            echo "</td>";
        }
        
       
        
  echo "</tr>";
  
    
?>
        
    </table>
    </body>
</html>
