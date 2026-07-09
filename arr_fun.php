<?php
$stud=[3,6,1,8,5,10,7];
print_r($stud);
echo "<br>";
echo "<br>";

/*sort($stud);
print_r($stud); */
echo "<br>";
echo "<br>";

asort($stud);
print_r($stud);
echo "<br>";
echo "<br>";

/*rsort($stud);
print_r($stud);*/
echo "<br>";
echo "<br>";

arsort($stud);
print_r($stud);
echo "<br>";
echo "<br>";
echo "<br>";

$uni=array("atmiya","rajkot","bscit");
print_r($uni);
echo "<br>";

echo current($uni);
echo "<br>";

echo next($uni);
echo "<br>";

echo prev($uni);
echo "<br>";

echo end($uni);
echo "<br>";
echo "<br>";

$t=array_merge($stud,$uni);
print_r($t);
echo "<br>";
echo "<br>";

$a=[1,2,3,4,5];
echo array_shift($a);
print_r($a);
echo "<br>";

echo array_push($a,"pari");
print_r($a);
echo "<br>";

echo array_unshift($a,"fefar");
print_r($a);
echo "<br>";

echo array_pop($a);
print_r($a);
echo "<br>";



?>