<?php 
function my_very_secure_hash($pwd){
if(!empty($pwd)){
   echo md5($pwd) . PHP_EOL;
}
}

$pwd = "hello";
my_very_secure_hash($pwd);
?>