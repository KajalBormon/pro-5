<?php
$conn=mysqli_connect("localhost","root","","php");
if(isset ($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$language=$_POST['language'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
	$department=$_POST['department'];
	$sql="INSERT INTO pprofile(firstname,lastname,language,address,email,phone,department) VALUES('$firstname','$lastname','$language','$address','$email','$phone','$department')";
	if(mysqli_query($conn,$sql)){
	header("location:http://localhost/web/pro-5/show.php");	
	}
}
?>
<html>
<head>
<title>teacher profile</title>
</head>
<body>
<form action="" method="post">
<table>
<tr>
<td><input type="hidden" name="tid"></td>
</tr>
<tr>
<td>firstname</td>
<td><input type="text" name="firstname"></td>
</tr>
<tr>
<td>lastname</td>
<td><input type="text" name="lastname"></td>
</tr>
<tr>
<td>Expertise Language</td>
<td><input type="text" name="language"></td>
</tr>
<tr>
<td>address</td>
<td><input type="text" name="address"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>phone</td>
<td><input type="text" name="phone"></td>
</tr>
<tr>
<td>department</td>
<td><input type="text" name="department"></td>
</tr>
<tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="save" name="submit"></td>
</tr>
<tr>
<td></td>
<td>
<a href="show.php">
<input type="button" value="show profile">
</a>
</td>
</tr>
</table>
</form>
</body>
</html>







