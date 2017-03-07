<html>
<body>
<a href="index1.php">Home</a>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","library");
if(isset($_POST['submit']))
{ 
  $bid=$_POST['bid'];
  if(empty('$bid'))
    echo"  title is requred";
  else
  {   
	  $sql="select * from book where title='$bid'";
      $result=$conn->query($sql);
	  if($result->num_rows>0)
	  {  echo"<table border='20' align='center'><tr><th>book_id</th><th>Author_name</th><th>title</th><th>publication</th><th>rdition</th><th>volume</th><th>price</th><th>coredor_no</th></tr>";
		  while($row=$result->fetch_assoc())
		  {
			  echo"<tr><td>".$row['book_id']."</td><td>".$row['author_name']."</td><td>".$row['title']."</td><td>".$row['publication']."</td><td>".$row['edition']."</td><td>".$row['volume'].
			  "</td><td>".$row['price']."</td><td>".$row['coredor_no']."</td></tr>";
		  }
		  echo"<table>";
	  }
	   else
		   echo"their is no any book available in this record";
		  
  }
	
}

?>