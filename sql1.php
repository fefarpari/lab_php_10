<?php
$con=mysqli_connect("localhost","root","","computer");
if(!$con)
{
	echo "connection is not done";
	echo "<br>";
	
}
else
{
	echo "connection is done";
	echo "<br>";
	var_dump($con);
}
 mysqli_close($con);
 echo "<br>";
 echo "<br>";


 $con=mysqli_connect("localhost","root","");
if(!$con)
{
	echo "connection is not done".mysqli_connect_errorno();
	echo "<br>";
	echo mysqli_error();
	echo "<br>";
	echo mysqli_connect_error();
	
}
else
{
	echo "connection is done";
	echo "<br>";
	var_dump($con);
}
 mysqli_select_db($con,"computer");
?>