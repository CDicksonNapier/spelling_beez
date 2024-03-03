<?php
 require_once 'dbh.inc.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    try{
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
       

         // error array 
         $errors = [];

         if(is_input_empty($username, $password)){
             $errors["empty_input"] = "Please fill in all fields.";
             
         }
        
         $result = get_user($db, $username);

            if(is_username_wrong($result)){
                $errors["wrong_username"] = "Username or password is incorrect.";
            }if(!is_username_wrong($result)&& is_password_wrong($password, $result["password"])){
                $errors["wrong_password"] = "Username or password is incorrect.";
            }
                
 
         require 'config_session.inc.php';
 
         if($errors){
             $_SESSION["error_login"] = $errors;
             
             header("location: ../reg-form.php");
             die();
           
         }

         $newSessionId = session_create_id();
         $sessionId = $newSessionId . "_" . $result["id"];
         session_id($sessionId);
 

        $_POST_SESSION["user_id"] = $result["id"];
        $_SESSION["username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();
        header("location: ../accounts.php");
        $db = null;
        $stmt = null;
        die();


    }catch(PDOException $e){
        die("query failed: " . $e->getMessage());
    }
}
else{
    header("location: ../login-regPage.php");
    die();
}