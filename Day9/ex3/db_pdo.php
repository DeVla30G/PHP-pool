<?php
 const ERROR_LOG_File = 'errors.log';
 function connect_db($host, $username, $pwd, $port, $db){
   try {
    $dsn="mysql:host=$host;dbname=$db;post=$port";
    $conn = new PDO($dsn, $username, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    echo "Connexion succeeded";
} catch (PDOException $e){
echo "Connexion failed" . $e ->getMessage() . "storrage in :" . ERROR_LOG_File . '/n';
file_put_contents(ERROR_LOG_File, $e);
}
    
 }

?>