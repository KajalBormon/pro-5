<?php
	$conn = mysqli_connect("localhost","root","","php");
	$pid = $_GET['pid'];
	$sql = "DELETE FROM pprofile WHERE pid = {$pid}";
	if( mysqli_query($conn, $sql)){
		header("location:http://localhost/web/pro-5/show.php");
	}
	mysqli_close($conn);
	

?>