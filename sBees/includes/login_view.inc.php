<?php

declare(strict_types=1);

function check_user(){
    if (!isset($_SESSION['user_id'])) {
        // User is logged in
       echo '<a href="signIn.php">Sign In</a>';
    } else if (isset($_SESSION['user_id'])) {
        // User is not logged in
         echo '<a href="includes/logout.inc.php">Accounts</a>';
    }
}




function check_login_errors(){
    if(isset($_SESSION["error_login"])){
        $errors = $_SESSION["error_login"];
        echo "<br>";

        foreach($errors as $error){
            echo '<p class="error">'. $error . '</p>';
        }

        unset($_SESSION["error_login"]);
        
    }else if(isset($_GET["login"]) && $_GET["login"] == "success") {
        echo "<br>";
        echo "<p class='success'>Login successful!</p>";
    }
}