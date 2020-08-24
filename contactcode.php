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

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$ins = "INSERT INTO contact(name,phone,email,message) VALUES('$name','$phone','$email','$message')";
if(mysqli_query($conn,$ins))
{
	echo "data inserted";
}
else
{
	echo "data not inerted";
}
?>