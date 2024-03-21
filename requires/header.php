<!-- Description: Header for all pages -->
<!-- header info  -->
<?php
    require_once "includes/config_session.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
    <script src="https://kit.fontawesome.com/6f5b9ecf35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="static/css/header.css">
    <link rel="stylesheet" href="static/css/roots.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/parents-style.css">
    <link rel="stylesheet" href="static/css/games.css">
    <link rel="stylesheet" href="static/css/gamesList.css">
    <link rel="stylesheet" href="static/css/reg_signIn.css">
    <link rel="stylesheet" href="static/css/gameswindow.css">
    <link rel="shortcut icon" href="static/images/bee-icon.png"  type="image/png">
    <title><?php echo $title; ?> </title>
</head>

<body>
    <!-- Navigation header simple logo on the left menu on the right with hamburger menu when on smaller screens   -->
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="static/images/logo.png" alt="Spelling Bee Logo">
            </a>
        </div>
        <nav>
            <div id="nav" class="sidenav">
            <a href="../index.php" class="slider-logo">
                <img src="static/images/logo.png" alt="Spelling Bee Logo">
            </a>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="parentsPage.php">Parents</a>
                <a href="games.php">Games</a>
                <a href="books.php">Books</a>
                <a class="accounts-Btn"  href="signIn.php">Sign In</a>
                
                               
                  
                
            </div>
            <span  class="bgrMenu" onclick="openNav()">&#9776;</span> 
        </nav>
    </header>
   
     
            <div class="fullNav">
            <div class="logo"> <a href="index.php">
                <img src="static/images/logo.png" alt="Spelling Bee Logo">
            </a>  </div>
        <nav class="full-Nav">
        <a href="parentsPage.php">Parents</a>
        <a href="games.php">Games</a>
        <a href="books.php">Books</a>
        <?php if(!isset($_SESSION['username'])){ ?>

        <a class="accounts-full-Btn"  href="signIn.php">Sign In</a>

        <?php }else{ ?>
        <a class="accounts-full-Btn"  href="accounts.php">Accounts</a>
        <?php } ?>

       
          
        </nav> 
            </div>
 
    
           
           
        
    
  
    <!-- End of Navigation header simple logo on the left menu on the right with hamburger menu when on smaller screens   -->