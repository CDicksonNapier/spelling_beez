
<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>
<section id="details">
    <div class="container-fluid">
        <!-- Tab with forms to switch between sign up and register -->
        <div class="account-wrapper">
            
            <form action="includes/signup.inc.php" method="post">
                <h1>Register</h1>
                <div class="form-group">
                    <label for="email">Email address</label>                    
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="username">User Name</label>                    
                    <input type="username" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Create a username">
                    <small id="username" class="form-text text-muted">Make it unique.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                </div>
              <br>
              
                <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                <div class="sign-up-block">
                <h2>Have an account?</h2>
                <a href="signIn.php">Login here!</a>
                <?php 
                check_signup_errors();
            ?>
            </div>
            </form>
           
            

      
            <div class="reasonsToSignIn">
                <h2>Why should you register?</h2>
                <ul>
                    <li>Manage your kids screen time.</li>
                    <li>Track Progress.</li>
                    <li>Constantly updating games and books.</li>
                    <li>Track Rewards.</li>
                </ul>
            </div>
        </div>
    </div>
</section>