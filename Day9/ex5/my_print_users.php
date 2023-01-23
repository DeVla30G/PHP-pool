<?php

$pdo = new PDO("mysql:dbname=gecko;host=localhost;port=3306", "vladi", "1234");

function my_print_users($bdd, ...$id){
   foreach($id as $value){
       try{
    if(is_int($value)==false){  
        throw new Exception("Invalid id given");
    }else{
        $rq = $bdd->prepare("SELECT name FROM users WHERE id=:id");
        $rq->bindParam(":id", $value, PDO::PARAM_INT);
        $rq->execute();
        $res = $rq->fetch(PDO::FETCH_OBJ); 
    if($res!=null){
        print_r($res->name);
        print_r("\n");
    }else if($res == null){
        echo "id No:" . $value . " doesn't exist" . PHP_EOL;
        return false;
        }
      }
    }
    catch (Exception $error) {
       echo $error->getMessage() ."\n";
       return false;
        }
        }
    return true; 
    }
?>