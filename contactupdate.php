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


$up = "UPDATE contact SET name= '$name',phone= '$phone',email= '$email', message ='$message'";
if(mysqli_query($conn,$up))
{
	echo "Data updated successfullt";
}
else
{
	echo "Data not updated";
}






?>