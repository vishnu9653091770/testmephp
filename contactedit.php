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
	<title></title>
</head>
<body align="center">
	<h1>Contact Form</h1>
<?php
$editid=$_REQUEST['id'];
$sel = "SELECT * FROM contact where id='$editid'";
$r = mysqli_query($conn,$sel);
$k = mysqli_fetch_array($r,MYSQLI_BOTH);


?>
<form action="contactupdate.php" method="post">
	<p>
		<input type="hidden" name="name" value="<?php echo $k['id']; ?>">
	</p>
	<p>
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $k['name']; ?>">
	</p>
	<p>
		<label>Phone</label>
		<input type="text" name="phone" value="<?php echo $k['phone']; ?>">
	</p>
	<p>
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $k['email']; ?>">
	</p>
	<p>
		<label>Message</label>
		<textarea name="message"><?php echo $k['message']; ?></textarea>
	</p>
	<input type="submit"  name="submit" value="Update">
</form>
</body>
</html>