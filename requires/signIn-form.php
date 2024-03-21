

<section id="details">
    <div class="container-fluid">
        <!-- Tab with forms to switch between sign up and register -->
        <div class="account-wrapper">
            
            <form action="includes/login.inc.php" method="post">
                <h1>Login</h1>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Username">
                    
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                             
                <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                <div class="sign-up-block">
                <h2>Don't have an account?</h2>
                <a href="reg-form.php">Register here!</a>
            </div>
            </form>

            <?php 
                check_login_errors();
            ?>
           

         <div class="reasonsToSignIn">
            <h2>Why Sign In?</h2>
            <ul>
                <li>Manage your kids accounts.</li>
                <li>Track Progress.</li>
                <li>Find new games to play.</li>
                <li>Swap and earn rewards.</li>
                <li>Connect with other parents.(Coming soon!)</li>                    
            </ul>
         </div>
            
        </div>
    </div>
</section>

