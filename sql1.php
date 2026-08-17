<?php
$con=mysqli_connect("localhost","root","","compu");
if(!$con)
{
	echo "connection is not done";
	echo "<br>";
	//echo mysqli_error();
	echo "<br>";
	//echo mysqli_connect_error();
	echo "<br>";
	echo mysqli_connect_errorno();


	
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


 $conn=mysqli_connect("localhost","root","");
if(!$conn)
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
}
 mysqli_select_db($conn,"computer");
?>