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
<form action="student.php" method="POST">
<table align="center" >
<tr><th height="100" width="400" colspan="2"><h1>Student</h1></th></tr>
<tr><td>Roll no</td><td><input type="text" name="bid" pattern="m[0-9]+ca|M[0-9]+CA" placeholder="roll number"></td></tr>
<tr><td>Name</td><td><input type="text" name="aname" pattern="[a-zA-Z ]+" placeholder="name"></td></tr>
<tr><td>date of issu</td><td><input type="text" name="btitle" pattern="[0-9-0-9-0-9]+"placeholder="Date of issu"></td></tr>
<tr><td>Address</td><td><input type="text" name="pub" pattern="[a-zA-Z ]+" placeholder="Address"></td></tr>
<tr><td>Date of return</td><td><input type="text" name="edi" pattern="[0-9-0-9-0-9]+" placeholder="Date of return"></td></tr>
<tr><td>Course</td><td><input type="text" name="vol" pattern="[a-zA-Z ]+" placeholder="Course"></td></tr>
<tr><td>gender</td><td><input type="text" name="pri" pattern="m|f|M|F" placeholder="gender"></td></tr>


<tr><td></td><td><input type="submit" name="submit" value="insert"></td><td><input type="submit" name="submit1" value="update"></td></tr>
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
  $edi=$_POST['edi'];
  $val=$_POST['vol'];
  $pri=$_POST['pri'];
 
  if(empty('$bid')||empty('$aname')||empty('$btitle')||empty('$pub')||empty('$edi')||empty($val)||empty('$pri'))
    echo" all field are requred";
  else
  {
	  $sql="insert into student(roll,name,doe,address,dor,course,gender)value('$bid','$aname','$btitle','$pub','$edi','$val','$pri')";
	  if($conn->query($sql))
		  echo" insert successfully";
	  else
		  echo" not be insert something is wrong";
		  
  }
	
}
if(isset($_POST['submit1']))
{ $bid=$_POST['bid'];
  $aname=$_POST['aname'];
  $btitle=$_POST['btitle'];
  $pub=$_POST['pub'];
  $edi=$_POST['edi'];
  $val=$_POST['vol'];
  $pri=$_POST['pri'];
 
  if(empty($bid))
	  echo"Roll no con;t be empty";
  else
  {
	  $sql="update student set name='$aname',doe='$btitle',address='$pub',dor='$edi',course='$val',gender='$pri' where roll='$bid'";
	  if($conn->query($sql))
	  {
		  echo"updated successfully";
	  }
	  else
		  echo"not be updated";
  }  
  
	
}
?>		


		</div>	
		    
			<div class="content-right">
				<h2>Main Menu</h2>
				<ul>
				     <li style="border-top: medium none;"><a href="#"></a></li>
 				  <li><a href="student.php">student</a></li>
  				  <li><a href="customer.php">Book</a></li>
  				  <li><a href="bookdetail.php">Book details</a></li>
  				  <li><a href="studentdetail.php">Student details</a></li>
 				  <li><a href="issu.php">Book issu</a></li>
				  <li><a href="return.php">Return book</a></li>
				  <li><a href="issudetail.php">detail issubook</a></li>
 				  <li><a href="deletebook.php">delete book</a></li>
 				  <li><a href="searchbook.php">search book</a></li>
				  <li><a href="searchstudent.php">search student</a></li>
				  <li><a href="cs/project.html"><span>Computer <b>science</b> engineering</span></a></li>
				  <li><a href="admin.php"?action="logout">logut</a></li>
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
