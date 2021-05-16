<?php
session_start();
?>


<!DOCTYPE html>
<html lang = "en">

<head>
  <title>subjects</title>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale = 1.0 ">
   <link  rel="stylesheet" type= "text/css" href="style.css">
    

  
</head>

<body>
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
	   
	  <br><br><br> <br><br><br>
	      
			<?php 
              $i = 1;
				  $array[5] = "";
				  $href = "";
				  
				  echo "<div class = 'row'>";
				  for($i = 1; $i <= 3; $i++ ){
					 
					   $new = "scode". $i;
						
						if($_SESSION[$new] != ""){
							
							$array[$i] =$_SESSION[$new];
							$href = $array[$i].".php";
						    
							
							
							   echo " <div class= 'column'>";
							     echo "<a href = '$href'>";
								     echo "<img src= 'images/tut2.jpg'>" ;
									 echo"<div class = 'desc'><p style = 'color:white;'>".$array[$i] ."</p></div>" ;
								 echo "</a>";
							   echo "</div>";
							
						}
				
				  }  	 
				echo "</div>";
            ?>
			
		
         
	 
	 </div>
	  
    
	
	
	
	
	 <div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
	
	
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
	 <br> <a href = "images/Academic-Calendar.pdf">2020/2021 Academic Calendars</a>
	 </div>
	 
	 <div class = "column">
	 <p style = " color:white;">Follow us
	 <br> <a href = "https://twitter.com/tutby">@tutby | Twitter</a>
	 
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