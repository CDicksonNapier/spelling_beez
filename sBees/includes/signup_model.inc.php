<?php

declare(strict_types=1);
// check the DB to see if the username is taken
function get_username(object $db, string $username){
    $query = "SELECT username FROM users WHERE username = :username";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// check if users email is already registered
function get_email(object $db, string $email){
    $query = "SELECT email FROM users WHERE email = :email";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// set the user in the DB
function set_user(object $db, string $email, string $username, string $password){
    $query = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
    $stmt = $db->prepare($query);

    $options = [
        "cost" => 12
    ];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);


    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashed_password);
    $stmt->execute();
}