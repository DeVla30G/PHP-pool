<?php 
$pwd = "";
$hash = "";
$salt = "";

function my_password_hash($pwd){
    $salt=uniqid();
    $hash=crypt($pwd, $salt);
    return ["hash"=>$hash, "salt"=>$salt];
}

function my_password_verify($pwd, $salt, $hash){

    $salt=uniqid();
    $hash=crypt($pwd, $salt);
    if(password_verify($pwd, $hash))
    {
        return true;
    }else{
        return false;
    }
}
var_dump(my_password_hash("toto"));
var_dump(my_password_verify("toto", $salt, $hash));
?>