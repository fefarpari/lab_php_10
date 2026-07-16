<form action="" method="POST">
	Username : <input type="text" name="name">
	<br>
	Password : <input type="text" name="pwd">
	<br>
	<input type="submit" name="submit">
	
</form>

<?php 
	if(isset($_POST['submit']))
	{
		echo $_POST['name'];
		echo $_POST['pwd'];
	}
?>