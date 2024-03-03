
<!-- change user password -->
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
   

    try{
        require_once 'dbh.inc.php';

        $query = "UPDATE users SET password = :password WHERE user_id = :user_id AND username = :username";

        $stmt = $db->prepare($query);

        
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        

        $stmt->execute();

        $db = null;
        $stmt = null;

        header('Location: ../index.php?update=success');
        
        die();

    }catch(PDOException $e){
        header('Location: ../index.php?update=error');
        die('Queries failed');


    }
}