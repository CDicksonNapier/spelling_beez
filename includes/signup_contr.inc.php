<?php

declare(strict_types=1);

// error handler function
function is_input_empty(string $username, string $password, string $email){
    if(empty($username) || empty($password) || empty($email)){
        return true;
    }else{
        return false;
    }

}
// valid email checker
function is_email_invalid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else{
        return false;
    }
}

function is_username_taken( object $db, string $username){
    if (get_username($db,  $username)) {
        return true;
    }else{
        return false;
    }
}
function is_email_registered( object $db, string $email){
    if (get_email( $db,  $email)) {
        return true;
    }else{
        return false;
    }
}
function create_user( object $db, string $email, string $username, string $password){
    set_user( $db,  $email,  $username,  $password);
}