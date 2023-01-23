<?php
function my_print_args(...$arr){
     $args_string = "";
    foreach ($arr as $arg) {
        if(is_array($arg)){
            foreach($arg as $a){
                $args_string .= $a. PHP_EOL;
            }
        }else{
            $args_string .= $arg. PHP_EOL;
        }
    }
    echo $args_string;
}
my_print_args(3, "hello", "wd");

/*function my_args() {
    $args = func_get_args();
    $args_string = "";
    foreach ($args as $arg) {
        if(is_array($arg)){
            foreach($arg as $a){
                $args_string .= $a." ";
            }
        }else{
            $args_string .= $arg." ";
        }
    }
    echo $args_string;
} */
?>





