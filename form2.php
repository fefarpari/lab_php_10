<form action="" method="GET">
	Username : <input type="text" name="name">
	<br>
	Password : <input type="text" name="pwd">
	<br>
	<input type="submit" name="submit">
	
</form>

<?php 
	if(isset($_GET['submit']))
	{
		echo $_GET['name'];
		echo $_GET['pwd'];
	}
?>