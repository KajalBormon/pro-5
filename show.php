<html>
<head>
<title> Programmer's  profile</title>
</head>
<h1>Programmer's  Profile</h1>
<a href="insert.php">
<input type="button" value="add profile">
</a>
<?php
$conn=mysqli_connect("localhost","root","","php");
$sql="SELECT * FROM pprofile";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	?>
	<table>
	<thead>
	<th>firstname</th>
	<th>lastname</th>
	<th>Experties Language</th>
	<th>address</th>
	<th>email</th>
	<th>phone</th>
	<th>department</th>
	<th>Action</th>
	</thead>
	<tbody>
	<?php
	while ($row=mysqli_fetch_assoc($result)){
		?>
		<tr>
		<td><?php echo $row['firstname'];?></td>
		<td><?php echo $row['lastname'];?></td>
		<td><?php echo $row['language'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['phone'];?></td>
		<td><?php echo $row['department'];?></td>
		<td><a href="delete.php?pid=<?php echo $row['pid'];?>">Delete</a></td>
		</tr>
	<?php
	}
	?>
	</tbody>
	</table>
	<?php
}
?>
</body>
</html>
		