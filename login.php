<?php 
    $page_title = "Login";
    include "./inc/header.php";
    include "./form-handlers/login-handler.php";
?>

<div class="main">

    <!-- Registration Form -->
    <div class="container">
        <h2 class="mt-3">Login Form</h2>
        <form action="login.php" method="POST" id="login-form">

            <div class="form-group mb-4 mt-3">
                <label for="log_user">Username</label>
                <input type="text" id="log_user" name="log_user" class="form-control" required>
            </div>

            <div class="form-group mb-4 mt-3">
                <label for="log_pass">Password</label>
                <input type="password" id="log_pass" name="log_pass" class="form-control" required>
            </div>
            
            <div class="terms-of-use">
                <p>
                    <strong>Don't have an account? </strong><a href="register.php">Click here to Register</a>
                </p>
            </div>

            <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
        </form>
    </div>

</div>
   
<?php 
    include "./inc/footer.php";
?>
