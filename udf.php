<?php 

//simple function

function name()
{
	echo $x=10;
}
name();
echo "<br>";

//argument function
//call by value

function sum($num)
{
	echo $num=$num+50;
}
echo "<br>";
echo $y=10;
echo "<br>";
sum($y);
echo "<br>";

//call by reference
function add(&$num)
{
	echo $num=$num+10;
}
echo "<br>";
$x=5;
add($x);
echo "<br>";
echo $x;

//function with return value

function one($x,$y)
{
	$z=$x+$y;
	return $z;
}
echo "<br>";
echo "<br>";
echo one(10,20);

//default argument

function two($x,$y,$z=10)
{
	echo $x+$y+$z;
}
echo "<br>";
echo "<br>";
two(10,20,30);
echo "<br>";
two(10,20);


//nesting of function

echo "<br>";
function three($name)
{
   echo $name;
}
echo "<br>";
function four()
{
   echo "this is two";
   echo "<br>";
   three("this is one");
}
four();

//variable
function five($name)
{
	echo $name;
}
echo "<br>";
$p="five";
echo "<br>";
$p("shree");


?>