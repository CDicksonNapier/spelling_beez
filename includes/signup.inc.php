<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    try{

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // error handlers 
        // error array 
        $errors = [];

        if(is_input_empty($username, $password, $email)){
            $errors["empty_input"] = "Please fill in all fields.";
            
        }
        if(is_email_invalid($email)){
            $errors["invalid_email"] = "Invalid Email.";
        }
        
        if(is_username_taken($db, $username)){
            $errors["user_taken"] = "Username already taken!";
        }
        if( is_email_registered($db, $email)){
            $errors["email_registered"] = "Email already registered!";
        }

        require 'config_session.inc.php';

        if($errors){
            $_SESSION["error_signup"] = $errors;
            $signupData = [
                "email" => $email,
                "username" => $username
            ];
            $_SESSION["signup_data"] = $signupData;
            header("location: ../reg-form.php");
            die();
          
        }

        create_user( $db,  $email,  $username,  $password);
        header("location: ../signIn.php");

        $db = null;
        $stmt = null;


        die();
    



    }catch(PDOException $e){
        die("query failed: " . $e->getMessage());
    }

}else{
    header("location: ../reg-form.php");
    die();
}