<?php 
$con=mysqli_connect("localhost","root","","university");
if(!$con)
{
	exit();
}
$id=$_GET['id'];
$qry="select * from students where id=$id";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);
?>

<form method="post">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	Name:
		<input type="text" name="name" value="<?php echo $row['name']; ?>">
		<br> <br>
	dept:
		<input type="text" name="dept" value="<?php echo $row['dept']; ?>">
		<br> <br>
	mob:
		<input type="text" name="mob" value="<?php echo $row['mob']; ?>">
		<br> <br>
	dob:
		<input type="date" name="dob" value="<?php echo $row['dob']; ?>">
		<br> <br>
	<input type="Submit" name="update" value="Update Record">
</form>

<?php 
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$dept=$_POST['dept'];
	$mob=$_POST['mob'];
	$dob=$_POST['dob'];

$qry="UPDATE students set name='$name', dept='$dept', mob='$mob', dob='$dob' where id=$id" ;
if(mysqli_query($con,$qry))
{
	echo "record updated successfully";
	header("Location: display.php");
}
}
?>