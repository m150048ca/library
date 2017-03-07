<html>
<head>
<head>
<body bgcolor="blue">
<a href="index.php">home</a>
</body >
</html>
<?php
$conn=mysqli_connect("localhost","root","","library");

 
  
	  //$sql="insert into book(book_id,author_name,title,publication,edition,volume,price,coredor_no)value('$bid','$aname','$btitle','$pub','$edi','$val','$pri','$cro')";
	  $sql="select * from book";
	  $result=$conn->query($sql);
	  if($result->num_rows>0)
	  {  echo"<table border='20' align='center'><tr><th width='500' height='100' colspan='8'>Book</th></tr><tr><th>book_id</th><th>Author_name</th><th>title</th><th>publication</th><th>rdition</th><th>volume</th><th>price</th><th>coredor_no</th></tr>";
		  while($row=$result->fetch_assoc())
		  {
			  echo"<tr><td>".$row['book_id']."</td><td>".$row['author_name']."</td><td>".$row['title']."</td><td>".$row['publication']."</td><td>".$row['edition']."</td><td>".$row['volume'].
			  "</td><td>".$row['price']."</td><td>".$row['coredor_no']."</td></tr>";
		  }
		  echo"<table>";
	  }
	  
?>