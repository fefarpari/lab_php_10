<?php
$con=mysqli_connect("localhost","root","","university");
if(!$con)
{
	exit();
}
$id=$_GET['id'];
$qry="delete from students where id=$id";
if(mysqli_query($con,$qry))
{
	echo "record is deleted";
	header("refresh:1;url=display.php");
}
else
{
	echo "error in deleting";
}
?>