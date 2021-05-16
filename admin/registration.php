<?php

require_once('dbConnection.php')

?>



<!DOCTYPE html>
<html>
<head>
  <title>EduTech staff registration</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link  rel="stylesheet" type= "text/css" href="style.css">



<body background="images\bg.jpg">
  

  <div>
    <?php
     
     //inserting data to the database

     if(isset($_POST['signUp']))
     {
          



       
          $staffNo = $_POST['staffNo'] ;  
          $password = $_POST['password'] ;
	
		  $ret= mysqli_query($db,"SELECT * FROM employee_records WHERE staffNo ='$staffNo'"); 
		  $num=mysqli_fetch_array($ret);
		  
		  
		   
		 
		 if($num > 0)
		  {
		   $_name = $num['name']; 
		   $_surname = $num['surname'];
		   $_scode1 = $num['subjCode1'];
		   $_scode2 = $num['subjCode2'];
		   $_scode3 = $num['subjCode3'];
		      
            $sql=mysqli_query($db,"insert into staff(staffNo,password,name,surname,scode1,scode2,scode3)values('$staffNo','$password','$_name','$_surname','$_scode1','$_scode2','$_scode3')");
            
			
            echo "<script>alert('Registration successfully');</script>";
            
            
			
		  
			  
		  }	
          else
		  {
			 echo "<script>alert('please enter a valid employee number');</script>";
            
			 
			 
			 
		  }


         


			
          
     }
     
    ?>

  </div>


  
    <div>
     
	  <div class = "navbar">
	     <div class = "logo" >
				<img src = "images/logo1.png">
		  </div>
	     <ul>
	     <a href = "index.php"><li><button>Login</button></li></a>
		 </ul>
	  </div>
	 
	 
	
      <form action = "Registration.php" method = "post" >
        
          
		  
          <h1 style = "font-size:3vw; "> Employee Registration</h1>
		  <br>
          <p style = "font-size:2vw; " >Create an account.</p>
          <hr>
          
           
          <label for ="staffNo"><b>Employee Number </b></label>
		  
          <input  class= "form-control" type="number" name="staffNo" required>
          
          <label for ="password"><b>Password</b></label>
          <input class= "form-control" type="password" name="password" required>
           



           <hr>
           
          <div>
           
          <a href="index.php">
              
          <button type="submit" name="signUp" >Register</button>
           
            

          </a>
          </div>
            
    
        

       

      </form>

    </div>
    

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