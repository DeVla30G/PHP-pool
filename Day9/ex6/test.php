<?php
require("pwd_change.php");
$dsn = "mysql:dbname=gecko;host=localhost;port=3306";
$bdd = new PDO($dsn, "vladi", "1234");
my_password_change($bdd, "hugo@hugo.com", "1234");
?>