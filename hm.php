<html>
<head>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#save').click(function(event){
      event.preventDefault();
    	$.ajax({
		url: "hmm.php",
		method: "POST",
		data: $('form').serialize(),
		dataType: "text",
		success:function(strMessage){
			$('#message').text(strMessage)
		}
	});
	});

});
</script>
</head>
<body>
<div>
<p id="massege"></p>
<form method="POST">
<table align="center">
<tr>
<td>studentname</td>
<td>:</td>
<td><input type="text" id="studentname" name="sname"></td>
</tr>
<tr>
<td>gender</td>
<td>:</td>
<td><input type="text" id="gen" name="gender"></td>
</tr>
<tr>
<td>phone</td>
<td>:</td>
<td><input type="text" id="mobile" name="mob"></td>
</tr>
<tr><td>
<input type="submit" value="save" name="save" id="save"></tr></td>
	</table>
</form>
</div>
</body>
</html>
