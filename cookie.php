<?php
setcookie("username","atmiya",time()+3600);
if(isset($_COOKIE['username']))
{
	echo "cookie is set for". $_COOKIE['username'];
}
else
{
	echo "cookie is not set";
}

?>
