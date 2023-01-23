<?php
function sequence(int $nbr){
$str = "";
$count = 0;
$num = 1;
    for($i = 0; $i <= $nbr; $i++){   
        $str = $num;
        echo $str;
      while ($num < strlen($str)){
        $count ++;
        $num++;
      }

    }

}
sequence(5);
?>