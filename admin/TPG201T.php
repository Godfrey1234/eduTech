<?php
  
	
  require_once('dbConnection.php')

?>


<!DOCTYPE html>
<html lang = "en">

<head>
  <title>TPG201T</title>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale = 1.0 ">
   <link  rel="stylesheet" type= "text/css" href="style.css">
    

  
</head>

<body style="background-color: grey">

	<?php
			
			     if(isset($_POST['noticebtn']))
				{
					
					 
					
					$notice = $_POST['notice'] ;    
					$sub = 'TPG201T';
	
					$sql=mysqli_query($db,"insert into notice(subjCode,text)values('$sub','$notice')");
					
					echo "<script>alert(' successfully sent notice to all TPG201T students');</script>";
				}
			
			    if(isset($_POST['save']))
				{
					$sub = 'TPG201T';
					$filename = $_FILES['myfile']['name'];
					$destination = 'upload/'.$filename;
					$extension = pathinfo($filename,PATHINFO_EXTENSION);
					
					$file = $_FILES['myfile']['tmp_name'];
					$size = $_FILES['myfile']['size'];
					
					if(!in_array($extension,['zip','pdf','docx','mp4']))
					{
						echo "<script>alert('your file extension must be .zip, .pdf or .docx');</script> ";
					}
					elseif($_FILES['myfile']['size'] > 1000000)
					{
						
						echo "<script>alert('file too large');</script>";
						
					}
					else
					{
						if(move_uploaded_file($file,$destination))
						{
							$sql = "insert into document(subjCode,doc)values('$sub','$filename')";
							
							if(mysqli_query($db,$sql))
							{
								echo "<script>alert('file uploaded successfully');</script>";
							}
							else{
								echo "<script>alert('failed to uploaded file');</script>";
							}
						}
					}
					    
					
					
					
					
				}
			
			
			
	?>

   
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
	       <br><br><br>
	       <form action = "TPG201T.php" method = "post" enctype = "multipart/form-data" >
		      
			 <label for ="studNo"><b><p style = "font-size:2rem;" >NOTICE</p> </b></label>
             <input  class= "form-control" type="text" name="notice">		
			 <button type="submit" name="noticebtn">send notice</button>
			 
			 <br><br><br>
			 <label for ="upload"><b><p style = "font-size:2rem;" >Upload Documents</p> </b></label>
             <input  class= "form-control" type="file" name="myfile">		
			 <button type="submit" name="save">upload</button> 
			 <br><br><br>
			
           <?php
	         
			  
			   echo "<br>";
			   echo "<h1> Notice Sent </h1>";
			   
			   $ret= mysqli_query($db,"SELECT * FROM notice WHERE subjCode ='TPG201T'"); 
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
			
			 
		   
		   
		   
		   
		    ?>
		   
		   <input  class= "form-control" type="text" placeholder = "copy and paste not text you want to delete" name="notText">		
		   <button type="submit" name="del">Delete Notice</button> 
		   
		   
		   <?php
		   
		    //deleting notice at index
		     if(isset($_POST['del']))
				{
				   $index = $_POST['notText'];
				
				   $ret= mysqli_query($db,"DELETE FROM notice WHERE text = '$index'"); 
		           
				   if($ret > 0){
						
						echo "<script>alert('Notice deleted successfully');</script>";
						header('Refresh:0');
				    
					}  
		   
		        }
		   ?>
		   
		   <?php
		   
		   echo "<br><br><br>";
		   echo "<hr>";	 
		   echo "<br><br><br>";
		   echo "<h1>Study Material Sent</h1>";
		   echo "<hr>";
		   echo "<br>";
		   
		   $ret1= mysqli_query($db,"SELECT * FROM document WHERE subjCode ='TPG201T'"); 
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

			<style>
			   input{
				   
				   width:80%;
				   padding:15px;
				   border:1px solid #555;
				   background-color:white
				   
			   }
			</style>
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