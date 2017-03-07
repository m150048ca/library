<html>
<head>
<head>
<body bgcolor="pink">
<a href="index1.php">home</a>
</body >
</html>
<?php
$conn=mysqli_connect("localhost","root","","library");

 
	  $sql="select * from issubook";
	  $result=$conn->query($sql);
	  if($result->num_rows>0)
	  {  echo"<table border='20'><tr><th width='500' height='100' colspan='8'>Book issu by student</th></tr><tr><th>Roll_no</th><th>Book_id</th></tr>";
		  while($row=$result->fetch_assoc())
		  {
			  echo"<tr><td>".$row['roll']."</td><td>".$row['book_id']."</td></tr>";
		  }
		  echo"<table>";
	  }
	  else
		  echo"Theire is no any book available";
	  
?>