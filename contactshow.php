<?php
$conn = mysqli_connect("localhost","root","","textme","3308");
if($conn)
{
	echo "connection ok";
}
else
{
	echo "connection failed";
}



?>
<html>
<head>
</head>
<body>
<table border>
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Message</th>
<th colspan="2">Operation</th>
</tr>
<?php
$sel = "SELECT * FROM contact";
$r = mysqli_query($conn,$sel);
while($k = mysqli_fetch_array($r,MYSQLI_BOTH))
{
?>
<tr>
<td><?php echo $k['id']; ?></td>
<td><?php echo $k['name']; ?></td>
<td><?php echo $k['phone']; ?></td>
<td><?php echo $k['email']; ?></td>
<td><?php echo $k['message']; ?></td>
<td><a href="contactedit.php?id=<?php echo $k['id']; ?>">Edit</a></td>
<td><a href="contactdelete.php?id=<?php echo $k['id']; ?>" onclick="confirmdelete()">Delete</a></td>
<tr>
<?php

}
?>
</table>
<script>
function confirmdelete()
{
	confirm("Are you sure want to delete?");
}

</script>
</body>

</html>