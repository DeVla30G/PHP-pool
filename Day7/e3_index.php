<?php
session_save_path();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
         session_start();    
         if(htmlspecialchars($_GET["name"]))
         {  
             $_SESSION["name"] = htmlspecialchars($_GET["name"]);
             echo "Hello " . $_SESSION["name"];
             
         }elseif(!empty($_SESSION["name"])){
             echo "Hello " . $_SESSION["name"];
             $_SESSION['name'] = null;
         }else{
             echo "Hello platypus";
         }
        ?>
    </p>
</body>
</html>