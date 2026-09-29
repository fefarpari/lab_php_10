<form action="" method="post">
	name:<input type="text" name="name">
	<br>
	<br>
	dept:<input type="text" name="dept">
	<br>
	<br>
	mob:<input type="text" name="mob">
	<br>
	<br>
	dob:<input type="date" name="dob">
	<br>
	<br>
	<input type="submit" name="submit">
</form>
<?php
$con=mysqli_connect("localhost","root","","university");
if(!$con)
{
	exit();
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$dept=$_POST['dept'];
	$mob=$_POST['mob'];
	$dob=$_POST['dob'];

$qry="insert INTO students(name,dept,mob,dob)VALUES('$name','$dept',$mob,'$dob')";
if(mysqli_query($con,$qry))
{
	echo "insert succesfully";
}
}
?>
