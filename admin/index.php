<?php

require_once('dbConnection.php');

?>



<!DOCTYPE html>
<html>
<head>
  <title>staff</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link  rel="stylesheet" type= "text/css" href="style.css">
</head>


<body background="images\bg.jpg"  >

<div>
  
<?php
     
  //log in code

       if(isset($_POST['login']))
        {
            $password=$_POST['password'];
            $username=$_POST['username'];
            $ret= mysqli_query($db,"SELECT * FROM staff WHERE staffNo ='$username' and password='$password'");
            $num=mysqli_fetch_array($ret);

           if($num>0)
             {
               //header is a command used for redirecting to another page
        
              $extra="home.php";
              header("location:$extra");

              
              //session is used to store value from the database
                $_SESSION['name'] = $num['name'];
                $_SESSION['surname'] = $num['surname'];
				$_SESSION['scode1'] = $num['scode1'];
                $_SESSION['scode2'] = $num['scode2'];
				$_SESSION['scode3'] = $num['scode3'];
		      
                
            
              
             }
           else
             {
                echo "<script>alert('invalid username or Password');</script>";
             }
        }
     
    
	//forgot password 
	 if(isset($_POST['forgot_password']))
    {
	$row1=mysqli_query($db,"select * from staff where staffNo='".$_POST['staffNumber']."'");
	$row2=mysqli_fetch_array($row1);
	if($row2>0)
	{
	//$email = $row2['email'];
	$subject = "Information about your password";
	$password=$row2['password'];
	$message = "Your password is ".$password;
	//mail($email, $subject, $message, "From: $email");
	echo  "<script>alert('Your Password has been sent Successfully  and your password is : ".$password."');</script>";
}
else
{
echo "<script>alert('staff number is not registered with us');</script>";	
}
}
	 
	
	
 ?>

</div>



<div >

  <div class = "navbar">
	     <div class = "logo" >
				<img src = "images/logo1.png">
		  </div>
	     <ul>
	     <a href = "registration.php"><li><button>Create Account</button></li></a>
		 </ul>
  </div>

		 
		  <h1 style = "font-size:3vw; text-align:center;" > edu<span style = "color:grey;">Tech</span></h1>
		 
		  
          <h1 style = "font-size:2vw;" > Login here or create an account.</h1>
         
		  
		  <hr>
		 
          <form  method="post">
		  
          <label for ="username"><b>Employee Number</b></label>
          <input class= "form-control" placeholder="Employee Number" type="text" name="username" required>
		   
		   
          <label for ="password"><b>Password</b></label>
          <input class= "form-control" placeholder="Password" type="password" name="password" required>
		  
        
          <hr>
		  <div><br></div>
          <div>
          
   
          &nbsp;<button type="submit" name="login" >Login</button>      
		  
          
         </div>
          
        

         </form>
		 
		  <form method="post">
		  <br>
		  <input type="text" class="number" name="staffNumber" value="" placeholder="Enter your registered staff Number" required  >
		  <button type="submit" name="forgot_password" >Forgot password</button> 
		  </form>
		 <style>
			   input{
				   
				   width:80%;
				   padding:15px;
				   border:1px solid #555;
				   background-color:white
				   
			   }
			</style>
		 
		 
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

</div>


    

</body>
</html>