<?php
include("include.php");
$id=$_GET['id'];
$qry="delete from students where id=$id";
if(mysqli_query($con,$qry))
{
	echo "record is deleted";
}
else
{
	echo "error in deleting";
}
?>