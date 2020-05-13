<!DOCTYPE html>
<html>
<head>
<style>
.center { 
  height: 500px;
  position: relative;
}
    @font-face
    {
        font-family:clock;
        src : url(digital-7.ttf);
    }

.center p {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
    width:100%;
    font-family: clock;
    font-size:150px;

}
    #c{
        font-family: inherit;
        top:50%;
        color: white;
        font-size:50px;
        font-weight: bold;
       
    }
</style>
</head>
<body>

        
 


<div class="center">
    <p>
          <?php 
        
if(isset($_POST['show_time'])){
    date_default_timezone_set("Asia/Calcutta"); 
	$current_time = date('h : i : s a');
	echo'<strong></strong><span style="color:white;">'.$current_time.'</span>';
}
?>
        
  </p>
    <p id="c">
   <?php
        session_start();
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo  "<br>";
        //echo "Hello ";
        $name=$_SESSION['username']; //echo $name; 
        $d =date("H");
        if($d <12 ){
            echo "Good morning,  ";
            echo $name;
        }
        else if($d >= 12 and $d < 17 )
        {
            echo "Good afternoon,  ";
            echo $name;
        }
        else if( $d >= 17)
        {
            echo "Good evening,  ";
            echo $name;
        }
        echo".";
     ?>
    </p>
</div>



</body>
</html>


