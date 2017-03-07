<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Title goes here</title>
  <script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
		
    });
});

  </script>
    <script type="text/javascript">
  
   var image1 = document.createElement("IMG");
    image1.setAttribute("src", "images/header.jpg");
	
	var image2 = document.createElement("IMG");
    image2.setAttribute("src", "images/header1.jpg");
   
   var image3 = document.createElement("IMG");
    image3.setAttribute("src", "images/header2.jpg");
   
   var image4 = document.createElement("IMG");
    image4.setAttribute("src", "images/header3.jpg");
   
   var image5 = document.createElement("IMG");
    image5.setAttribute("src", "images/header4.jpg");
   
   var image6 = document.createElement("IMG");
    image6.setAttribute("src", "images/header5.jpg");
   </script>
  
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="main">
	
		<div class="page">
			<div class="top">			
				<div class="header">
					<div class="header-top">
						<h1>library </span>management</span> system</h1>
						<p><span style="color:#1da5ea;">Call Us:9061543946</span></p>
					</div>
				<div class="topmenu">
				<ul>
  					<li><a href="index.php">Home</a></li>
  					<li><a href="#">About&nbsp;Us</a></li>
  					<li><a href="#">Library Advisory Bord</a></li>
  					<li><a href="#">Book&Journals</a></li>
  					
					<li><a href="#">Search</a></li>
  					<li><a href="#">Contact</a></li>
  					
				</ul>
				</div>
			<div class="header-img">
			 <img src="images/header.jpg" name="slide">
			 <script type="text/javascript">
			 var step=1;
			 function slideit(){
			  document.images.slide.src=eval("image"+step+".src");
			   if(step<6)
			    step++;
				else
				step=1;
				setTimeout("slideit()",2500);
			  }
			  slideit()
			 </script>
			</div>
			</div>
		<div class="content">
		   <div class="content-left">
						
			<html>
<head>
<style>

</style>
</head>

<body>
<form action="signup.php" method="POST">
<table align="center" >
<tr><th height="100" width="400" colspan="2"><h1>Signup</h1></th></tr>
<tr><td>Fristnme</td><td><input type="text" name="bid" pattern="[a-zA-Z]+" placeholder="frist name"></td></tr>
<tr><td>Lastname</td><td><input type="text" name="aname" pattern="[a-zA-Z ]+" placeholder="last name"></td></tr>
<tr><td>username</td><td><input type="text" name="btitle"  pattern="^[A-Za-z0-9_]{1,15}$"></td></tr>
<tr><td>password</td><td><input type="password" name="pub" ></td></tr>
<tr><td>Gender</td><td><input type="text" name="edi" placeholder="m/f" pattern="[m|f|M|F]"></td></tr>
<tr><td>Email</td><td><input type="email" name="vol" ></td></tr>
<tr><td>Mobile no</td><td><input type="text" name="pri" pattern="[0-9]+" placeholder="phone no"></td></tr>

<tr><td>&nbsp </td></tr>
<tr><td></td><td><input type="submit" name="submit" value="New account"></td></tr>
</table>
</form>
</body>
</html>
	<?php
$conn=mysqli_connect("localhost","root","","library");
if(isset($_POST['submit']))
{ $bid=$_POST['bid'];
  $aname=$_POST['aname'];
  $btitle=$_POST['btitle'];
  $pub=$_POST['pub'];
  
  $val=$_POST['vol'];
  $pri=$_POST['pri'];
  $edi=$_POST['edi'];
  $l=strlen($pri);
  $le=strlen($pub);
  if(empty('$bid')||empty('$aname')||empty('$btitle')||empty('$pub')||empty('$edi')||empty($val)||empty('$pri'))
    echo" all field are requred";
	 elseif($l!=10)
	 echo"mob no should be 10 digit";
	 elseif($le<8)
	  echo"password at least 8 chrecter";
  else
  {
	  $sql="insert into student_name(fristname,lastname,username,password,email,mob,gender)value('$bid','$aname','$btitle','$pub','$val','$pri','$edi')";
	  if($conn->query($sql))
	  { header('location:admin.php');
		  //echo" insert successfully";
           echo"alert('success')";
		 }
	  else
		  echo" not be insert something is wrong";
		  
  }
	
}

	

?>		


		</div>	
		    
			<div class="content-right">
				<h2>Main Menu</h2>
				<ul>
				     <li style="border-top: medium none;"><a href="#"></a></li>
 				  <li><a href="admin.php">Admin</a></li>
  				  <li><a href="signup.php">signup</a></li>
  				
				  
				</ul>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>
		
<div class="bottom">
	<ul>
 		 <li style="border-left: medium none;"><a href="index.html">Home</a></li>
  		<li><a href="#">About&nbsp;Us</a></li>
  		<li><a href="#">What's&nbsp;New</a></li>
  		<li><a href="#">Services</a></li>
  		<li><a href="#">Contact</a></li>
  		<li><a href="#">Resources</a></li>
  		<li><a href="#">Links</a></li>
	</ul>

<!--DO NOT Remove The Footer Links-->
	<p>&copy; Copyright 2014. Designed by <a target="_blank" href="http://www.htmltemplates.net">pankaj</a></p>
<!--Designed by--><a target="_blank" href="http://www.htmltemplates.net">
	<img src="images/footnote.gif" class="copyright" alt="HTML Templates"></a></div>
<!--DO NOT Remove The Footer Links-->
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</div>
</body>
</html>
