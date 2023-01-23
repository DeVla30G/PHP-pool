<?php
function my_swap(&$x, &$y){
 $z = $x;
 $x = $y;
 $y = $z;
 echo $x, '/ ', $y;
    }
$x = "me";
$y = "you";
my_swap($x, $y);
?>