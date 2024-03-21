<?php 

declare(strict_types=1);

function get_user(object $db, string $username){
    
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result= $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}