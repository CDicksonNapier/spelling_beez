<?php


if (!isset($_SESSION["username"])) {
    header("Location: reg-form.php");
    exit();
}

?>
<section id="accounts">
    <div class="container-fluid">
        <div class="text-notification">
            <div class="hello-block">
                <h1><?php echo 'Welcome back,' . " " . $_SESSION["username"]; ?></h1>
            </div>
            <h2>This section is still being built so please do check back later.</h2>
            
            <!-- <div class="change-avatar">
                <h2>Change Avatar?</h2>
                <form action="" method="post">
                    <button type="submit" class="btn btn-primary">Change Avatar</button>
                </form>
            </div> -->
            <!-- <div class="change-pwd">
                <h2>Change Password?</h2> -->
                <!-- <form action="includes/userUpdate.inc.php" method="post">
                    <input type="password" name="password" placeholder="Enter new password">
                    <button type="submit" class="btn btn-primary">Change Password</button>
            </div> -->
            <div class="viewGame">
                <h2>View Games Played?</h2>
                <ul>
                    <li>Game 1</li>
                    <li>Game 2</li>
                    <li>Game 3</li>
                    <li>Game 4</li>
                    <li>Game 5</li>
                </ul>
            </div>
            <div class="viewPoints">
                <h2>View Points?</h2>

            </div>
            <!-- <div class="delete-account">
                <h2>Delete Account?</h2>
                <form action="includes/deleteUser.inc.php" method="post">
                    <input type="submit" name="delete-user" value="delete" class="btn btn-danger">
                </form>
            </div> -->
            <form action="includes/logout.inc.php" method="post">
                <input type="submit" name="logout" value="Logout" class="logout-btn">
            </form>
        </div>
    </div>
</section>