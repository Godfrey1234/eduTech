<?php
session_start();
require_once('dbConnection.php');
?>
<!DOCTYPE html>
<html lang = "en">

<head>
  <title>profile</title>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale = 1.0 ">
   <link  rel="stylesheet" type= "text/css" href="style.css">
    
	<?php
	
	
	   if(isset($_POST['updConatact']))
       {
		  $con = $_POST['contact']; 
		  $studNo = $_SESSION['studNo'];
		  $ret= mysqli_query($db,"UPDATE user SET contact = '$con' WHERE studNo ='$studNo'"); 
		  
		  
		  if($ret > 0){
			  
			echo "<script>alert(' Your contacts has successfully updated');</script>";
            $ret= mysqli_query($db,"select * from user WHERE studNo ='$studNo'");
			$num=mysqli_fetch_array($ret);
			$_SESSION['contact'] = $num['contact']; 
		  
		  }
		   
	   }
	
	   
	   if(isset($_POST['updEmail']))
       {
		  $email = $_POST['email']; 
		  $studNo = $_SESSION['studNo'];
		  $ret= mysqli_query($db,"UPDATE user SET email = '$email' WHERE studNo ='$studNo'"); 
		  
		  
		  if($ret > 0){
			  
			echo "<script>alert('Your email has successfully been updated');</script>";
            $ret= mysqli_query($db,"select * from user WHERE studNo ='$studNo'");
			$num=mysqli_fetch_array($ret);
			$_SESSION['email'] = $num['email']; 
		  
		  }
		   
	   }
	
	
	
	
	
	?>
  
</head>

<body>
    <div class = "navbar">
	     <div class = "logo" >
				<img src = "images/logo1.png">
		  </div>
	     <ul>
	        <li><a href = "home.php">Home</a><li>
			<li><a href = "subject.php">Subjects</a><li>
            <a href = "index.php"><li><button>LogOut</button></li></a>
			
		 </ul>
	  </div>  
	 <br><br><br>
	 
	 <div class = "profile">
     <p>Name : <?php echo $_SESSION['name'];?></p>
	 <p>Surname : <?php echo $_SESSION['surname'];?></p>
	 <p>ID Number : <?php echo $_SESSION['id'];?> </p>
	 <p>Contact : <?php echo "0". $_SESSION['contact'];?> <?php 
	 ?></p>
	 <p>Email :<?php echo $_SESSION['email']; ?> </p>
	 <br>
	 <section class = "sec1">
	 
	 <form action = "profile.php" method = "post" >
	   <label for ="upload"><b><p style = "font-size:2rem;" >Update Contacts</p> </b></label>
	   <input class= "form-control" placeholder="Contact number" type="tel" name="contact" title="number must be in this format 078 589 8585" pattern = "(\+27|0)[6-8][0-9]{8}" minlength="10" maxlength="10"  value="<?php if(isset($_POST['submit']))
         { echo htmlentities(($_POST['contact']));   } ?>">
	   <button type="submit" name="updConatact">Update Contact</button>
       <label for ="upload"><b><p style = "font-size:2rem;" >Update email</p> </b></label>
	   <input  class= "form-control" placeholder="email" type="email" name="email">		
	   <button type="submit" name="updEmail">Update Email</button>		
     </form>
	
	
	 
	
	 </section>
	 
	
	</div>
	
	<style>
	
      .profile{
	     font-size:3rem;
	  }
		.sec1{
			height:35vh;
			background:grey;
		}
	  	
	     input{
				   
				   width:50%;
				   padding:15px;
				   border:1px solid #555;
				   background-color:white
				   
			   }
	</style>
	
	 
	
	
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