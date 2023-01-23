<?php 
function my_array(array $arr){
    foreach($arr as $val){
        echo $val . ' ';
    }
}

$arr = array("apple", "banana", "kiwi");
my_array($arr);
?>