<form action="" method="POST">
	Username : <input type="text" name="name">
	<br>
	<input type="submit" name="search" value="search">
	
</form>

<?php 
	if(isset($_POST['search']))
	{
		$name= $_POST['name'];

		echo $name;
	
	}
?>