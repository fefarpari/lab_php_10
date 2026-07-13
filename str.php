<?php
echo strlen("atmiya");
echo "<br>";


$r=trim("  this  ");
echo $r;
echo "<br>";
$b=strlen($r);
echo $b;
echo "<br>";

echo substr("hello world",5);
echo "<br>";

echo substr_count("hello","l");
echo "<br>";

echo substr_compare("1 string   2", "string " , 2);
echo "<br>";

echo strcmp("abc def","abc");
echo "<br>";

echo strrev("atmiya");
echo "<br>";

echo strstr("php subject","j");
echo "<br>";

echo str_replace("php", "php", "java");
echo "<br>";
?>