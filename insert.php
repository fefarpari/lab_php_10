<form action="" method="post">
	name:<input type="text" name="name">
	<br>
	<br>
	dept:<input type="text" name="dept">
	<br>
	<br>
	<input type="submit" name="submit">
</form>

<?php 
$con=mysqli_connect("localhost","root","","computer");
if(!$con)
{
	echo "connection is not done";
}
if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$dept= $_POST['dept'];
}
$qry="INSERT INTO students (name,dept) Values ('$name','$dept')";
if(mysqli_query($con,$qry))
{
	echo "inserted sucesfully";
}
?>