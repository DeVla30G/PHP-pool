<?php
$pdo = new PDO("mysql:dbname=gecko;host=localhost;port=3306", "vladi", "1234");

function my_password_change($bdd, $email, $new_pwd){
   $hash = password_hash($new_pwd, PASSWORD_DEFAULT);
        password_verify($new_pwd, $hash);
    if (!empty($new_pwd)) { 
        
            if (isset($email)) {

                $checkUserExist = $bdd->prepare("SELECT name FROM users WHERE email = :email ");
                $checkUserExist->bindParam(':email', $email, PDO::PARAM_STR);
                $checkUserExist->execute();
                $result = $checkUserExist->fetchAll(PDO::FETCH_ASSOC);
                return $result;
               /* if ($result != null) {
                    print_r($result->$email);
                    try {
                        $rq = "UPDATE users SET  password = :password VALUES WHERE email = :email";
                        $stmt = $bdd->prepare($rq);
                        $stmt->bindParam(':email', 'email', PDO::PARAM_STR);
                        $stmt->bindParam(':password', 'password', PDO::PARAM_STR_CHAR);
                        $stmt->execute();
                        $res = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo $e->getMessage() . "\n";
                    }
                    return $res;
                }*/
            }
        }
}
?>