<?php

require_once('dbConnection.php')

?>



<!DOCTYPE html>
<html>
<head>
  <title>EduTech Student registration</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link  rel="stylesheet" type= "text/css" href="style.css">



<body background="images\bg.jpg">
  

  <div>
    <?php
     
     //inserting data to the database

     if(isset($_POST['signUp']))
     {
       
          $studNo = $_POST['studNo'] ;  
          $password = $_POST['password'] ;
		  $email	= $_POST['email'] ;
	      $contact = $_POST['contact'] ;
		  
		  
		  $ret= mysqli_query($db,"SELECT * FROM student_records WHERE studNo ='$studNo'"); 
		  $num=mysqli_fetch_array($ret);
		
		
		  if($num > 0){
		  $_name = $num['name']; 
		  $_surname = $num['lastName'];
		  $_code1 = $num['subCode1'];
		  $_code2 = $num['subjCode2'];
		  $_code3 = $num['subjCode3'];
		  $_code4 = $num['subjCode4'];
		  $_code5 = $num['subjCode5'];
		  $studNo = $num['studNo']; 
		  $_id	=$num['id'];  
		   
          $sql=mysqli_query($db,"insert into user(studNo,password,name,lastName,code1,code2,code3,code4,code5,email,contact,id)values('$studNo','$password','$_name','$_surname','$_code1','$_code2','$_code3','$_code4','$_code5','$email','$contact','$_id')");
          
            echo "<script>alert('Registration successfully');</script>";
            
            
			
		  
			  
		  }	
          else
		  {
			 echo "<script>alert('Not a registered tut student enter valid student number');</script>";
             
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
	     <a href = "login.php"><li><button>Login</button></li></a>
		 </ul>
	  </div>
	 
	 
	
      <form action = "Registration.php" method = "post" >
        
          
		  
          <h1 style = "font-size:3vw; ">Student Registration</h1>
		  <br>
          <p style = "font-size:2vw; " >Create an account.</p>
          <hr>
          
           
          <label for ="studNo"><b>Student Number </b></label>
		  
          <input  class= "form-control" type="number" name="studNo" required>
          
          <label for ="password"><b>Password</b></label>
          <input class= "form-control" type="password" name="password" required>
           
		  <label for ="password"><b>Email</b></label>
          <input class= "form-control" placeholder="email"type="email" name="email" required>
           
		 <label for ="Contact"><b>Contact Number</b></label>
          <input class= "form-control" placeholder="Contact number" type="tel" name="contact" title="number must be in this format 078 589 8585" pattern = "(\+27|0)[6-8][0-9]{8}" minlength="10" maxlength="10" required value="<?php if(isset($_POST['submit']))
         { echo htmlentities(($_POST['contact']));   } ?>">

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