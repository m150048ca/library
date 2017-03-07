<html>
<head>
<head>
<body bgcolor="green">
<a href="index1.php">home</a>
</body >
</html>
<?php
$conn=mysqli_connect("localhost","root","","library");
 if(isset($_POST['submit']))
 {$bid=$_POST['bid'];
  if(empty('$bid'))
    echo"  roll no is requred";
  else
  {
  
	  //$sql="insert into book(book_id,author_name,title,publication,edition,volume,price,coredor_no)value('$bid','$aname','$btitle','$pub','$edi','$val','$pri','$cro')";
	  $sql="select * from student where roll='$bid'";
	  $result=$conn->query($sql);
	  if($result->num_rows>0)
	  {  echo"<table border='20'  align='center'><tr><th width='500' height='100' colspan='8'>Student</th><tr><th>Roll</th><th>Name</th><th>Date of issu</th><th>address</th><th>Date of return</th><th>Course</th><th>Gender</th></tr>";
		  while($row=$result->fetch_assoc())
		  {
			  echo"<tr><td>".$row['roll']."</td><td>".$row['name']."</td><td>".$row['doe']."</td><td>".$row['address']."</td><td>".$row['dor']."</td><td>".$row['course'].
			  "</td><td>".$row['gender']."</td></tr>";
		  }
		  echo"<table>";
	  }
	  else
		  echo"their is no any student of this Roll number";
  } 
 }  
?>