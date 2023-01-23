<?php
function my_concat(&$x, &$y){
    echo $x, ' ', $y;
}
$x = 34;
$y = "world";
my_concat($x, $y);
?>