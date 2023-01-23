<?php
require("my_print_users.php");
$dsn = "mysql:dbname=gecko;host=localhost;port=3306";
$bdd = new PDO($dsn, "vladi", "1234");
my_print_users($bdd, 1, 3, 6);
?>