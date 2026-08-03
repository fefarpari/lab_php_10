<?php

session_start();
echo session_id();
echo "<br>";
if(isset($_POST['submit']))
{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['pwd']=$_POST['pwd'];
	echo "this are session variable";
	print_r($_SESSION);
	echo "<br>";
	echo "after unset the session value";
	unset($_SESSION['username']);
	print_r($_SESSION);
	session_unset();
}
?>