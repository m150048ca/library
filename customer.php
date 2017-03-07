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
<form action="customer.php" method="POST">
<table align="center" >
<tr><th height="100" width="400" colspan="2" >BOOK</th></tr>
<tr><td>Book id</td><td><input type="text" name="bid" pattern="[0-9]+" placeholder="0123456789"></td></tr>
<tr><td>Author name</td><td><input type="text" name="aname" pattern="[a-zA-z]+" placeholder=""></td></tr>
<tr><td>Book title</td><td><input type="text" name="btitle" pattern="[a-zA-Z]+" placeholder=""></td></tr>
<tr><td>Publication</td><td><input type="text" name="pub" pattern="[a-zA-Z]+" placeholder=""></td></tr>
<tr><td>Edition</td><td><input type="text" name="edi"pattern="[1-9]+th" placeholder="2th"></td></tr>
<tr><td>Volume</td><td><input type="text" name="vol" pattern="[I|V|X]+" placeholder="IX"></td></tr>
<tr><td>Price</td><td><input type="text" name="pri" pattern="[0-9]+"></td></tr>
<tr><td>Coridore no</td><td><input type="text" name="cro" pattern="[0-9]+" placeholder="integer"></td></tr>

<tr><td><input type="submit" name="submit" value="insert"></td><td><input type="submit" name="submit1" value="update"></td></tr>
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
  $cro=$_POST['cro'];
  if(empty('$bid')||empty('$aname')||empty('$btitle')||empty('$pub')||empty('$edi')||empty($val)||empty('$pri')||empty('$cro'))
    echo" all field are requred";
  else
  {
	  $sql="insert into book(book_id,author_name,title,publication,edition,volume,price,coredor_no)value('$bid','$aname','$btitle','$pub','$edi','$val','$pri','$cro')";
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
  $cro=$_POST['cro'];
  if(empty('$bid')||$bid==0)
	  echo"book id con;t be empty";
  else
  {
	  $sql="update book set author_name='$aname',title='$btitle',publication='$pub',edition='$edi',volume='$val',price=$pri,coredor_no=$cro where book_id=$bid";
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
				<ul>  <li style="border-top: medium none;"><a href="#"></a></li>
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
