<?php
function my_get_arr(...$var){
    $input = array();
    foreach($var as $value)
      {
        array_push($input, $value);
      }
     print_r($input);
}

my_get_arr(3, "hello", "wd");
?>