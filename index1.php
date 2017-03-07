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
						<p><span style="color:#1da5ea;"></span></p>
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
				<div class="row1">
					<div class="img"><img src="images/man.jpg" alt="" height="175"	width="175"></div>
						<div class="welcome">
							<h1 class="title">Welcome to <span>library</span></h1>
							<p><strong>Lorem Ipsum is simply dummy text of the printing and
							typesetting Library.</strong><br>
							in science and religion. Achieving this goal has been a labor of many years that began with a compilation of thousands of texts 
							ranging across a myriad of disciplines, faiths, philosophies, and perspectives. The ISSR membership and outside experts winnowed 
							the expanse of scholarly works down to a few hundred nominees for a foundational library – books that seemed most central,
							informative, accessible, and/or useful. A dedicated editorial team then reviewed each volume to settle on final selections. 
							This was a Herculean, sometimes seemingly Sisyphean, undertaking; one which would rightly prompt those who read this volume 
							and consult this Library to reflect with gratitude on the commitment and service of senior colleagues who served on this board.</p>
						</div>
					</div>
				<div class="row2">
					<div class="section1">
						<h2 class="subtitle">What&#8217;s New</h2>
						<p><strong>Lorem Ipsum is simply dummy text of the<br>
						printing and typesetting library.</strong><br>
						Lorem Ipsum has been the industry's standard<br>
						dummy text ever since the 1500s, when an<br>
						unknown printer took a galley of type and</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p><a href="#" class="more">read more</a></p>
					</div>
				<div class="section2">
					<h2 class="subtitle">Resources</h2>
					<p><strong>Lorem Ipsum is simply dummy text of the printing and
					typesetting Library.</strong><br>
					Lorem Ipsum has been the industry's standard dummy text ever since the
					1500s, when an unknown printer took a galley of type and scrambled it
					to make a type specimen book. It has survived not only five centuries,
					but</p>
				<p>&nbsp;</p>
				<p><a href="#" class="more">read more</a></p>
				</div>
				</div>
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
				  <li><a href="index.php"?action="logout">logut</a></li>
				  
				</ul>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>
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
</body>
</html>
