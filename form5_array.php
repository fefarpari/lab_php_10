<form action="" method="POST">
	city : <input type="text" name="name">
	<br>
	<input type="submit" name="submit">
	
</form>

<?php 
 	$arr=["rajkot","morbi","surat"];
	if(isset($_POST['submit']))
	{

		$arr= $_POST['name'];

	}
	if( $arr)
		 {

            echo  "city was found in our database.";
        } 
        else 
        {

            echo  "city was not found.";
        }
    
?>