<?php
 function test()
 {
  $x=100;
  echo $x;

 }
 test();
 $y=10;
 echo "<br>";
 function marks()
 {
    global $y;
    echo $y;
    echo "<br>";
 }
 marks();
 echo $y;
 echo "<br>";
 function digit()
 {
    static $count=0;
    $count++;
    echo $count;
 }
 digit();
?>