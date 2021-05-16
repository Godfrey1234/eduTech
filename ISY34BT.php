<?php
require_once('dbConnection.php')
?>


<!DOCTYPE html>
<html lang = "en">

<head>
  <title>ISY34BT</title>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale = 1.0 ">
   <link  rel="stylesheet" type= "text/css" href="style.css">
    

  
</head>

<body style="background-color: grey">


    <div class = "navbar">
	     <div class = "logo" >
				<img src = "images/logo1.png">
		  </div>
	     <ul>
	        <li><a href = "home.php">Home</a><li>
            <a href = "index.php"><li><button>LogOut</button></li></a>
			
		 </ul>
	  </div>  
      
	  
	 <div>
	   
	  <form action = "ISY34BT.php" method = "post" enctype = "multipart/form-data" >
	      
			
		
         
	 
	 </div>
	 
	 
	 <div>
	       <?php
	         
			  
			   echo "<br>";
			   echo "<h1>Notice Board</h1>";
			   
			   $ret= mysqli_query($db,"SELECT * FROM notice WHERE subjCode ='ISY34BT'"); 
		       $num=mysqli_fetch_array($ret);
			  
			   if($num > 0){
			   $i = 1;	  
			   $notice =  $num['text'];
			   echo "<hr>";
			   echo "<br>";
			   echo $i. ". ".$notice;
			   echo "<br>";
			   $notice = "";
			  while($num = mysqli_fetch_array($ret))
			  {
				  $i++;
				  $notice =  $num['text'];
				  echo $i. ". ".$notice;
				  echo "<br>";
			  }
			  
			  }
			
			 
		   echo "<br><br><br>";
		   echo "<hr>";	 
		   echo "<br><br><br>";
		   echo "<h1>Study Material</h1>";
		   echo "<hr>";
		   echo "<br>";
		   
		   
		   
		    ?>
		   
		   
		   
		   
		   
		   
		   <?php
		   
		   $ret1= mysqli_query($db,"SELECT * FROM document WHERE subjCode ='ISY34BT'"); 
		   $num1 =mysqli_fetch_array($ret1);
	        
		   if($num1 > 0){
	        $doc =  $num1['doc'];
			$j = 1;
			echo "<a download = '".$doc."' href = 'admin/upload/".$doc. "'>".$j." ".$doc."</a>";
			echo "<br>";
			$doc = "";  
		    while($num1 = mysqli_fetch_array($ret1))
			  {
				  $j++;
				  $doc =  $num1['doc'];
				  echo "<a download = '".$doc."' href = 'admin/upload/".$doc. "'>".$j." ".$doc."</a>";
				  echo "<br>";
			  
			  }
			 
		   }
			 
		   echo "<br><br><br>";
		   echo "<hr>";	 
		   echo "<br><br><br>";
			 
			 
			 
		
		   ?>
	      
	 </form>
	 </div>
    
	
	
	
	
	 <div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
	
	
    <footer>
	
	<br><br>
	<a href= "https://sacoronavirus.co.za/"><img style = "width:30; height:25vh;"  src = "images/covid-f.png"></a>
	<br><br> 
	 <div class = "row">
	 <div class = "column">
	 <p style = "  color:white;">General Enquiries
	 
	 <br> Email: general@tut.ac.za
     </p>
	 </div>
	 
	 <div class = "column">
	 <p style = "  color:white;">TUT Contact center
	 <br> TEL	: 086 110 2421
	 <br> Email: general@tut.ac.za
     </p>
	 </div>
	 
	 <div class = "column">
	 <p style = " color:white;">Calender
	 <br> 2020/2021 Academic Calendars
	 </div>
	 
	 <div class = "column">
	 <p style = " color:white;">Follow us
	 <br> 2020/2021 Academic Calendars
	 
     </p>
	 </div>
	 
	 
	 
	 </div>
	 
	 
	 
	  <div><br><br><br></div>
	  <ul>
	  <p style = " text-align:left; color:white;">© Copyright 2021 - All Rights Reserved  </p>
	  
	  </ul>
	</footer>

</body>
</html>