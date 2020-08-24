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

$delid = $_REQUEST['id'];
$del = "DELETE FROM contact where id='$delid'";
if(mysqli_query($conn,$del))
{
	echo "Data deleted";
	header("location:contactshow.php");
}
else
{
echo "Data not deleted successfullt";
}	





?>