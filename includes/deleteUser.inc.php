<?php 
require_once 'dbh.inc.php';
require_once 'login_model.inc.php';

    $username = isset($_SESSION['username']);
    $email = isset($_SESSION['email']);
    $user_id = isset($_SESSION['user_id']);
    $password = isset($_SESSION['password']);
if(isset($_POST['delete-user'])){
    

    $sql = "DELETE FROM users WHERE user_id = :user_id AND username = :username AND password = :password AND email = :email";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $db = null;
    $stmt = null;

    header('Location: ../index.php?delete=success');
    session_start();
    session_destroy();
    die();
}