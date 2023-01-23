<?php
function get_angry_dog(int $nbr){

$str = "";
    for($i = 0; $i < $nbr; $i++){   
        $str = $str. "woof "; 
    }
    return $str . PHP_EOL ;
}
echo (get_angry_dog(5));
?>
