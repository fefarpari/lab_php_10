<form action="" method="POST" enctype="multipart/form-data"><br>
	upload file<input type="file" name="uploadfile"><br><br>
	<input type="submit" name="upload" value="upload">
</form>

<?php
$target_path="E2_bscit_14/";
$target_path=$target_path.basename($_FILES['uploadfile']['name']);


if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target_path))
{
	echo "File is uploaded";
	echo "<br>";
	echo $_FILES['uploadfile']['name'];
	echo "<br>";
	echo $_FILES['uploadfile']['tmp_name'];
	echo "<br>";
	echo $_FILES['uploadfile']['type'];
	echo "<br>";
	echo $_FILES['uploadfile']['size'];

}
?>
